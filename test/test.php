<?php

require '../vendor/autoload.php';

use YuliusArdian\Validation\Factory;

$validator = new Factory;

$validator = $validator->make(
	[
		'name' => 'Hasna Putri Rahmatunissa',
		'email' => 'hsnaputri'
	],
	[
		'name' => 'required|max:10',
		'email' => 'required|email'
	]
);

$errors = $validator->errors()->all();

foreach($errors as $err)
{
	var_dump($err);
}