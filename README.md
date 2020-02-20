This module is add a static pages into your website
===================================================
This is standalone static module that will be add a admin control for pages. Include SEO tags and etc.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist klunker/yii2-pages "*"
```

or add

```
"klunker/yii2-pages": "*"
```

to the require section of your `composer.json` file.


Usage
-----

To use module in project please add module at application.
```php
'modules' => [
    'pages' => [
        'class' => 'klunker\pages\Module',
    ],
],```



Once the extension is installed, simply use it in your code by  :

```php
<?= \klunker\pages\AutoloadExample::widget(); ?>```