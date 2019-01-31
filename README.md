# Lara-Izitoast : Laravel Notification Package

![Demo Image](lara-izitoast/izitoast.png?raw=true "Demo Image")

This is a laravel notification wrapper build with http://izitoast.marcelodolce.com javascript library.

## How to use this package

### Config

- Change the configuration on lara-izitoast.php config dir.

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

``` php artisan vendor:publish --provider="LaraIzitoast\LaraIzitoastServiceProvider"```

- http://izitoast.marcelodolce.com CSS and JS files will be published in your public dir.

- On your layout blade add the files

``` 
<head>
   .....
   <link href="{{ asset('css/iziToast.css') }}" rel="stylesheet">
   .....
</head>
```

``` 
    <body>
    .....
    <script src="{{ asset('js/iziToast.js') }}"></script>
    .....
    <body/>
    
```

- Include the package view file in Layout blade below the iziToast js

``` @include('vendor.lara-izitoast.toast')```

- Remember to add also font-awesome or Icomoon https://fontawesome.com/?from=io / https://icomoon.io/ if you are going to use icons

## Let's make a toast 

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

## Contributing & License

Lara-Izitoast is distributed under the MIT license.

## About Apps:Lab
https://appslab.co.ke

