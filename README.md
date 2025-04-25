# sql-injection-vulnerable-website
 this website uses mysql as the backend and is vunlerable to sql injection attack

How to deploy application
Installations used in this tutorial:
XAMPP (https://www.apachefriends.org/download.html)


1. Clone this git repository to your local computer.

2. Find the index.php file located in this repository, and then copy it to your apache webserver directory. You can find the webserver file directory by accessing the httpd.conf file. Here's how to find the .conf file:
    - Find the folder where XAMPP is installed. Then head to the etc folder and open the httpd.conf file. Find the DocumentRoot line, this is the location of where we need to put our index.php

3. Open XAMPP and head to the managed server. Then start up MySql database and Apache Web Server.

4. Once they are running, type in localhost in your browser and the website should load up. The website has a username and password form and a submit button. The website will then echo "SUCCESS!" if the user successfully login and "Invalid username or password." if the username and password is incorrect.