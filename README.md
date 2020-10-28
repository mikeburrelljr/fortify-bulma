<p align="center"><img width="400" src="https://github.com/mikeburrelljr/fortify-bulma/raw/master/fortify-bulma-image.png"></p>

# Introduction

**FortifyBulma** is a Laravel Fortify UI preset, built with Bulma.

- [Requirements](#requirements)
- [Installation](#installation)

<a name="requirements"></a>
## Requirements

This package requires [*FortifyUI*](https://github.com/zacksmash/fortify-ui). Please, install that first before installing **FortifyBulma**.

<a name="installation"></a>
## Installation

To get started, you'll need to install **FortifyBulma** using Composer.

```bash
composer require mikeburrelljr/fortify-bulma
```

Next, you'll need to run the install command:

```bash
php artisan fortify-ui:install && php artisan fortify-ui:bulma
```

This command will publish **FortifyBulmas's** views and resources to your project.

- All `auth` views
- a `webpack.mix.js` file, tuned for Bulma
- a `package.json` file, for required NPM modules
- a slightly opinionated `.editorconfig` file
- a `.gitignore` file
- a new route for `user/profile`

<p align="center"><img  src="https://github.com/mikeburrelljr/fortify-bulma/raw/master/fortify-bulma-screenshot.png"></p>

## License

**FortifyBulma** is open-sourced software licensed under the [MIT license](LICENSE.md).
