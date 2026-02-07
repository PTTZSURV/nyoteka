FROM php:8.2-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libmariadb-dev \
    && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install mysqli

# Set working directory
WORKDIR /app

# Copy application files
COPY . /app/

# Expose port
EXPOSE 3000

# Use PORT environment variable if set, default to 3000
CMD php -S 0.0.0.0:${PORT:-3000} router.php
