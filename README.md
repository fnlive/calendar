Calendar a PHP module for contact forms.
==================================

This is a calendar module for the Anax-MVC framework.

* Add a calendar to any page.

See calendar/webroot/testCalendar.php for example usage.

* [Calendar@Git](https://github.com/fnlive/calendar)
* [Calendar@Packagist](https://packagist.org/packages/fnlive/calendar)

Installation
--------------------
* Download [Anax-MVC release v.04](https://github.com/fnlive/Anax-MVC/releases/tag/v0.4) or later.
* Add following lines to Anax-MVC/composer.json, see below
* run composer update to download module and dependencies to vendor folder
* copy template files from ??
* point your browser to file calendar/webroot/testCalendar.php to try out module

Anax-MVC/composer.json snippet:

        "require": {
            "php": ">=5.4",
            "fnlive/calendar":  "dev-master"
        },


By Fredrik Nilsson (fn@live.se)



License
----------------------------------

This software is free software and carries a MIT license.



Todo
----------------------------------

* Add extension for enabling sending av message through mail-service to arbitrary receiver.
* Add support for storing and retrieval of Contact details from database.
* Add unit testing for module.


History
----------------------------------

v1.0 (2016-03-05)


```
 .   
..:  Copyright 2016 by Fredrik Nilsson (fn@live.se)
```
