# Usage
```html
<x-breadcrumbs
    title="{{ __('Go dashboard') }}"
    route="dashboard"
>
    {{ __('Edit') }}: <b>#{{ $link->hash }}
</x-breadcrumbs>
```

# Publishing
### Views
```php
php artisan vendor:publish --tag="laravel-breadcrumbs-views"
```