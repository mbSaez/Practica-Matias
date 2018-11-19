Ingresar a XAMPP Control Panel e iniciar el servicio Apache y Mysql respecticavemnte.

## Conexion  con la BD

Configuracion del .env file.
-> Reemplazar nombre de BD, Usuario admin y password (si ocupo una para la conexion con la BD).
************************
* DB_DATABASE=DBname
* DB_USERNAME=UserName(root en la mayoria de los casos)
* DB_PASSWORD=Secret(Solo en caso de haber acupado password en la conexión).
************************
Una vez que esta establecida la conexión con al base de datos, se realiza la migracion de los datos con el siguiente comando:
* php artisan migrate 

Para la interacción, visualización y gestion de los datos en la BD se utilizara PhpMyAdmin. Para hacer ingreso a través del browser tecleamos: 
* localhost/phpmyadmin

Para hacer ingreso a través de XAMPP
Nos dirigimos a la parte de los servicios y en mysql damos click en "Admin".



# Iniciar requisitos

Para poder visualizar el proyecto en el browser local debes ir a la terminal de comandos (estando en la misma carpeta del proyecto -> CrudResource) e ingresar el 

siguiente comando:
-> php artisan serve <-
Esto iniciara el sevidor php arrojando el siguiente mensaje: "Laravel development server started: <http://127.0.0.1:8000>".

Una vez levantado el servidor solo bastara con escribir "localhost:8000" en el browser para visualizar la aplicación.

# Seguridad

Seguridad basada hasta el momento en auth, un componente propio de Laravel Framework 5.7.13(Autenticación).


