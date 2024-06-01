# Learning PHP Application

This PHP application is built as part of a learning journey to understand PHP from the ground up. It follows a tutorial on [Laracasts](https://laracasts.com/series/php-for-beginners-2023-edition) to build a basic web application using PHP.

## Purpose

The purpose of this project is to learn the PHP programming language and web development concepts such as routing, templating, and working with databases. This knowledge will help me with my daily work @[Odevo](https://odevo.com) and building a new personal website using [Laravel](https://laravel.com/).

## How to Run

To run this application locally, you will need to have [Docker Desktop](https://www.docker.com/products/docker-desktop) installed on your system.

### Running with Docker Desktop

1. Clone this repository to your local machine.

```
git clone https://github.com/Aquabbas/learning-php.git
```

2. Navigate to the project directory. 3. Run the following command to build the Docker image:`

```
cd learning-php
```

```
docker compose up --build
```

3. To remove the Docker container, run the following:

```
docker compose down
```

4. Access the application in your web browser at [http://localhost:8080](http://localhost:8080).

### Setting up the Database

#### TablePlus on MacOS & MySQL Workbench on Windows

1. Open TablePlus/Workbench and connect to your local MySQL database using the following values:
    - Name (a.k.a. connection name):
    ```
    Demo
    ```
    - Host:
    ```
    127.0.0.1
    ```
    - Port:
    ```
    3306
    ```
    - User:
    ```
    root
    ```
    - Password:
        - Leave it blank (since your `docker-compose.yml` allows an empty password).
    - Database:
    ```
    myapp
    ```

#### Creating the Database Structure

2. Execute the following SQL commands to create the necessary tables (notes & users):

```
CREATE TABLE `notes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `body` text NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `notes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
```

```
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_idx` (`password`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
```

#### Populating the Database

3. Insert values into the database:

```
INSERT INTO `notes` (`id`, `body`, `user_id`) VALUES
(1, 'I use NeoVim btw.', 1),
(2, 'PHP is awesome!', 2),
(4, 'I will teach you PHP Laravel.', 2),
(6, 'Keep learning PHP!', 1),
(37, 'I\'m going to learn Arch Linux btw', 1);
```

```
INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'abbashayder@hotmail.com', 'cleartext'),
(2, 'jeffreyway@hotmail.com', 'cleartextw'),
(15, 'a@a.com', '$2y$10$nR0lwem.RcYJbpBKcDW/te/Hd40cbkJFOgyYYCNcfxsJOGjxj5qfW'),
(16, 'b@b.com', '$2y$10$iClz26ij5nPAZHQcR5kNduILYo28bVSZSgrOYalwwn6j6J24W0N6m');
```
