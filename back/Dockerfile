#docker run --name laraveltemp --mount type=bind,source="$(pwd)"/back,target=/var/www/html --rm -it -p 8000:8000 php:8.3-cli bash
# Use PHP 8.3 CLI image as base
FROM php:8.3-cli

# Install dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libzip-dev \
    && docker-php-ext-install zip pdo_mysql

# Set working directory
WORKDIR /var/www/html

# Copy application files
COPY . .

# Install Composer dependencies if needed
# RUN composer install --no-scripts --no-autoloader

# Start Laravel development server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=80"]
