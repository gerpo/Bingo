FROM php:8.0-fpm

# Arguments defined in docker-compose.yml
# ARG user
# ARG uid

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install node
RUN curl -sL https://deb.nodesource.com/setup_12.x | bash -
RUN apt install -y nodejs

# Create system user to run Composer and Artisan Commands
#RUN useradd -G www-data,root -d /home/app-user app-user
#RUN mkdir -p /home/app-user/.composer && \
#    chown -R app-user:app-user /home/app-user

RUN git clone https://github.com/gerpo/Bingo.git /var/www/bingo

# Set working directory
WORKDIR /var/www/bingo

RUN composer install
RUN npm install
RUN npm run prod

RUN cp .env.example .env
RUN chown -R www-data:www-data /var/www/bingo
RUN php artisan key:generate

USER www-data