# laravel-responsive

Build a responsive layout. 

## Getting Started

Clone the project repository by running the command below if you use SSH

```bash
git clone git@github.com:kayzinsoedev/reefic.git
```

If you use https, use this instead

```bash
git clone https://github.com/kayzinsoedev/reefic.git
```

After cloning, locate to the project directory and run:
 
```bash
composer install
```

Copy env file `cp .env.example .env` 

Then run:

```bash
php artisan key:generate
```

### Prerequisites



#### Database Migrations

Be sure to fill in your database details in your `.env` file before running the migrations:

```bash
php artisan migrate
```

And finally, start the application:

```bash
php artisan serve
```

and visit [http://localhost/reefic/public/](http://localhost/reefic/public/) to see the application in action.

