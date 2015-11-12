<?php

$user = 'root';
$pass = '';
$db = 'GunnyLeatherDB';

$db = new mysqli ('localhost', $user, $pass, $db) or die("Unable to Connect");

echo"Looks like its working";

?>