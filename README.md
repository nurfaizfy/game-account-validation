# Game Validation API
 Game account validation by ID and Server

## Documentation
[Documentation](https://documenter.getpostman.com/view/10409939/UzBmLSJa)
 
## Installation
------------
```
composer require nurfaizfy/game-account-validation
```
## Game List
------------
```php
use Gonon\GameValidation;
require(__DIR__ . '/vendor/autoload.php');
echo $app->gameList();
```
## Validate Account
------------
```php
use Gonon\GameValidation;
require(__DIR__ . '/vendor/autoload.php');
echo $app->checkUser('MOBILE_LEGENDS', <USER_ID>, <ZONE_ID>);
```
## License
------------

This open-source software is distributed under the MIT License. See LICENSE.md

## Contributing
------------

All kinds of contributions are welcome - code, tests, documentation, bug reports, new features, etc...

* Send feedbacks.
* Submit bug reports.
* Write/Edit the documents.
* Fix bugs or add new features.