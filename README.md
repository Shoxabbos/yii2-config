Yii2 config
===========
Yii2 simple config

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist shoxabbos/yii2-config "*"
```

or add

```
"shoxabbos/yii2-config": "*"
```

to the require section of your `composer.json` file.


Demo
-----
![alt text](https://github.com/Shoxabbos/yii2-config/blob/master/demo.png)


Usage
-----

Once the extension is installed, simply use it in your code by  :

##### Run migrations
```php
./yii migrate  --migrationPath="@shoxabbos/config"
```


##### Controller map
For example: adding settings pages to admin module
```php
'modules' => [
    'admin' => [
        'class' => 'app\modules\admin\Module',
        'controllerMap' => [
            'config' => 'shoxabbos\config\controllers\ConfigController'
        ]
    ],
]
```

After that, you can open the pages as:
```php
/admin/config/create
/admin/config/update
/admin/config/view
/admin/config/index
```
