# Use the official PHP image with Apache
FROM php:8.3-apache

# Update package lists and install Vim
RUN apt-get update && apt-get install -y vim

# Enable mod_rewrite
RUN a2enmod rewrite

# Install necessary PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Set session save path
RUN echo "session.save_path = \"/var/www/html/sessions\"" >> /usr/local/etc/php/conf.d/docker-php-session.ini

# Copy the custom Apache configuration file
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf

# Copy the PHP application files to the container
COPY . /var/www/html/

# Copy the entrypoint script
COPY docker-entrypoint.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

# Set working directory
WORKDIR /var/www/html/

# Expose port 80 to the outside world
EXPOSE 80

# Set entrypoint to the custom script
ENTRYPOINT ["docker-entrypoint.sh"]

# Start Apache in the foreground
CMD ["apache2-foreground"]
