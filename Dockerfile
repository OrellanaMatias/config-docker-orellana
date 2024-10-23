# Usa la imagen oficial de PHP con Apache
FROM php:8.1-apache

# Habilitar las extensiones necesarias
RUN docker-php-ext-install mysqli

# Copia los archivos del proyecto al contenedor
COPY . /var/www/html/

# Establece el directorio de trabajo
WORKDIR /var/www/html

