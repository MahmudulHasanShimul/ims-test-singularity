* Clone the project.

* Extract the project in your directory where you want to put your project.

* Go to the project folder using cd command on your cmd or terminal.

* Set up the database: 
        => Create a database which name is inventory_management_system
* Run composer install on your cmd or terminal

* Copy .env.example file to .env on the root folder. You can type copy .env.example .env if using command prompt Windows or cp .env.example .env if using terminal, Ubuntu Open your .env file and change the database name (DB_DATABASE=inventory_management_system) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.

* By default, the username is root and you can leave the password field empty. (This is for Xampp)

=> Go to the project folder using cmd or terminal then use the command
1. composer install / composer update
2. copy .env.example .env (from your windows cmd)
3. php artisan key:generate
4. Now configure your database username, password, host etc in your .env file
5. php artisan migrate
6. php artisan serve

Go to http://127.0.0.1:8000/

If there was occured any error then run the following command and restart your local server

 1. php artisan config:clear
 2. php artisan cache:clear


** Admin Login Information ** 
email: admin@gmail.com 
password: 123456


Thank You.