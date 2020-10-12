# IThium 

## Installing dependencies for the project. 

```bash
    composer install
```

## Preparing to setup the .env file.

```bash
    cp .env.example .env
```

## Populate some enviroment variables.
The variables that you need to set are:

```javascript
    DB_CONNECTION
    DB_HOST
    DB_PORT
    DB_DATABASE
    DB_USERNAME
    DB_PASSWORD
    DB_AUTHENTICATION_DATABASE
```

## Generating Laravel API Key.

```bash
    php artisan key:generate 
```

## Generating JWT Secret Key.

```bash
    php artisan jwt:secret
```

## Building docker images.

```bash
    docker-compose up -d --build 
```
## Create the database and seet it.

```bash
    php artisan migrate:fresh --seed
```

## Run the server
```bash
    php artisan serve
```

