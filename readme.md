## ABOUT
Project to try out PHP Codeigniter both as MVC and as API.

## Requirements
* CodeIgniter 3.1.6
* MAMP
* PHP
* Postgres SQL

## USAGE
1. clone this repo and store it in the /Applications/MAMP/htdocs folder on your local hard drive
2. start psql and create table if needed
```
CREATE TABLE IF NOT EXISTS store_user (
    username character varying(45) NOT NULL UNIQUE,
    password character varying(450) NOT NULL,
    id integer DEFAULT nextval('user_id'::regclass) PRIMARY KEY
);

CREATE UNIQUE INDEX store_user_pkey ON store_user(id int4_ops);
CREATE UNIQUE INDEX store_user_username_key ON store_user(username text_ops);
```
3. configure database.php to connect to database in localhost
4. start MAMP server
5. browse http://localhost:8888/CodeIgniter-3.1.10/index.php/
6. this was intended to be backend service. possible routes are
* GET http://localhost:8888/CodeIgniter-3.1.10/index.php/api/user
* POST http://localhost:8888/CodeIgniter-3.1.10/index.php/api/user

## FRONT END ROUTES
* http://localhost:8888/CodeIgniter-3.1.10/index.php/
* http://localhost:8888/CodeIgniter-3.1.10/index.php/users/create
* http://localhost:8888/CodeIgniter-3.1.10/index.php/users/read
