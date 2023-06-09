# Laravel-Test

A link shortener and to-do app written with Laravel to try out the framework.

## Setup

### Dependencies

-   Docker
-   Visual Studio Code with Dev Containers extension.

**Open the project with a [dev container](https://code.visualstudio.com/docs/devcontainers/containers) and follow these steps:**

Execute the following command to install all packages.

```sh
composer install
```

Execute the following command to create an empty database file and set the permissions.

```sh
touch ./storage/database.sqlite && chown -R sail ./storage && cp .env.example .env
```

Execute the following command to apply all migrations.

```sh
./artisan migrate
```

## Helpful projects

-   [phpstan](https://github.com/phpstan/phpstan)
-   [setup-php-action](https://github.com/tpetry/laravel-postgresql-enhanced)
-   [laravel-ide-helper](https://github.com/barryvdh/laravel-ide-helper)
-   [laravel-postgresql-enhanced](https://github.com/tpetry/laravel-postgresql-enhanced)
