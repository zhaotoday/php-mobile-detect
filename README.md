## 参考

https://github.com/serbanghita/Mobile-Detect

## 安装

composer require mobiledetect/mobiledetectlib

## PC 端/平板网站

域名：[www.domain.com](http://www.domain.com/)

```php
require 'vendor/autoload.php'; 

$detect = new Mobile_Detect;

if ($detect->isMobile()) {
  header('Location: http://m.domain.com/');
}
```

## 移动端网站

域名：[m.domain.com](http://m.domain.com/)

```php
require 'vendor/autoload.php';

$detect = new Mobile_Detect;

if (!$detect->isMobile()) {
  header('Location: http://www.domain.com/');
}
```