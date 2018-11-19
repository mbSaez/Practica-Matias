## Proyecto-Practica ##
Proyecto para **Practica Matias** con interfaz Web, desarrollado en PHP en compañia del framework Laravel y almacenando datos en MySql.

- MySql como BD
- PHP 7.2.11 
- Laravel Framework 5.7.13
- XAMPP Control Panel v3.2.2

### Download Composer ###
* Instalador en Windows.
El instalador descargará Composer para usted y configurará su variable de entorno PATH para que pueda llamar composer desde cualquier directorio.

En el sitio oficial de Composer descargue y ejecute [Composer-Setup.exe](https://getcomposer.org): Esto instalará la última versión del compositor cada vez que se ejecute.

* Instalación por linea de comandos.
En la linea de comandos ejecutar el siguiente script:
```
php -r "copy ('https://getcomposer.org/installer', 'composer-setup.php');" 

php composer-setup.php 

php -r "unlink ('composer-setup.php');"

```
*El script al ser ejecutado realiza lo siguiente:*

- Descargar instalador en el directorio en el que estas situado.
- Ejecutar el instalador composer.
- Quitar el instalador.

### Download Laravel ###
Una buena alternativa para descargar Laravel es hacerlo con su propio instalador, el cual al ser un paquete podrá ser instalado globalmente con el siguiente comando:
```
composer global require "laravel/installer"

```
- Para MacOs y Linux se debe definir la variable PATH en:
*~/.bashrc o ~/.bash_profile*

Y la ruta que debe añadirse :
*:$HOME/.composer/vendor/bin*

- Para Windows, modificar la variable de entorno PATH para agregar esta ruta:
*C:\Users\tu-usuario\AppData\Roaming\Composer\vendor\bin*


### Download project ###
 El primer paso antes de hacer cualquier cosa es obtener el proyecto del repositorio. Para ello ingresamos en la linea de comandos lo siguiente:

```
 git clone https://github.com/mbSaez/Practica-Matias.git
```

Ingresar a *XAMPP Control Panel* e iniciar el servicio Apache y Mysql respecticavemnte.

### Conexion  con la BD ###

Configuracion del *.env file.*
**Reemplazar nombre de BD, Usuario admin y password** (si ocupó una para la conexion con la BD).

- **DB_DATABASE**=*DBname*
- **DB_USERNAME**=*UserName*(root en la mayoría de los casos)
- **DB_PASSWORD**=*UserRootPass*(Solo en caso de haber ocupado password en la conexión).

Una vez que está establecida la conexión con la base de datos, se realiza la migración de los datos con el siguiente comando:
```
 php artisan migrate 
```
### PHPMYADMIN ###
Para la interacción, visualización y gestión de los datos en la BD se utilizará PhpMyAdmin. **Para hacer ingreso a través del *browser* tecleamos:** 
```
 localhost/phpmyadmin
```
**Para hacer ingreso a través de *XAMPP*:**
Nos dirigimos a los servicios y en mysql damos click en **"Admin".**

### Iniciar requisitos ###

Para poder visualizar el proyecto en el browser local debes ir a la terminal de comandos (estando en la misma carpeta del proyecto *CrudResource*) e ingresar el 
siguiente comando:
```
 php artisan serve
 ```
Esto iniciara el sevidor php arrojando el siguiente mensaje: *Laravel development server started: <http://127.0.0.1:8000>.*

Una vez levantado el servidor solo bastará con escribir *localhost:8000* en el browser para visualizar la aplicación.

### Seguridad ###

Seguridad basada hasta el momento en **auth**, un componente propio de Laravel Framework 5.7.13(Autenticación).

Para hacer ingreso a través de XAMPP:

Nos dirigimos a la parte de los servicios y en mysql damos click en "Admin". 

### Referencias ###

**https://getcomposer.org**
**https://styde.net/instalacion-de-composer-y-laravel/**
 
 

