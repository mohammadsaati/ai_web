FROM php:8.2-fpm

#copy composer.lock and composer.json file
COPY composer.lock composer.json /var/www/ai_site/

#set work directory
WORKDIR /var/www/ai_site

# Install dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zlib1g-dev \
    libzip-dev \
    zip \
    unzip \
    nano


# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Change ownership
RUN chown -R www-data:www-data /var/www/ai_site

# Copy the entire application directory to the container
COPY . /var/www/ai_site/

# Set permissions for storage and bootstrap/cache directories
RUN chmod -R 777 /var/www/ai_site/storage /var/www/ai_site/bootstrap/cache
RUN chown -R www-data:www-data /var/www/ai_site/storage /var/www/ai_site/bootstrap/cache

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
