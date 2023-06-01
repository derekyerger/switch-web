# Тестовое приложение с использованием Docker Compose. Контейнеры: PHP, Nginx

### Build

```bash
docker-compose -f docker-compose.yml up -d --build
```

### Start

```bash
docker-compose -f docker-compose.yml up -d
```

### Copy composer.lock file from container

```bash
docker cp php-fpm:/var/www/composer.lock ./composer.lock
```

### Copy vendor directory from container

```bash
docker cp php-fpm:/var/www/vendor ./
```
