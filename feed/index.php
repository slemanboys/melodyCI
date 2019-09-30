<?php 
header('Content-Type: text/plain');
$url = 'http://melodysubs.net/feed/';
function wordFilter($text)
{
    $sed = $text;
    $sed = str_replace('http://melodysubs.net/', 'https://mldy.sinkaroid.org/application/controllers/get.php?anti=', $sed);
    return $sed;
}
echo wordFilter(file_get_contents($url));