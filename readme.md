# SDK for Laravel5.3

## Installation/安装
```shell
composer require "lambq/sdk:1.0"
```

### laravel 5.*
> 在laravel config/app.php里面的providers添加下面的代码

```php
Lambq\Sdk\SdkServiceProvider::class
```

### 发布laravel扩展包
> 生成一个配置文件sdk.php 在 config文件夹下面

```shell
php artisan vendor:publish
```

## 配置

### 修改config/sdk.php文件内容

```php
return [
    'baidu_push_zz_site'    => '',
    'baidu_push_zz_token'   => '',
    'zz_api'                => '',
    'zz_host'               => '',
];
```

## 使用
> 调用了phpquery扩展包
> 返回网站的基本信息（标题、关键词、描述）
> 可调用的文件都在 Facades 文件里面