# simple_phpunit
my simple phpunit

https://phpunit.de/getting-started-with-phpunit.html

0. need review and update composer.json
1. composer dumpautoload
2. run test
    $./vendor/bin/phpunit --bootstrap ./vendor/autoload.php tests/Utilities/EmailTest.php
    $./vendor/bin/phpunit --bootstrap ./vendor/autoload.php --testdox tests/Utilities/EmailTest.php