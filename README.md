**Setup steps:**

 - Create database in database using this name "weather-app".
 - Clone the current repository then checkout to the **dev** branch.
 - Rename .env.exmaple file into .env.
 - Configure the database and mail server in .env file.
 - Run the composer command like **composer install**.
 - If you get any error in composer command then run this command **composer install --ignore-platform-req=ext-fileinfo**.
 - Run the migration command like **php artisan migrate**.
 - Start the server using command like **php artisan serve**.
 - visit the site [Weather](http://127.0.0.1:8000/)
