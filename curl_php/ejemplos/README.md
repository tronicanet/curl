


version de curl

```php
<?php

$version = curl_version();
 
$bitfields = Array(
            'CURL_VERSION_IPV6', 
            'CURL_VERSION_KERBEROS4', 
            'CURL_VERSION_SSL', 
            'CURL_VERSION_LIBZ'
   );
 
foreach($bitfields as $feature)
{
    echo $feature . ($version['features'] & constant($feature) ? ' coincide' : ' no coincide');
    echo PHP_EOL;
}
?>
```
# ver pagina web

```php
<?php 
 
    function curl($url) {
        $ch = curl_init($url); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE); 
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
        $info = curl_exec($ch); 
        curl_close($ch); 
        return $info;
    }
 
    $sitioweb = curl("https://web.com");
    echo $sitioweb;
?>
```
