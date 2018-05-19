FROM wordpress:4-apache

COPY theme /var/www/html/wp-content/themes
COPY theme /var/www/html/wp-content/plugins
