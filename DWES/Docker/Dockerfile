FROM php:8.3-apache

# Instalar y habilitar extensiones para MariaDB / MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Habilitar mod_rewrite de Apache (útil para URLs amigables / frameworks)
RUN a2enmod rewrite