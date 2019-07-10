<?php
include 'vendor/autoload.php';

$faker = \Faker\Factory::create();
$words = $faker->words($faker->numberBetween(2,10));


$str = 'вишня, груша, слива, груша';

$words = explode(',', $str);
$words = array_map('trim', $words);
$words = array_unique($words);
$words = implode(', ', $words);
$words = trim($words);
print_r($words);