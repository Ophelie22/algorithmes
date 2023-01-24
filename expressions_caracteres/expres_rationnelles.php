<?php
//Le fonctions preg_match()
//
$chaine1 = 'Il y a plusieurs vêtements, vêtements, Vêtements !';
echo "<pre>";
echo preg_match(
    '/^(?:https?:\/\/)?([^\/]+)/',
    "https://www.php.net/index.html",
    $matches
), '<br>';
var_dump($matches);
echo "</pre>";
/* 1
array(2) {
  [0]=>
  string(19) "https://www.php.net"
  [1]=>
  string(11) "www.php.net"
} */