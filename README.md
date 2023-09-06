# Faker Solar

Allow [fakerphp/faker](https://github.com/fakerphp/faker) to generate fake Solar data.

## Installation

Add the FakerSOlar library to your `composer.json` file:

```bash
composer require nystronsolar/faker-solar
```

## Usage

To  use this with Faker, you must add the `NystronSolar\FakerSolar\Solar` class to the Faker generator:

```php
<?php

$faker = \Faker\Factory::create();
$faker->addProvider(new \NystronSolar\FakerSolar\Solar($faker));

// Generator
$faker->solarInverterModel(); // A random Solar Inverter Model
```

## Contributing

```bash
git clone https://github.com/NystronSolar/FakerSolar.git
composer install
```

After you did the changes, run the PHP CS Fixer, Psalm and PHPUnit.

```bash
php vendor/bin/php-cs-fixer fix --verbose
php vendor/bin/psalm
php vendor/bin/phpunit
```
