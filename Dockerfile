# Gunakan PHP image dengan ekstensi yang diperlukan
FROM php:8.2-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    curl \
    git \
    nano

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy seluruh project Laravel ke container
COPY . .

# Install dependencies Laravel
RUN composer install

# Beri permission storage dan bootstrap
RUN chmod -R 777 storage bootstrap/cache

# Jalankan PHP-FPM di port 8000
CMD php artisan serve --host=0.0.0.0 --port=8000

EXPOSE 8000
