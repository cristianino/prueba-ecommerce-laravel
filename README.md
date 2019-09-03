# Instalación (Sólo para base en unix)

### Para instalar el proyecto debe considerar que este es sensible al archivo .env

### Requisitos

1. Php > 7.1
2. Mariabd, mysql o postgresql.
3. Composer.
4. Nodejs > 8.1 (deploy y testing)

### Instalación

1. Clonar el proyecto del repositorio.
2. Instalar las dependencias del composer. Ejecutar `$ composer install`
3. Instalar las dependencias del npm. Ejecutar `$ npm install`. (deploy)
4. Copiar las imagenes de productos el seeder. Ejecutar `$ cp -r temp/products/ storage/app/public/`

5. Crear enlace simbolico entre public y storage
  `$ php artisan storage:link`

6. Crear el archivo envoltorio necesario: `$ cp .env.example .env`

7. Generar una llave para poder usar la app: `$ php artisan key:generate`

8. Añadir las credenciales de la base de datos en el archivo `.env`

9. Ejecutar las migraciones y seeder. Ejecutar `$ php artisan migrate --seed`

10. Pruebe que el proyecto funciona. Ejecutar `$ php artisan serve`
11. Añada las credenciales de placeToPay en `resource/js/store.js` para VUEX


## Acceso
El sistema tiene un sistema de rol simple. Usuario administrador y cliente. Para esto es importante ejecutar el seeder (paso 9)


### Credenciales
user: admin@example.com
pass: secret

## Notas:

El sistema no funciona desde el localhost
