# Symfony + GrumPHP

`symfony-grumphp` is configured GrumPHP with bunch of tools for static code analysis mainly based on [PSRs](https://www.php-fig.org/psr/) and [Symfony Coding Standards](https://symfony.com/doc/current/contributing/code/standards.html) for Symfony Framework projects.

[![GitHub release (latest SemVer)](https://img.shields.io/github/v/release/sci3ma/symfony-grumphp?style=flat-square)](https://github.com/sci3ma/symfony-grumphp)
[![GitHub](https://img.shields.io/github/license/sci3ma/symfony-grumphp?style=flat-square)](https://github.com/sci3ma/symfony-grumphp/blob/master/LICENSE)
[![Packagist (custom server)](https://img.shields.io/packagist/dt/sci3ma/symfony-grumphp?style=flat-square)](https://packagist.org/packages/sci3ma/symfony-grumphp/stats)
[![GitHub last commit](https://img.shields.io/github/last-commit/sci3ma/symfony-grumphp?style=flat-square&logo=github)](https://github.com/sci3ma/symfony-grumphp/commits/master)
[![Travis (.org)](https://img.shields.io/travis/sci3ma/symfony-grumphp?style=flat-square&logo=travis-ci)](https://travis-ci.com/sci3ma/symfony-grumphp)
[![Coveralls github](https://img.shields.io/coveralls/github/sci3ma/symfony-grumphp?logo=coveralls&style=flat-square)](https://coveralls.io/github/sci3ma/symfony-grumphp)

## Included tools
* [GrumPHP](https://github.com/phpro/grumphp): `phpro/grumphp`
* [PhpCpd](https://github.com/sebastianbergmann/phpcpd): `sebastian/phpcpd`
* [PHP-CS-FIXER](https://github.com/FriendsOfPHP/PHP-CS-Fixer): `friendsofphp/php-cs-fixer`
* [PHPLint](https://github.com/php-parallel-lint/PHP-Parallel-Lint): `php-parallel-lint/php-parallel-lint`
* [PhpMd](https://github.com/phpmd/phpmd): `phpmd/phpmd`
* [PHPStan](https://github.com/phpstan/phpstan): `phpstan/phpstan`
    * [Doctrine extension](https://github.com/phpstan/phpstan-doctrine): `phpstan/phpstan-doctrine`
    * [PHPUnit extension](https://github.com/phpstan/phpstan-phpunit): `phpstan/phpstan-phpunit`
    * [Symfony Framework extension](https://github.com/phpstan/phpstan-symfony): `phpstan/phpstan-symfony`
    * [TheCodingMachine's additional rules](https://github.com/thecodingmachine/phpstan-strict-rules): `thecodingmachine/phpstan-strict-rules`
* [PHPUnit Bridge](https://github.com/symfony/phpunit-bridge): `symfony/phpunit-bridge`
    * With Clover Coverage and percentage code coverage check
* [Enlightn Security Checker](https://github.com/enlightn/security-checker): `enlightn/security-checker`

## Requirements
PHP needs to be a minimum version of PHP 7.3.  
Symfony Framework needs to be a minimum version of Symfony Framework 4.0 or 5.0.

## Installation
To install `symfony-grumphp`, [install Composer](https://getcomposer.org/download/), execute the following command:
```
composer require --dev sci3ma/symfony-grumphp
```
and create (or update) configuration files:
```
./vendor/bin/symfony-grumphp install
```

## Configuration
You can, and perhaps you should, check and customize all configured tasks in `grumphp.yml` file in project root folder.

GrumPHP should be enabled by default but you can also enable GrumPHP yourself:
```
./vendor/bin/grumphp git:init
```
or disable GrumPHP:
```
./vendor/bin/grumphp git:deinit
```
You can find more GrumPHP configuration [here](https://github.com/phpro/grumphp/blob/master/doc/commands.md#installation).

##### Test code with the database
If you need to test code that interact with the database you need to instal [`dama/doctrine-test-bundle`](https://github.com/dmaicher/doctrine-test-bundle):
```
composer require --dev dama/doctrine-test-bundle
```
and uncomment extension `<extension class="DAMA\DoctrineTestBundle\PHPUnit\PHPUnitExtension" />` in `phpunit.xml.dist`.  
Read more about [how to Test Code that Interacts with the Database](https://symfony.com/doc/current/testing/database.html)

## Uninstall
If you want to uninstall this library remove configuration files first:
```
./vendor/bin/symfony-grumphp uninstall
```
then remove package:
```
composer remove sci3ma/symfony-grumphp
```

## Force run
You can run tests/checks our code without commit manually:
```
./vendor/bin/grumphp run
```
 
