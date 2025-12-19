FROM php:8.1-apache

# Activer mod_rewrite pour CodeIgniter
RUN a2enmod rewrite

# Installer extensions PHP nécessaires
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copier la config Apache
COPY ./apache.conf /etc/apache2/sites-available/000-default.conf

WORKDIR /var/www/html
