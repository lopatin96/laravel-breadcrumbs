# Usage
```html
<x-laravel-breadcrumbs::breadcrumbs :breadcrumbs="[
    [
        'title' => __('Go dashboard'),
        'route' => 'dashboard',
    ],
    [
        'title' => __('Edit') . ': <b>#' . $link->hash . '</b>',
    ]
]"
/>
```

# Publishing
### Views
```php
php artisan vendor:publish --tag="laravel-breadcrumbs-views"
```