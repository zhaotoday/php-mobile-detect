## PC 端/平板网站

域名：www.domain.com

```php
include_once('packages/mobiledetect/mobiledetectlib/Mobile_Detect.php');

$detect = new Mobile_Detect;

if ($detect->isMobile()) {
  header('Location: http://m.domain.com/');
}
```

## 移动端网站

域名：m.domain.com

```php
include_once('packages/mobiledetect/mobiledetectlib/Mobile_Detect.php');

$detect = new Mobile_Detect;

if (!$detect->isMobile()) {
  header('Location: http://www.domain.com/');
}
```