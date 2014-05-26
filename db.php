<?php

$host='localhost';
$user='root';
$password='';
$db="chat";

$connection=  mysql_connect($host, $user, $password);
if(!$connection || !mysql_select_db($db,$connection)) {exit(mysql_error());}



