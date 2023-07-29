# Switch web component

This is a containerized version of the web component of the accessibility switch. It can configure the switch firmware via serial, and forseeably be hosted as a cloud service.

The contents of `manage.altdevs.net` should be placed in `public`.

### Build

```bash
docker-compose -f docker-compose.yml up -d --build
```

### Start

```bash
docker-compose -f docker-compose.yml up -d
```

### Copy `composer.lock` file from container

```bash
docker cp php-fpm:/var/www/composer.lock ./composer.lock
```

### Copy `vendor` directory from container

```bash
docker cp php-fpm:/var/www/vendor ./
```
