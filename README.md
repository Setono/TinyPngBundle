# TinyPNG Bundle
Bundle that integrates [TinyPNG](https://tinypng.com/) into Symfony.

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE)
[![Build Status][ico-travis]][link-travis]
[![Quality Score][ico-code-quality]][link-code-quality]

## Installation

### Step 1: Download

Open a command console, enter your project directory and execute the following command to download the latest stable version of this bundle:

```bash
$ composer require setono/tiny-png-bundle
```

This command requires you to have Composer installed globally, as explained in the [installation chapter](https://getcomposer.org/doc/00-intro.md) of the Composer documentation.

### Step 2: Enable the bundle

Will be enabled by default when you use Symfony Flex.

### Step 3: Configure the plugin

```yaml
# config/packages/setono_tiny_png.yaml

setono_tiny_png:
    api_key: "INSERT YOUR API KEY"
    proxy: "INSERT PROXY" # Optional
```

[ico-version]: https://img.shields.io/packagist/v/setono/tiny-png-bundle.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/Setono/TinyPngBundle/master.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/Setono/TinyPngBundle.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/setono/tiny-png-bundle
[link-travis]: https://travis-ci.org/Setono/TinyPngBundle
[link-code-quality]: https://scrutinizer-ci.com/g/Setono/TinyPngBundle