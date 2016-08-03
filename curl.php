<?php



$url="http://www.mea.gov.in/indian-missions-abroad.htm";

     $ch = curl_init();
     curl_setopt($ch, CURLOPT_URL, $url);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
     $output = curl_exec($ch);
     curl_close($ch);
     echo $output;
