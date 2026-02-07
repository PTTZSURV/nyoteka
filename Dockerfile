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

# Start PHP built-in server
CMD ["php", "-S", "0.0.0.0:3000", "index-modern.php"]
