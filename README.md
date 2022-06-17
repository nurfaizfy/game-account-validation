# Game Validation API
 Game account validation by ID and Server
 
Installation
------------
```
composer require nurfaizfy/game-account-validation
```
GAME LIST
------------
```php
use Gonon\GameValidation;
require(__DIR__ . '/vendor/autoload.php');
echo $app->gameList();
```
CHECK
------------
```php
use Gonon\GameValidation;
require(__DIR__ . '/vendor/autoload.php');
echo $app->checkUser('MOBILE_LEGENDS', <USER_ID>, <ZONE_ID>);
```
License
------------

This open-source software is distributed under the MIT License. See LICENSE.md

Contributing
------------

All kinds of contributions are welcome - code, tests, documentation, bug reports, new features, etc...

* Send feedbacks.
* Submit bug reports.
* Write/Edit the documents.
* Fix bugs or add new features.