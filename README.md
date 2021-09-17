# Gift Cards API

This project is an simple Lumen application to simulate gift card payment calculation

## Requirements

### Import DB

Import `gift_cards_api.sql` script stored in `database` directory

### Configuration

1 - Copy `.env.example` to `.env`

    ```bash
    cp .env.example .env
    ```

2- Edit `.env` file in function of your environment

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=gift-cards-api
    DB_USERNAME=your-username
    DB_PASSWORD=your-password

## Run application

1- Install dependencies

    ```bash
    composer install
    ```

2- Run

    ```bash
    php -S localhost:8000 -t public
    ```

## Test

After running appliation, you can use [POSTMAN](https://www.postman.com/downloads/) to test it.

I provide a POSTMAN Collection file named `gift-cards-api.postman_collection.json` to help you . ;-)
