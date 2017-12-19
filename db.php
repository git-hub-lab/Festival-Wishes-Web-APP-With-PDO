<?php

$DB_host = "localhost";
$DB_user = "YOUR DB USER";
$DB_pass = "YOUR DB PASS";
$DB_name = "YOUR DB NAME";

try
{
    $DBcon = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
    $DBcon->exec("set names utf8");
    $DBcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //$DBcon->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    return $DBcon;
}
catch(PDOException $e)
{
    echo 'Connection failed: ' . $e->getMessage();
}

 ?>
