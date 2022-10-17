# ManagePost-Backend

## Comenzando 🚀

_Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para propósitos de desarrollo y pruebas._

Mira **Deployment** para conocer como desplegar el proyecto.


### Pre-requisitos 📋

_Que cosas necesitas para instalar el software y como instalarlas_

```
NPM
PHP
APACHE
Mongodb
```

### Instalación 🔧

_Realice los siguientes paso para instalar el proyecto de manera local_

_1. Clonar el repositorio_

```
https://github.com/jeantech-zz/ManagePost-Backend.git
```

_2. Ejecutar el comando_

```
npm install
```
```
npm run dev
```
_3. Configurar el archivo .env con nuestros datos de configuraciond de base de datos y servicio de correo_

```
DB_CONNECTION=
DB_HOST=
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```

_3. Ejecutar el migraciones y datos de iniciales_

```
 php artisan migrate --seed
```


## Ejecutando las pruebas ⚙️

_Para ejecutar las pruebas se requiere_
```
 vendor/bin/phpunit 
```


## Despliegue 📦

_Para desplegar el proyecto se requiere ejecutar el comando_
```
 php artisan serve
```

## Construido con 🛠️

_Herramientas utilizastadas_

* [Laravel](https://laravel.com/) - El framework Backend


## Versionado 📌

Usamos [Git](https://github.com/) para el versionado.

## Autor✒️

* **Jennifer Andrea Tenorio** - *Desarrolladora* - [jeantech](https://github.com/jeantech-zz)
