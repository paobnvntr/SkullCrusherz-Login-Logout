# SkullCrusherz Login-Logout
##### This is a Basic Login Form &amp; Logout in PHP with Session and MySQL. 

![login-page](https://user-images.githubusercontent.com/95178829/211765415-0c851b83-8256-4c0a-93ee-95d112673123.png)
When the user submits the login form, the script checks if the entered username and password match any records in the "users" table of the MySQL database. 

![login-page-2](https://user-images.githubusercontent.com/95178829/211767717-f5590c69-e37d-4104-b9a9-4ce0d3397d78.png)
![home-page](https://user-images.githubusercontent.com/95178829/211767795-4daebf42-aacb-40cb-8b72-040b6c2cf3de.png)
If a match is found, the script starts a new session and sets the 'username' session variable to the entered username. The user is then redirected to the home page.

![home-page-logout](https://user-images.githubusercontent.com/95178829/211769189-c95854dd-b6e8-4e51-96a1-61a53303403c.png)
When the user clicks the logout link, the script ends the current session and unsets the 'username' session variable. The user is then redirected to the login page.
