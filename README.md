Calendar a PHP module for contact forms.
==================================

[![Build Status](https://travis-ci.org/fnlive/calendar.svg?branch=master)](https://travis-ci.org/fnlive/calendar)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/fnlive/calendar/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/fnlive/calendar/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/fnlive/calendar/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/fnlive/calendar/?branch=master)

[![Latest Stable Version](https://poser.pugx.org/fnlive/calendar/v/stable)](https://packagist.org/packages/fnlive/calendar)[![Total Downloads](https://poser.pugx.org/fnlive/calendar/downloads)](https://packagist.org/packages/fnlive/calendar)

This is a calendar module for the Anax-MVC framework.

* Add a calendar to any page.

See calendar/webroot/testCalendar.php for example usage.

* [Calendar@Git](https://github.com/fnlive/calendar)
* [Calendar@Packagist](https://packagist.org/packages/fnlive/calendar)

Installation
--------------------
* Download [Anax-MVC release v.04](https://github.com/fnlive/Anax-MVC/releases/tag/v0.4) or later.
* Add following lines to Anax-MVC/composer.json, see below
* run *composer update* to download module and dependencies to vendor folder
* copy template files from calendar/view/calendar/* to Anax-MVC/app/view/calendar/
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

* Minor scrutinizer issues.


History
----------------------------------

v1.0 (2016-03-10)


```
 .   
..:  Copyright 2016 by Fredrik Nilsson (fn@live.se)
```
