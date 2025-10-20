# Changelog for PHPCompatibilityPasswordCompat

All notable changes to this project will be documented in this file.

This projects adheres to [Semantic Versioning](https://semver.org/) and [Keep a CHANGELOG](https://keepachangelog.com/).

## [1.0.6] - 2025-10-18

This is a maintenance release.

* The ruleset now includes schema tags.
* General housekeeping and maintenance.

## [1.0.5] - 2025-01-16

This is a maintenance release.

* The recommended version of the [Composer PHPCS plugin] is now `^1.0.0`.
* README: Fixed some broken badges.
* General housekeeping and maintenance. Including a contribution by [@fredden].

## [1.0.4] - 2022-10-23

* README: Updated the installation instructions for [compatibility with Composer >= 2.2][composer22announce].
* Composer: The package will now identify itself as a static analysis tool. Thanks [@GaryJones]!
* Other housekeeping and minor documentation updates.

[composer22announce]: https://blog.packagist.com/composer-2-2/#more-secure-plugin-execution

## [1.0.3] - 2021-02-15

* The recommended version of the [Composer PHPCS plugin] is now `^0.7.0`, which offers compatibility with Composer 2.0.
* The ruleset is now also tested against PHP 7.4 and 8.0.
    Note: full PHP 7.4 support is only available in combination with PHP_CodeSniffer 3.5.6.
    Note: runtime PHP 8.0 support is only available in combination with PHP_CodeSniffer 3.5.7, full support is expected in PHP_CodeSniffer 3.6.0.

## [1.0.2] - 2019-08-29

* Composer: The recommended version of the [Composer PHPCS plugin] has been upped to `^0.5.0`.
* CI: Added early warning system for false positives due to changes in the polyfill library itself.

## [1.0.1] - 2018-12-16

* Prevent false positives when the ruleset is run over the code of the polyfill itself.
* The ruleset is now also tested against PHP 7.3.
    Note: full PHP 7.3 support is only available in combination with PHP_CodeSniffer 2.9.2 or 3.3.1+ due to an incompatibility within PHP_CodeSniffer itself.

## 1.0.0 - 2018-10-07

Initial release of the PHPCompatibilityPasswordCompat ruleset.

[Composer PHPCS plugin]: https://github.com/PHPCSStandards/composer-installer/

[1.0.6]:      https://github.com/PHPCompatibility/PHPCompatibilityPasswordCompat/compare/1.0.5...1.0.6
[1.0.5]:      https://github.com/PHPCompatibility/PHPCompatibilityPasswordCompat/compare/1.0.4...1.0.5
[1.0.4]:      https://github.com/PHPCompatibility/PHPCompatibilityPasswordCompat/compare/1.0.3...1.0.4
[1.0.3]:      https://github.com/PHPCompatibility/PHPCompatibilityPasswordCompat/compare/1.0.2...1.0.3
[1.0.2]:      https://github.com/PHPCompatibility/PHPCompatibilityPasswordCompat/compare/1.0.1...1.0.2
[1.0.1]:      https://github.com/PHPCompatibility/PHPCompatibilityPasswordCompat/compare/1.0.0...1.0.1

[@fredden]:   https://github.com/fredden
[@GaryJones]: https://github.com/GaryJones
