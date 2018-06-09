FROM wordpress:4-apache

COPY themes /var/www/html/wp-content/themes
COPY plugins /var/www/html/wp-content/plugins
