<?php 
$kelime = $_GET['kelime'];
function GetMetodu($url) { 
    $ch = curl_init(); 
    curl_setopt($ch,CURLOPT_URL,$url); 
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true); 
 // curl_setopt($ch,CURLOPT_HEADER, false); 
    
    $output=curl_exec($ch); 
    curl_close($ch); 
    return $output; 
} 

echo GetMetodu("https://zetlink.tk/ai.php?mesaj=".$kelime);
?>
