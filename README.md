[<img src="https://cdn.anychart.com/images/logo-transparent-segoe.png?2" width="234px" alt="AnyChart - Robust JavaScript/HTML5 Chart library for any project">](https://anychart.com)
PHP basic template
=========================

This example shows how to use Anychart library with the PHP programming language, Symfony framework and MySQL database.

## Running

To use this sample you must have PHP installed (if not, please, install it http://php.net/manual/en/faq.installation.php);
MySQL installed and running (if not please check out https://dev.mysql.com/downloads/installer/ and follow instructions http://dev.mysql.com/doc/refman/5.7/en/installing.html) 
and Composer (if not please check out https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)

To check your installations, run the following command in the command line:
```
$ php -v
PHP 5.6.27-1+deb.sury.org~trusty+1 (cli)  # sample output
Copyright (c) 1997-2016 The PHP Group
Zend Engine v2.6.0, Copyright (c) 1998-2016 Zend Technologies
    with Zend OPcache v7.0.6-dev, Copyright (c) 1999-2016, by Zend Technologies
$ mysql --version
mysql  Ver 14.14 Distrib 5.5.52, for debian-linux-gnu (x86_64) using readline 6. # sample output
$ composer -V
Composer version 1.2.1 2016-09-12 11:27:19 # sample output
```

To start this example run commands listed below.

Clone the repository from github.com:
```
$ git clone git@github.com:anychart-integrations/php-symfony-mysql.git
```

Navigate to the repository folder:
```
$ cd php-symfony-mysql
```

Install dependencies:
```
$ composer install
```

Set up MySQL database, use -u -p flags to provide username and password:
```
$  mysql < database_backup.sql
```

Run example:
```
$ php bin/console server:run
```

Open browser at http://127.0.0.1:8000

## Workspace
Your workspace should look like:
```
php-symfony-mysql/
    app/               
        config/
            ...
            parameters.yml      # MySQL database settings
        Resources
            views/
                ...
                chart.html.twig     # html chart template
    bin/
    src/
        AppBundle/
            Controller/
                DefaultController.php   # main controller
            Entity/
                Fruit.php       # base data model
            ...
        ...
    tests/
    web/
        bundles/
        css/
            style.css       # style 
        ...
    .gitignore
    composer.json           # composer project settings
    composer.lock
    database_backup.sql     # MySQL database dump
    LICENSE
    phpunit.xml.dist
    README.md
```
More about Laravel directory structure you can read here: http://symfony.com/doc/current/quick_tour/the_architecture.html

## Technologies
Language - [PHP](http://php.net)<br />
Web framework - [Symfony](https://symfony.com)<br />
Tepmlate - [Twig](http://twig.sensiolabs.org/)<br />
Database - [MySQL](https://www.mysql.com/)<br />

## Further Learning
* [Documentation](https://docs.anychart.com)
* [JavaScript API Reference](https://api.anychart.com)
* [Code Playground](https://playground.anychart.com)
* [Technical Support](https://anychart.com/support)

## License
[© AnyChart.com - JavaScript charts](http://www.anychart.com). Released under the [Apache 2.0 License](https://github.com/anychart-integrations/php-symfony-mysql/blob/master/LICENSE).
