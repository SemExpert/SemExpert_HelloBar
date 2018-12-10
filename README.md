# SemExpert_HelloBar

SemExpert_HelloBar adds a container before the default header meant to be used for special communication and 
promotional messages.  By default a special block is used that can be managed from store backoffice, but the container
can also be used to render all kinds of blocks.

[![Build Status](https://travis-ci.org/SemExpert/SemExpert_Hello.svg?branch=master)](https://travis-ci.org/SemExpert/StoreInfoBlocks)

## Getting Started

To get started you only need to add the module to an existing Magento2 installation.

### Prerequisites

You need a running copy of Magento2

### Install

To get HelloBar up and running, you need to add it as a dependency to your Magento composer.json file

Either edit composer.json

```json
{
  "require": {
    "semexpert/module-hello-bar": "*"
  }
}
```

or run composer require

```bash
php composer.phar require semexpert/module-hello-bar
```

after installing, you need to enable via the Magento CLI

```bash
php bin/magento module:enable SemExpert_HelloBar
```

## Running tests

This module provides only unit tests that can be hooked into Magento testsuite in the standard way

```bash
php bin/magento dev:tests:run unit
```

In order to run  this module's tests exclusively you can use the provided `dev/phpunit.xml` configuration file.

```bash
vendor/bin/phpunit -c vendor/semexpert/moodule-hello-bar/dev/phpunit.xml
```

### Coding Styles

The module follows Magento 2.2 PHP and Less coding standards. You should test your code using the provided black/white 
lists and phpunit.xml configuration.

```bash
cp ./dev/tests/static/phpunit.xml dev/tests/static/phpunit.xml
cp ./dev/tests/static/less/whitelist/common.txt dev/tests/static/testsuite/Magento/Test/Less/_files/whitelist/common.txt
cp ./dev/tests/static/php/whitelist/common.txt dev/tests/static/testsuite/Magento/Test/Php/_files/whitelist/common.txt
```

## Magento 2

### Components

TODO

### Usage

TODO

## Versioning

We use [SemVer](http://semver.org/) for versioning. To see available versions, check the [tags for this repository](https://github.com/SemExpert/StoreInfoBlocks/tags). 


## Authors

* **Pedro García Navarro** - *Initial work* - [perichus](https://github.com/perichus)
* **Matías Montes** - *Organized the repo and added Tavis stuff* - [barbazul](https://github.com/barbazul)

Also check the list of [contributors](https://github.com/SemExpert/StoreInfoBlocks/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

