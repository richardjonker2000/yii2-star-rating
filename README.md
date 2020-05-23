Star Raiting
============
A simple extension to display a certain amount of stars

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist maxiorphy/yii2-star-rating "*"
```

or add

```
"maxiorphy/yii2-star-rating": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \maxiorphy\star_rating\ShowStars::widget(['rating'=>$yourRating]); ?>
```
 Where $yourRating is the amount of stars you want to display. At this stage the widget only displays medium stars.