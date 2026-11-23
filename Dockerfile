FROM php:8.3-apache

# PDO MySQL para la futura conexión a Clever Cloud (no se usa si no hay variables DB_*)
RUN docker-php-ext-install pdo pdo_mysql \
    && a2enmod rewrite headers expires deflate

# Raíz del sitio: carpeta public/
RUN sed -ri -e 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/000-default.conf

# Configuración del portal (enrutado, HTTPS y cabeceras de seguridad)
COPY apache/ruta-clara.conf /etc/apache2/conf-available/ruta-clara.conf
RUN a2enconf ruta-clara

# PHP en modo producción
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini" \
    && sed -i 's/^expose_php = On/expose_php = Off/' "$PHP_INI_DIR/php.ini"

COPY . /var/www/html/
RUN chown -R www-data:www-data /var/www/html

# Render inyecta $PORT (por defecto 10000)
COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh
RUN chmod +x /usr/local/bin/docker-entrypoint.sh
EXPOSE 10000
ENTRYPOINT ["docker-entrypoint.sh"]
CMD ["apache2-foreground"]
