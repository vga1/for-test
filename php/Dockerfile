FROM php:8.1-fpm

# Встановлення необхідних розширень
RUN docker-php-ext-install mysqli

# Налаштування робочої директорії
WORKDIR /var/www/html

# Копіюємо файли до контейнера
COPY . /var/www/html