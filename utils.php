<?php 

    $API_KEY = "4922fbc62327a0b19bd0536994e5725b";

    function request($url) {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    }

?>