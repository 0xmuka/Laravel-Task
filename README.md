### Laravel Taks interview:

```
    git clone https://github.com/0xmuka/Laravel-Task/

```

### cd Laravel-Task

#### Install the project dependencies using Composer:

- # composer install

Set up the environment file:

Copy .env.example to .env:

cp .env.example .env

Then, generate the application key:

php artisan key:generate

Configure the database:

Open the .env file and set up your database connection:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```

Run the migrations to set up the database:

php artisan migrate

Start the Laravel development server:

php artisan serve
