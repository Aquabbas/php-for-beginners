# Learning PHP Application

![image](https://github.com/user-attachments/assets/6cd4dc88-4411-48f6-943c-216774e78e94)

- This project is a PHP and MySQL application, developed by following the course
  [PHP for Beginners](https://laracasts.com/series/php-for-beginners-2023-edition)
  by Jeffrey Way on [laracasts.com](https://laracasts.com). My goal to is to learn
  the basics of PHP and web development concepts such as routing and templating,
  which will aid me in professional and personal projects.

## Requirements

- To run this application locally, you need to have installed/configured one of the
  following:

  - [Docker Desktop](https://www.docker.com/products/docker-desktop)
  - [Docker Engine](https://docs.docker.com/engine)

## Running the Application

1. Clone this repository to your local machine.

   ```Git
   git clone https://github.com/Aquabbas/learning-php.git
   ```

2. Navigate to the project directory:

   ```Zsh
   cd learning-php
   ```

3. Build the Docker Container/Image:

   ```Zsh
   docker compose up --build
   ```

You can now access the application in your web browser at [http://localhost:8080](http://localhost:8080).

## Other Handy Docker Commands

- **Start existing containers for a service**:

  ```Zsh
  docker compose start
  ```

- **Stops running containers without removing them**:

  ```Zsh
  docker compose stop
  ```

---

- **Start Services**:

  ```Zsh
  docker compose up
  ```

- **Stop Services**:

  ```Zsh
  docker compose down
  ```

---

### Setting Up the Database

To manage your database, use a `GUI` database application such as
[TablePlus](https://tableplus.com/download) or
[MySQL Workbench](https://dev.mysql.com/downloads/workbench).

#### Connection Instructions

- Connect to your local MySQL database using the following settings:

  - **Connection Name:**

    ```Text
    Demo
    ```

  - **Host:**

    ```Text
    127.0.0.1
    ```

  - **Port:**

    ```Text
    3306
    ```

  - **User:**

    ```Text
    root
    ```

  - **Password:**

    - Leave it blank (as your `docker-compose.yml` configuration file allows an
      empty password)

  - **Database:**

    ```Text
    myapp
    ```

#### Connecting to the database through `Neovim`

- If you use `Neovim`, you can use the [Vim Dadbod UI](https://github.com/kristijanhusak/vim-dadbod-ui)
  plugin to connect and query the database, using the following `Lazyzim` configuration:

```Lua
return {
    "kristijanhusak/vim-dadbod-ui",
    dependencies = {
        {
            "tpope/vim-dadbod",
            lazy = true,
        },
        {
            "kristijanhusak/vim-dadbod-completion",
            ft = {
                "sql",
                "mysql",
                "plsql",
            },
            lazy = true, -- Optional
        },
    },
    cmd = {
        "DBUI",
        "DBUIToggle",
        "DBUIAddConnection",
        "DBUIFindBuffer",
    },
    init = function()
        -- Your DBUI configuration
        vim.g.db_ui_use_nerd_fonts = 1

        -- Define database connections
        vim.g.dbs = {
            { name = "Demo", url = "mysql://root@127.0.0.1:3306/myapp" },
        }
    end,
}
```

#### Creating the Database Structure

- Execute the following SQL commands to create the necessary tables (notes & users):

```MySQL
CREATE TABLE `notes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `body` text NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `notes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
```

```MySQL
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_idx` (`password`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
```

#### Populating the Database

- Insert values into the database:

```MySQL
INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'donkeykong@hotmail.com', 'cleartext'),
(2, 'jeffreyway@hotmail.com', 'cleartextw'),
(3, 'a@a.com', '$2y$10$nR0lwem.RcYJbpBKcDW/te/Hd40cbkJFOgyYYCNcfxsJOGjxj5qfW'),
(4, 'b@b.com', '$2y$10$iClz26ij5nPAZHQcR5kNduILYo28bVSZSgrOYalwwn6j6J24W0N6m');
```

```MySQL
INSERT INTO `notes` (`id`, `body`, `user_id`) VALUES
(1, 'I use NeoVim btw.', 1),
(2, 'PHP is awesome!', 2),
(3, 'I will teach you PHP Laravel.', 2),
(4, 'Keep learning PHP!', 1),
(5, 'I\'m going to learn Arch Linux btw', 1);
```

---
