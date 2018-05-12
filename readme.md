# YuliusArdian/Validation
This validation package is based on Laravel Validation [illuminate/validation](https://github.com/illuminate/validation), so we can use the Laravel Validation outside of Laravel and using it in our project with freedom.

# Getting started
### Requirements
- PHP >= 5.6.4
### Installation 
```sh
$ composer -v require yuliusardian/validation
```
Or edit your composer.json and install it.
```php
  "require": {
    "yuliusardian/validation": "1.0"
  }
```
```sh
$ composer -v install
```

### Basic usage
```php
<?php
/**
 * since we installed it via composer,  we've to call autoload, this is optional 
 */
 require_once 'path/to/composer-vendor/autoload.php';
 
 use YuliusArdian\Validation\Factory;

 $validator = new Factory;
 $data  = ['name' => 'Hasna Putri Rahmatunissa', 'email' => 'hsnaputri'];
 $rules = ['name' => 'required|max:10', 'email' => 'required|email'];
 
 $validator = $validator->make($data, $rules);
 $errors    = $validator->errors()->all();
 var_dump($errors); 
```
From the code above, it will return error :
```sh
string(47) "The name may not be greater than 10 characters."
string(40) "The email must be a valid email address."
```
### Custom Language
By now, there is only two languages available for this package take a look the src/lang you will see en and id folder. the default language is en. Feel free if you want to contribute. Here's some example of using custom language :
```php
<?php
$validator = new Factory('id');
```

### More detail
For more detail about validation like custom message, available method, hooks, etc. Please visit the [Laravel Validation Document](https://laravel.com/docs/5.4/validation)

