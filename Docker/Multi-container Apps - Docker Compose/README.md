# Laboratio

-- Bloque 1

docker container run \
-d \
--name postgres-db \
-e POSTGRES_PASSWORD=123456 \
-v postgres-db:/var/lib/postgresql/data \
postgres:15.1

-- Bloque 2

docker container run \
--name pgAdmin \
-e PGADMIN_DEFAULT_PASSWORD=123456 \
-e PGADMIN_DEFAULT_EMAIL=superman@google.com \
-dp 8080:80 \
dpage/pgadmin4:6.17

-- Bloque 1

# Ejecuta un contenedor de PostgreSQL

docker container run \
-d \ # Ejecutar en modo "detach" (en segundo plano)
--name postgres-db \ # Nombre del contenedor
-e POSTGRES_PASSWORD=123456 \ # Contraseña para el usuario de PostgreSQL
-v postgres-db:/var/lib/postgresql/data \ # Volumen para persistir los datos de la base de datos
postgres:15.1 # Imagen de PostgreSQL a utilizar

-- Bloque 2

# Ejecuta un contenedor de pgAdmin

docker container run \
--name pgAdmin \ # Nombre del contenedor
-e PGADMIN_DEFAULT_PASSWORD=123456 \ # Contraseña para el usuario de pgAdmin
-e PGADMIN_DEFAULT_EMAIL=superman@google.com \ # Correo electrónico del usuario de pgAdmin
-dp 8080:80 \ # Publicar el puerto 80 del contenedor en el puerto 8080 del host
dpage/pgadmin4:6.17 # Imagen de pgAdmin a utilizar

# Creamos una red para poder conectar los dos contenedores que descargamos anteriormente

docker network create nombre_de_nuestra_red

# Conectamos a nuestros dos contenedores a nuestra red creada

docker network connect nombre_de_la_red_creada + id_container
