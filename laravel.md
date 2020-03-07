# Laravel使用

创建项目

```composer create-project --prefer-dist laravel/laravel newblog.com "5.2.*"```

激活Auth组件

```composer require laravel/ui```

```php 
composer require laravel/ui --dev
```

```php 
php artisan ui bootstrap --auth
```
运行数据库迁移

```php artisan migrate```


数据填充：

1,创建一个 articles 的表

```php 
php artisan make:migration create_articles_table

```
2,填写数据内容

```php
    public function up()
    {
		 Schema::create('articles', function (Blueprint $table) {
			$table->increments('id');
			$table->text('title');
			$table->text('content');
			$table->timestamps();
       });       //
    }

```

3, 创建一个表模型

```php
php artisan make:model articles
```
4, 在 app/articles.php 文件内添加如下语句

```php

protected $table='articles';

```
5，使用模型工厂生成模拟数据，需安装依赖包
```php 
composer require fzaninotto/faker
```

6,创建模型工厂文件,模型工厂文件路径 database/factories/ArticleFactory.php

```php 
php artisan make:factory ArticleFactory；
```
7,生成的模拟数据为英文，在 config/app.php 中添加或者修改下面这行，可生成中文模拟数据

```php
'faker_locale' = 'zh_CN',
```
8,在模型工厂文件内添加需要生成的模拟数据

```php 

$factory->define(App\articles::class, function (Faker\Generator $faker) {
    return [
        'title' => str_random(10),
        'content' => str_random(300),
    ];
});

```
9,创建数据填充文件，去调用模型工厂，生成数据

```php 
php artisan make:seeder ArticlesSeeder

```
10,调用 在 database/seeds/ArticlesSeeder.php,添加如下

```php 
	public function run()
	{
		factory(\App\Models\FakerUser::class)->times(1000)->make()->each(function ($model) {
			// 数据入库
			$model->save();
		});
	}
```
time() 是生成的次数，make() 方法是创建模型实例，在 each() 方法中将生成的模型实例入库保存。

11,进行数据填充

```php 
composer dump-autoload 

```

```php 
php artisan db:seed --class=ArticleSeeder

```

控制器生成

```php artisan make:controller IndexController```







会生成 IndexPagesController
控制器，存放在工程目录下：app/http/controller/IndexController.php

创建有工程目录的控制器 ：


```php artisan make:controller Index/IndexController```

会在 app/http/controller 目录下多出一个文件夹 Index
，里面存放着IndexController.php 控制器文件
文件内容如下
	<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;

	class IndexController extends Controller
	{
		//
	}

控制器内添加方法

	<?php

	namespace App\Http\Controllers;

	use Illuminate\Http\Request;

	class IndexController extends Controller
	{
		//
		/**
		* undocumented function
	*
	* @return void
	*/ 添加一个Index方法
	public function Index()
	{
		phpinfo();
	}
	
