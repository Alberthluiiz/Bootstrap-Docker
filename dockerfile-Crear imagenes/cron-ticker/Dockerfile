# /app/usr/lib
FROM node:19.2-alpine3.16

# cd app
WORKDIR /app

# Dest /app
COPY package.json ./

# Instalar las dependencias
RUN npm install

# Dest /app
COPY app.js ./


# Comando run de la imagen
CMD [ "node", "app.js" ]





