# Laravel Unique Slug Generator
Unique slug generator for laravel Eloquent Model.

## Installaton

```sh
composer require billal4b/laravel-unique-slug
```

## Use from controller

#### Import first the UniqueSlug

```php
use Billal\UniqueSlug\Facades\UniqueSlug;
```

```php

$slug = UniqueSlug::generate(App\Models\Post::class, "First Post", "slug");
// first-post

//After crating a new post with slug post, then again hit
$slug = UniqueSlug::generate(App\Models\Post::class, "First Post", "slug");
// first-post-1

//After crating a new post with slug post, then again hit
$slug = UniqueSlug::generate(App\Models\Post::class, "First Post", "slug");
// first-post-2
```

#### Publish Configuration

```sh
php artisan vendor:publish billal4b/laravel-unique-slug
```

## Contribution
You are open to create any pull request.
