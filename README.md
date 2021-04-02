# To Do App

## About
This is a To Do app with CRUD functionality, created after learning about MVC and PHP frameworks
Cloned from an existing Slim 4 repo, then created my own MySQL database.
Uses Routing, the Dependency Injection Container, Factories, Controllers & Views to implement CRUD funtionality

## Live Demo
This To Do app is live here -
https://todo.2020-davin.dev.io-academy.uk/

## End User Features
- Add a new to do task
- View current or completed tasks
- Mark a task as completed
- Delete a completed task


## To Install & Run Locally
1. Clone repo locally & `cd` to directory
2. Run `composer install`
3. Create a new MYSQL database called `todo`
4. Adjust the DB connection details in the file `src/DBConnector.php` according to your local setup
5. Import the file `db/todo.sql` into your database and run it to create the `tasks` table and add some example data
6. Run this from a normal command prompt to start the app `php -S localhost:8080 -t public/ public/index.php`

