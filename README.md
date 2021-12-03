# About Us

Somos un grupo de DAW2 que tiene el objetivo de crear una pagina web para respaldar el videojuego que haremos con Unity llamado Runners Fights


# Commands:

Los comandos necesarios para que os funcione la web.

## Antes de nada:

- **composer install**

- **npm install**

- **cp .env.example .env**

- cambiar la linea 12 i poner **login_db**

- Abrir **XAMPP** activar Apache y MySQl. Pulsar en **Admin* de MySQL. Crear una nueva BBDD llamada login_db

## Para lanzar la app en local:

**php artisan serve** 

> si da error de "No application encryption key has been specified." usad: 
> **php artisan key:generate**

> Recordad tener la base de datos en local
<!--
`composer update` para ejecutar el siguiente :

`composer require laravel/ui` para instalar laravel/ui

`npm run watch`

`npm run dev`

`npm run production`
-->
