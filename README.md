# [Preconfigured PHP Coding Standards Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer)
Rule sets for Laravel projects/packages &amp; plain PHP


## Install
```bash
$ composer require arubacao/php-cs-fixer-config --dev
```

## Usage

#### Command
```bash
$ vendor/bin/php-cs-fixer fix ./ --config=vendor/arubacao/php-cs-fixer-config/laravel.php_cs -vv
```

#### Composer Script _(recommended)_
Add to your **composer.json** file

```json
    ...
    "scripts": {
        "cs": "vendor/bin/php-cs-fixer fix ./ --config=vendor/arubacao/php-cs-fixer-config/laravel.php_cs -vv"
    },
    ...
```
Now you can simple execute:
```bash
$ composer cs
```
