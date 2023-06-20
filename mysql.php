<!-- verificamos la version de nuestro mysql -->
mysql --version

<!-- ver manual de MySQL -->
man mysql

<!-- Acceso local -->
mysql -u root

<!-- Configuración de usuario y contraseña -->
CREATE USER 'luis'@'localhost' IDENTIFIED BY '123456';

<!-- Otorgar todos los privilegios al nuevo usuario -->
GRANT ALL PRIVILEGES ON *.* TO 'luis'@'localhost' WITH GRANT OPTION;


<!-- Si queremos que nuestro usuario root tenga contraseña ejecutamos la siguiente linea de codigo -->

mysql -u root
ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY '123456';

<!-- Otorgar todos los privilegios al nuevo usuario -->
GRANT ALL PRIVILEGES ON *.* TO 'luis'@'localhost' WITH GRANT OPTION;


<!-- comandos para ver los usuarios que tenemos -->
SELECT user FROM mysql.user;

<!-- comando para ver informacion mas detallada de los usuarios -->
SELECT user, host, authentication_string, plugin FROM mysql.user;

<!-- Comando para eliminar un usuario que creamos y no queremos -->
DROP USER 'nombre'@'localhost';

<!-- Si el usuario "luis" tiene permisos para conectarse desde cualquier host ('%'), la consulta sería: -->
DROP USER 'nombre'@'%';