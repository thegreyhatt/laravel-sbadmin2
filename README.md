# Start Bootstrap Admin 2 integration with Laravel 5
This package provides an easy way to quickly set up [SB Admin 2](https://startbootstrap.com/themes/sb-admin-2/) with Laravel 5. It has no requirements and dependencies besides Laravel, so you can start building your admin panel immediately. The package just provides a Blade template that you can extend and advanced menu configuration possibilities.

## 1. Requirements
Laravel 5.5.x to 5.8.x PHP >= 7.0.0
## 2. Installation

1. Require the package using composer:

	```
	composer require thegreyhatt/laravel-sbadmin2
	```

2. Add the service provider to the `providers` in `config/app.php`:

	```php
	Thegreyhatt\LaravelSBAdmin2\ServiceProvider::class
	```

3. Publish the public assets:

    ```
    php artisan vendor:publish --provider="Thegreyhatt\LaravelSBAdmin2\ServiceProvider" --tag=assets
    ```
## 3. Updating

1. To update this package, first update the composer package:

    ```
    composer update thegreyhatt/laravel-sbadmin2
    ```

2. Then, publish the public assets with the `--force` flag to overwrite existing files

    ```
    php artisan vendor:publish --provider="Thegreyhatt\LaravelSBAdmin2\ServiceProvider" --tag=assets --force
    ```
## 4. Usage

To use the template, create a blade file and extend the layout with `@extends('sbadmin2::page')`.
This template yields the following sections:

- `title`: for in the `<title>` tag
- `content_header`: title of the page, above the content
- `content`: all of the page's content
- `css`: extra stylesheets (located in `<head>`)
- `js`: extra javascript (just before `</body>`)

All sections are in fact optional. Your blade template could look like the following.

```html
{{-- resources/views/admin/dashboard.blade.php --}}

@extends('sbadmin2::page')

@section('title', 'Dashboard')

@section('content_header')
    Dashboard
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
```

You now just return this view from your controller, as usual.

## 5. Configuration

First, publish the configuration file:

```
php artisan vendor:publish --provider="Thegreyhatt\LaravelSBAdmin2\ServiceProvider" --tag=config
```

Now, edit `config/sbadmin2.php` to configure the title, skin, menu, URLs etc. All configuration options are explained in the comments. However, I want to shed some light on the `menu` configuration.

### 5.1 Menu

You can configure your menu as follows:

```php
'menu' => [
    [
    	'text'	=>	'Dashboard',
    	'url'	=>	'/dashboard',
    	'icon'	=>	'fa-tachometer-alt',
    ],
    	'Addons',
    [
    	'text'		=>	'Pages',
    	'icon'		=>	'fa-folder',
    	'submenu'	=>	[
    	'Login Screens:',
    		[
    			'text'	=>	'Login',
    			'url'	=>	'/login',
    		],
    		[
    			'text'	=>	'Register',
    			'url'	=>	'/register',
    		],
    		'Other Pages:',
    		[
    			'text'	=>	'404 Page',
    			'url'	=>	'#'
    		],
    		[
    			'text'	=>	'Blank Page',
    			'url'	=>	'#'
    		],
    	],
    ],
    [
    	'text'	=>	'Charts',
    	'url'	=>	'#',
    	'icon'	=>	'fa-chart-area',
    ],
    [
    	'text'	=>	'Tables',
    	'url'	=>	'#',
    	'icon'	=>	'fa-table',
    ],
],
```

With a single string, you specify a menu header item to separate the items.
With an array, you specify a menu item. `text` and `url` are required attributes.
The `icon` is optional, if you leave it out.
The available icons that you can use are those from [Font Awesome](http://fontawesome.io/icons/).
Just specify the name of the icon and it will appear in front of your menu item.

## 6. Customize views

If you need full control over the provided views, you can publish them:

```
php artisan vendor:publish --provider="Thegreyhatt\LaravelSBAdmin2\ServiceProvider" --tag=views
```

Now, you can edit the views in `resources/views/vendor/sbadmin2`.

## 7. Issues, Questions and Pull Requests

You can report issues and ask questions in the [issues section](https://github.com/thegreyhatt/laravel-sbadmin2/issues). Please start your issue with `ISSUE: ` and your question with `QUESTION: `

If you have a question, check the closed issues first. Over time, I've been able to answer quite a few.

To submit a Pull Request, please fork this repository, create a new branch and commit your new/updated code in there. Then open a Pull Request from your new branch. Refer to [this guide](https://help.github.com/articles/about-pull-requests/) for more info.
