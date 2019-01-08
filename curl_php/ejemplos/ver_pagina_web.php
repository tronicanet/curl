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
