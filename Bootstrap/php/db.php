<?php
$dbcon = new mysqli('localhost', 'sleutel1', 'sander', 'babysafer');

if($dbcon->connect_errno > 0){
    die('Unable to connect to database [' . $dbcon->connect_error . ']');
}
?>