<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center" color="red">
    SKELETON
</p>

## About Laravel Skeleton

Soon


# Installation

## Clone the repo

```
https://github.com/claudiusnascimento/skeleton.git
```

## Up the container

```
docker-compose up -d
```

## Access the container with 'sudo' permissions

docker exec -u root -t -i app /bin/bash

## Inside the container, run

```
composer install
```
## Folder permissions, inside the container yet
```
chmod -R 777 storage/
chmod -R 777 bootstrap/
```
## Generate the key
```
php artisan key:generate
```

## Exit the container

```
exit
```

## Access the application
```
http://localhost:8080
```

## To run migrations outside the container
```
sudo docker-compose exec app php artisan migrate
```
