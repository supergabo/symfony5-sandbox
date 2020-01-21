# symfony5-sandbox
Symfony 5 para aplicaciones tradicionales 

Ultima versión de Symfony 5 (20/01/2020)

Este sandbox no contiene la carpeta *vendor* ya que depende de la aplicación que vayas a desarrollar, solamente contiene los archivos que se ejecutaron conforme lo indica el sitio de symfony.com: > symfony new --full my_project

El Sandbox contiene tres archivos modificados:

* composer.json
* config/bootstrap.php
* bin/console

# Instalación de Symfony 5 para crear tu primera aplicación con las librerias esenciales de Symfony 5 

Descarga el sandbox a una carpeta donde tengas la configuración para mostrar tu sitio web:

Ejemplo: 

/home/supergabo/www/html/MiAppSymfony (se reemplaza el nombre del sandbox por MiAppSymfony)

o en Windows puedes usar la ruta que genera Bitnami WAMP:

C:\Bitnami\wampstack7\apache\htdocs\MiAppSymfony

Ingresa a la carpeta y si necesitas que tu carpeta *vendor* apunte afuera de tu carpeta Web, entonces hay que modificar los archivos:

* composer.json
* config/bootstrap.php
* bin/console

# composer.json

La línea que se agregó fue en la sección "config" donde se indica la ruta donde se encuentra la carpeta *vendor*:

"vendor-dir": "../../../frameworks/Symfony5/Symfony/vendor"

Yo utilicé una ruta de tres niveles por lo que tu htdocs debe estar a la misma altura de estos tres niveles, ejemplo:

/home/supergabo/www/html/symfony5-sandbox

El vendor se va a descargar a:

/home/supergabo/frameworks/Symfony5/Symfony/vendor

Lo mejor es usar rutas relativas por el motivo de los siguientes dos archivos.

En particular es mejor usar dirname(\_\_DIR\_\_) para que PHP sepa en que directorio estas ejecutando tu aplicación.

# bin/console

Se modificó la linea donde debe apuntar de tu directorio del sandbox al autoload de la carpeta *vendor*:

require dirname(\_\_DIR\_\_).'/../../../frameworks/Symfony5/Symfony/vendor"/autoload.php';

# config/bootstrap.php

Se modificó la linea donde debe apuntar de tu directorio del sandbox al autoload de la carpeta *vendor*:

require dirname(\_\_DIR\_\_).'/../../../frameworks/Symfony5/Symfony/vendor"/autoload.php';

Si necesitas que apunte a otro directorio es necesario que estos tres archivos apunten correctamente a la carpeta *vendor* y autoload.php

# Clona tu proyecto y ejecuta composer

https://symfony.com/doc/current/setup.html#setting-up-an-existing-symfony-project

Cambiar composer install por la instrucción:  composer update

Composer instalará la carpeta *vendor* en la ruta relativa indicada en el composer.json
