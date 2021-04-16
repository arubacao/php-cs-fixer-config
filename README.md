# Preconfigured PHP Coding Standards Fixer
**[php-cs-fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer) rule sets for Laravel &amp; plain PHP projects.**

**Note:** This project is unmaintained. I suggest you take a look at [matt-allan/laravel-code-style](https://github.com/matt-allan/laravel-code-style) instead.


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
Now you can execute:
```bash
$ composer cs
```
