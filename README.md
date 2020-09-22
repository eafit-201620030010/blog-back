# Aplicación web (back)


## Getting Started
These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

### Prerequisites
What things you need to install the software.

* Git.
* PHP.
* Composer.
* Laravel CLI.
* A webserver or Apache.

### Install
Clone the git repository on your computer
```
$ git clone https://github.com/eafit-201620030010/blog-back.git
```

You can also download the entire repository as a zip file and unpack in on your computer if you do not have git

After cloning the application, you need to install it's dependencies. 
```
$ cd blog-back
$ composer install
```

### Setup (Opcional) - Create an .env
When you are done with installation, copy the `.env.example` file to `.env`
```
$ cp  .env.example .env
```

Generate the application key
```
$ php artisan key:generate
```

Add your database credentials to the necessary `env` fields

Migrate the application
```
$ php artisan migrate 
```

### Run the application
```
$ php artisan serve
```

