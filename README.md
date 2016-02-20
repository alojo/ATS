### ATS ONLINE TEST ###

### Requirement ### 

Using PHP, MySQL, HTML/CSS, Javascript, MVC design pattern, write a login / register application.

### Setup ###

1) Pull the repository into your root folder.

   $ git clone https://github.com/alojo/ATS.git

2) Modify connection file to change your database settings.

3) Run schema file users.sql to create database 'ats' with one empty table 'users'

    $ mysql -e "source users.sql"

### Done ###

Now open your browser and visit `localhost/mvc_login_reg_app`, you will see the home page.

Play around by clicking login, register, home links provided

### Solution ###

This project is totally following the MVC pattern. No use of any framework at this point to save time.

Front end uses Bootstrap for CSS

No Javascript used. Can use to make it better

### Directories and File structure ###

mvc_login_reg_app
├── controllers                 The C of MVC Design interacting  with the model and the View
│   ├── pages_controller        
│   ├── users_controller
├── models                      The M of MVC for business logic and data manipulation
│   └── user.php                Interaction with user oblect (table) in the database
│
├── views                       The V of MVC handling all the renders
│   ├── pages
│   │   ├── errors.php
│   │   └── home.php
│   └── users
│   │   ├── login.php
│   │   └── register.php
│   ├── layout.php
│   └── navigation.php
└── connections                 The database connection
│
├── index.php                   The main page through with all requests passes
└── routes.php                  Routing is handled here

## Conclusion

This project is very simple, concentrating mainly on the correct use of MVC design pattern.
More features can be added following this structure.

