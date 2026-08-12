# Gunakan image PHP 8.2 dengan server Apache
FROM php:8.2-apache

# Install ekstensi sistem yang dibutuhkan Laravel (termasuk MySQL)
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    && docker-php-ext-install pdo_mysql zip

# Aktifkan modul rewrite Apache agar routing Laravel berfungsi
RUN a2enmod rewrite

# Ubah titik baca utama server ke dalam folder 'public' milik Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Salin seluruh kode proyek Anda ke dalam server Render
COPY . /var/www/html

# Install Composer dan dependensi Laravel
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --no-dev --optimize-autoloader

# Berikan izin tulis (write) khusus untuk folder storage dan cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
