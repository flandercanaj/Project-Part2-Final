# Use an official PHP image with Apache
FROM php:8.2-apache

# Copy project files to the Apache server directory
COPY src/ /var/www/html

# Expose port 80
EXPOSE 80
