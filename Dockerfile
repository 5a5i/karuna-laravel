# Step 1: Use an official PHP runtime as a parent image
FROM php:8.2-fpm

# Step 2: Set up working directory
WORKDIR /var/www/html

# Step 3: Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    zip \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql gd

# Step 4: Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Step 5: Copy application files
COPY . .

# Step 6: Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Step 7: Set appropriate permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html/storage

# Step 8: Expose port 8000
EXPOSE 8000

# Step 9: Start the Laravel server
CMD php artisan serve --host=0.0.0.0 --port=8000
