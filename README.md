### ATS ONLINE TEST 

### Requirement 

Using PHP, MySQL, HTML/CSS, Javascript, MVC design pattern, write a login / register application.

### Setup ###

1) Pull the repository into your root folder.

   $ git clone https://github.com/alojo/ATS.git

2) Modify connection file to change your database settings.

3) Run schema file users.sql to create database 'ats' with one empty table 'users'

    $ mysql -e "source users.sql"

### Done 

Now open your browser and visit `localhost/mvc_login_reg_app`, you will see the home page.

Play around by clicking login, register, home links provided

### Solution 

This project is totally following the MVC pattern. No use of any framework at this point to save time.

Front end uses Bootstrap for CSS

No Javascript used. Can use to make it better

### Directories and File structure 

mvc_login_reg_app      -- main folder under web root

controllers/           

controllers/pages_controller/
controllers/users_controller/




app/Config/config.ini       database settings
app/Config/routes.php       route definations

app/Controllers/
    - Controller            base class of all controllers
    - HomeController
    - UserController
    - ErrorController

app/Models/
    - Model                 base class of all models
    - UserModel

app/Views/
    - error404.phtml
    - home.phtml
    - login.phtml
    - register.phtml
    - welcome.phtml

common/                     kernel classes of the framework
    - Application.php
    - AutoLoader.php
    - Config.php
    - Database.php
    - ErrorHandler.php
    - Logger.php
    - Password.php
    - Request.php
    - Router.php
    - Session.php
    - Template.php

var/
    - logs/app.log
    - logs/error.log
    - var/sessions/

web                         DocumentRoot
    - css/style.css
    - js/login.js
    - js/register.js

web/.htaccess               Apache rewrite rules for clean url
web/index.php               front controller




- users
-------- login.php
-------- register.php
----- layout.php
----- navigation.php
-- connections
-- index.php
-- routes.php

## Conclusion

This project is very simple, concentrating mainly on the correct use of MVC design pattern.
More features can be added following this structure.

