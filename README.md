# MSIS Interview

The Control Room is the application Daung Capital use to manage their loan services. *More description to follow.*

## Installation

Follow the instructions below to install the app.

### Clone the repo

Run the following command in your terminal:

```
git clone https://github.com/zin-min-thu/MSIS
```

*Note: Prefer to use SSH. Ask your project maintainer if you need to submit your public key.*

### Install dependencies

Laravel use Composer to manage package dependencies. Make sure your development machine has Composer installed.

Go to your project root folder and run the following command:

```
composer install
npm install
```

### Create a local env file

To create a local env file, make a copy from example env file:

```
cp .env.example .env
```

Then update the config settings for database connection.

### Migrate the database

Make sure your database connection settings are valid.

Run the following command to create the database for the app:

```
php artisan migrate
```

After this point the app should be running from your web server. But you will not be able to use the app because there is no user to log in to the app.

Run the following command to create the default user:

```
php artisan serve
```

