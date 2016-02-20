### ATS ONLINE TEST 

### Requirement 

Using PHP, MySQL, HTML/CSS, Javascript, MVC design pattern, write a login / register application.

### Setup 

1) Pull the repository into your root folder.

      $ git clone https://github.com/alojo/ATS.git

2) Modify connection file to change your database settings.

      Open connection.php file
      Change following db settings to your settings:
         const DBHOST = 'localhost';  
         const DBUSER = 'root';
         const DBPASS = '';
         const DBNAME = 'ATS2';  [** if you are running the schema file users.sql, then please change DBNAME to 'ats']

3) Run schema file users.sql to create database 'ats' with one empty table 'users'

      $ mysql -e "source users.sql"

### DONE 

   Now open your browser and visit `localhost/mvc_login_reg_app`, you will see the home page.

   Play around by clicking login, register, home links provided

### SOLUTION 

   This project is totally following the MVC pattern. No use of any framework at this point to save time.

   Front end uses Bootstrap for CSS

   No Javascript used. Can use to make it better

### DIRECTORIES AND FILE STRUCTURE 

      mvc_login_reg [main folder under web root]
      controllers/  [controller folder with two files interacting with View and Model]        
      
      controllers/pages_controller.php
      controllers/users_controller.php
      
      models/                 [The M of MVC for business logic and data manipulation]
      models/user.php          [Interaction with user oblect (table) in the database]
      
      views/ [The V of MVC handling all the renders]
      views/pages
      views/pages/errors.php
      views/pages/home.php
      
      views/users
      views/users/login.php
      views/users/register.php
      
      views/layout.php
      views/navigation.php
      
      connections.php     [The database connection]
      index,php           [The main page through with all requests passes]
      routes.php          [Routing is handled here]

## CONCLUSION

   This project is very simple, demonstrating the right  use of MVC design pattern without use of any framework
   
