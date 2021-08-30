# Asciify

[![Latest Stable Version](http://poser.pugx.org/indeev/asciify/v)](https://packagist.org/packages/indeev/asciify) [![Total Downloads](http://poser.pugx.org/indeev/asciify/downloads)](https://packagist.org/packages/indeev/asciify) [![Latest Unstable Version](http://poser.pugx.org/indeev/asciify/v/unstable)](https://packagist.org/packages/indeev/asciify) [![License](http://poser.pugx.org/indeev/asciify/license)](https://packagist.org/packages/indeev/asciify)

This tool is used to convert any string containing letters with diacritics to string with ASCII (a-zA-Z) version of accented letters.

## Installation

You can install the package via composer:

```bash
composer require indeev/asciify
```

## Usage

```php
Asciify::convert('Příliš žluťoučký kůň pěl ďábelské ódy.')
// string: 'Prilis zlutoucky kun pel dabelske ody.'
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email katerinak@indeev.eu instead of using the issue tracker.

## Credits

-   [Petr Katerinak](https://github.com/indeev)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## PHP Package Boilerplate

This package was generated using the [PHP Package Boilerplate](https://laravelpackageboilerplate.com) by [Beyond Code](http://beyondco.de/).
