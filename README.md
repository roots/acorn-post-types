# Acorn Post Types

Simple post types and taxonomies using Extended CPTs for Acorn.

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
$ wp acorn vendor:publish --provider="Roots\AcornPostTypes\AcornPostTypesServiceProvider"
```

## Usage

Post types and taxonomies can be configured in the published `config/post-types.php` file.

## Bug Reports

If you discover a bug in Acorn Post Types, please [open an issue](https://github.com/roots/acorn-post-types/issues).

## Contributing

Contributing whether it be through PRs, reporting an issue, or suggesting an idea is encouraged and appreciated.

## License

Acorn Post Types is provided under the [MIT License](LICENSE.md).
