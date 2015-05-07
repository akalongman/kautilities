# kautilities

PHP class to convert KA letters to LAT and back
## Installation

Install this package through [Composer](https://getcomposer.org/). Edit your project's `composer.json` file to require `longman/kautilities`.

```json
"require": {
    "longman/kautilities": "~1.0"
}
```

**Or** run a command in your command line:

```
composer require longman/kautilities
```

## Usage

```php
use namespace longman\\kautilities\\Converter

echo Converter::kaToLat('ა ბ გ დ');    // output: a b g d

echo Converter::latToKa('a b g d');    // output: ა ბ გ დ


```
