#Login Form

A login form that uses PHP and MySQL.
Usernames and passwords are queried from a MySQL database. Sessions are use to stop users from advancing before a correct username/password is entered.

#Usage 

A MySQL database needs to be created in order to use this scipt.
The way it is currently set up, the database uses the root user with an empty password. The database name should be "login" and the table name should be "UserName".
The table should have two columns, "userName" for the username and "pass" for the password.