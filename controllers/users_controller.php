<?php    

class UsersController
{
    public function login()
    { 
        // we expect a url of form ?controller=users&action=login&username=kkk&password=jjj
        // without an id we just redirect to the error page as we need the post id to find it in the database
        if (!isset($_POST['username']) && !isset($_POST['password'])) {
            //return call('pages', 'error');
            require_once('views/users/login.php');
        }else{
            
            // we use the given id to get the right post
            $user = User::login($_POST['username'], $_POST['password']);
            if($user instanceof User){
                $user_name = $_POST['username'];
                
                require_once('views/pages/home.php');
            }else{
                
                require_once('views/users/login.php');
            }
        }
    }

    public function logout()
    {
        session_destroy();
        unset($_SESSION['user_session']);
        echo 'in logout function'. '<br/>';
        var_dump($_SESSION);
        require_once('views/pages/home.php');
    /*
        if (AuthStorage::logged())
        {
            AuthStorage::remove();
            $this->redirect('index');
        }
        else
        {
            $this->view->message = 'You are not logged in.';
            $this->view->render('error');
        }
        */
    }
    
    public function register()
    { 
        $error = '';
        if (!isset($_POST['username']) ) {
            //return call('pages', 'error');
            require_once('views/users/register.php');
        }else{
           $error = User::validate($_POST) ;    
            if(empty($error)){
                //hash the password
                $hashedpassword = password_hash($_POST['password'], PASSWORD_BCRYPT); 
                $newuser = User::register($_POST['username'], $hashedpassword, $_POST['email'] );
                if(!empty($newuser)){
                    require_once('views/pages/home.php');
                }
            }else{
                $err_msg = implode("\n", $error);
                require_once('views/users/register.php');
            }
        }
         
     }
         
}