# Lara-Izitoast for Laravel Notification (Still under development)
This is a simple laravel notification package. It is still under development.

## How to use this package

**the guide might change later

- Get the package via 
``` bash 
composer require appslabke/lara-izitoast
```
- if you are not using Laravel 5.5 or higher add the service provider in your app.php under providers, in config dir.
``` bash
'providers' => [
    LaraIzitoast\LaraIzitoastServiceProvider::class,
]
```
If you are using Laravel 5.5 and above, the package will be auto-discovered by laravel

- Publish Lara-Izitoast package 

``` php artisan vendor:publish --provider=LaraIzitoast\LaraIzitoastServiceProvider```

- This package is made on top of http://izitoast.marcelodolce.com
You will have to add the Css and Js files.
You can add by npm ``` npm install izitoast --save```

- On your layout blade add the files

``` <link href="{{ asset('css/iziToast.css') }}" rel="stylesheet">```

``` <script src="{{ asset('js/iziToast.js') }}"></script>```

- Include the vendor file in Layout blade

``` @include('vendor.lara-izitoast.toast')```

- To make a toast 

``` toast("Let's make a toast","Toast","info","topRight"); ```

   ``` return view('welcome');```
   
 - And we done, Remember this package is still under development you can contribute.

## Contributing

Lara-Izitoast is distributed under the MIT license.


### Tests

Coming soon

