* El primer paso antes de hacer cualquier cosa es obtener el proyecto del repositorio. Para ello ingresamos en la línea de comandos lo siguiente: 

git clone https://github.com/mbSaez/Practica-Matias.git  

Ingresar a XAMPP Control Panel e iniciar el servicio Apache y MySQL respecticavemnte. 

## Conexión con la BD 

Configuración del .env file. 

-> Reemplazar nombre de BD, Usuario admin y password (si ocupo una para la conexión con la BD). 

************************ 

* DB_DATABASE=DBname 

* DB_USERNAME=UserName(root en la mayoría de los casos) 

* DB_PASSWORD=Secret(Solo en caso de haber ocupado password en la conexión). 

************************ 

Una vez que está establecida la conexión con la base de datos, se realiza la migración de los datos con el siguiente comando: 

* php artisan migrate   
 

Para la interacción, visualización y gestión de los datos en la BD se utilizara PhpMyAdmin. Para hacer ingreso a través del browser tecleamos:  

* localhost/phpmyadmin  

Para hacer ingreso a través de XAMPP:

Nos dirigimos a la parte de los servicios y en mysql damos click en "Admin". 

# Iniciar requisitos 

Para poder visualizar el proyecto en el browser local debes ir a la terminal de comandos (estando en la misma carpeta del proyecto -> CrudResource) e ingresar el  siguiente comando: 

-> php artisan serve <- 

Esto iniciara el servidor php arrojando el siguiente mensaje: "Laravel development server started: <http://127.0.0.1:8000>". 
Una vez levantado el servidor solo bastara con escribir "localhost:8000" en el browser para visualizar la aplicación.  

# Seguridad  

Seguridad basada hasta el momento en auth, un componente propio de Laravel Framework 5.7.13(Autenticación). 

 
 

