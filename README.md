- KalidProyecto

Aplicación web para la gestión de equipos y jugadores deportivos.

- Requisitos

- PHP 8.1 o superior
- Composer
- Laravel 10
- MySQL
- Git

 Instalación

1. Clonar el repositorio:


   git clone https://github.com/KalidDiscua33/kalidproyecto.git
cd kalidproyecto

2.Instala las dependencias de PHP:

  composer install

3.Crea un archivo .env:
cp .env.example .env

4.Genera la key de la aplicación:

php artisan key:generate

5.Configura tu base de datos en el archivo .env.

6.Corre las migraciones para crear las tablas:

php artisan migrate
 
7. php artisan serve
