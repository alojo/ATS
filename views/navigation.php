

<nav class="navbar navbar-default" >
    <div class="container-fluid">
        <div class="row"> 
           
                <div class="col-md-4">
                    <a href='/php_mvc_blog'>Home</a>
                </div>
                <div class="col-md-1 col-md-offset-6">
                  <?php 
                  if(isset($_SESSION['user_session'])){ ?>
                        <a href='?controller=users&action=logout'>Logout</a>
                  <?php }else{ ?>
                        <a href='?controller=users&action=login'>Login</a>
                  <?php } ?>
                </div>
                <div class="col-md-1">
                    <a href='?controller=users&action=register'>Register</a>
                </div>
            
        </div>
    </div>
</nav>