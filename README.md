# Acorn Post Types

[![Packagist Downloads](https://img.shields.io/packagist/dt/roots/acorn-post-types?label=downloads&colorB=2b3072&colorA=525ddc&style=flat-square)](https://packagist.org/packages/roots/acorn-post-types)
[![Follow Roots](https://img.shields.io/badge/follow%20@rootswp-1da1f2?logo=twitter&logoColor=ffffff&message=&style=flat-square)](https://twitter.com/rootswp)
[![Sponsor Roots](https://img.shields.io/badge/sponsor%20roots-525ddc?logo=github&style=flat-square&logoColor=ffffff&message=)](https://github.com/sponsors/roots)

Simple post types and taxonomies using Extended CPTs for Acorn.

## Support us

Roots is an independent open source org, supported only by developers like you. Your sponsorship funds [WP Packages](https://wp-packages.org/) and the entire Roots ecosystem, and keeps them independent. Support us by purchasing [Radicle](https://roots.io/radicle/) or [sponsoring us on GitHub](https://github.com/sponsors/roots) — sponsors get access to our private Discord.

## Requirements

- [PHP](https://secure.php.net/manual/en/install.php) >= 8.1
- [Acorn](https://github.com/roots/acorn) >= 4.0

## Installation

Install via Composer:

```bash
composer require roots/acorn-post-types
```

## Getting Started

Start by optionally publishing the post-types config:

```shell
wp acorn vendor:publish --provider="Roots\AcornPostTypes\AcornPostTypesServiceProvider"
```

## Usage

Post types and taxonomies can be configured in the published `config/post-types.php` file.

## Community

Keep track of development and community news.

- Join us on Discord by [sponsoring us on GitHub](https://github.com/sponsors/roots)
- Join us on [Roots Discourse](https://discourse.roots.io/)
- Follow [@rootswp on Twitter](https://twitter.com/rootswp)
- Follow the [Roots Blog](https://roots.io/blog/)
- Subscribe to the [Roots Newsletter](https://roots.io/subscribe/)
