# siteshotphp
Site-Shot.Com PHP API

Usage:
```php
require_once("siteshot.php");
$ss = new Siteshot;
print("<img src='".$ss->takeShot("https://google.com", array("width" => 640, "height" => 480, "fullsize" => false))."'>");
```
![Preview](https://i.imgur.com/tUlmR0u.png)
