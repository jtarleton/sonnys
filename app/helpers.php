
<?php 
function public_path() {

$base_url = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != "off") ? "https" : "http");
$base_url .= "://".$_SERVER['HTTP_HOST'];
return $base_url .'/';
}