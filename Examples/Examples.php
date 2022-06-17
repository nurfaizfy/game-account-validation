<?php
require('vendor/autoload.php');

use Gonon\GameValidation;

$app = new GameValidation();

echo '<pre>';
var_dump($app->gameList());
echo '</pre>';
echo '<br><pre>';
var_dump($app->checkUser('MOBILE_LEGENDS', '960207848', '12821'));
echo '</pre>';