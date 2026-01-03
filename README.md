## Installation

```bash
composer require indolat/filament-simple-theme
```

after install your package please run this command

```bash
php artisan filament-simple-theme:install
```

now run npm

```bash
npm i && npm run dev
```

finally register the plugin on `/app/Providers/Filament/AdminPanelProvider.php`

```php
->plugin(\Indolat\FilamentSimpleTheme\FilamentSimpleThemePlugin::make())
```

## Publish Assets

you can publish config file by use this command

```bash
php artisan vendor:publish --tag="filament-simple-theme-config"
```

you can publish views file by use this command

```bash
php artisan vendor:publish --tag="filament-simple-theme-views"
```

you can publish languages file by use this command

```bash
php artisan vendor:publish --tag="filament-simple-theme-lang"
```

you can publish migrations file by use this command

```bash
php artisan vendor:publish --tag="filament-simple-theme-migrations"
```

## Other Filament Packages

Checkout our [Awesome TomatoPHP](https://github.com/tomatophp/awesome)
