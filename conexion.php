<?php

$base=new PDO("mysql:host=localhost; dbname=myvet_animalia", "root", "");
$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$dbhost="localhost";
$dbname="pruebas";
$dbuser="root";
$dbpassword="";