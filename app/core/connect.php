<?php
$dbHost = '127.0.0.1';
$dbUsername = 'rezinunts'; 
$dbPassword = 'Mungching1!'; 
$dbDatabase = 'resonancedesigns';
$connectMe = mysqli_connect("$dbHost","$dbUsername","$dbPassword", "$dbDatabase") or die ("could not connect to mysql");
?>