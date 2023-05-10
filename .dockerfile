# Use the official PHP image as the base image
FROM php:7.4-apache

# Copy the application files into the container
COPY . ./

# Set the working directory in the container
WORKDIR ./

# Install necessary PHP extensions
RUN apt-get update && apt-get install -y \
    libicu-dev \
    libzip-dev \
    && docker-php-ext-install \
    intl \
    zip \
    && a2enmod rewrite

# Install Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && php -r "unlink('composer-setup.php');"

# Install Symfony CLI
RUN wget https://get.symfony.com/cli/installer -O - | bash \
    && mv /root/.symfony/bin/symfony /usr/local/bin/

# Copy vendor directory
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY --from=composer:latest /app/vendor/ /var/www/html/vendor/

# Expose port 80
EXPOSE 80

# Define the entry point for the container
CMD ["apache2-foreground"]
