# Lara-Izitoast : Laravel Notification Package
This is a laravel notification package build on top of http://izitoast.marcelodolce.com/.

## How to use this package

- Get the package via composer
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

- Add http://izitoast.marcelodolce.com CSS and JS files.

Add by npm ``` npm install izitoast --save```

- On your layout blade add the files

``` <link href="{{ asset('css/iziToast.css') }}" rel="stylesheet">```

``` <script src="{{ asset('js/iziToast.js') }}"></script>```

- Include the package vendor file in Layout blade

``` @include('vendor.lara-izitoast.toast')```

- Remember to add also font-awesome or Icomoon https://fontawesome.com/?from=io / https://icomoon.io/

##Let's make a toast 

- Quick way to make a toast (notification)

```notify("Quick notification");```

or

``` notify("Let's make a toast","Toast","info","topRight"); ```
- Notification Methods

``` notify()->success("Message","Title","position", "icon); ```

``` notify()->success("Success notification test","Success","topRight"); ```

``` notify()->error("Error notification test","Error","topLeft"); ```
        
``` notify()->warning("Warning notification test","Warning","bottomLeft"); ```
        
``` notify()->info("Info notification test","Info","bottomRight");```
        
   ``` return view('welcome');```
   
 - And that's it.

## Contributing

Lara-Izitoast is distributed under the MIT license.

## About Apps:Lab
https://appslab.co.ke

