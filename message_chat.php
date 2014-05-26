<?php

include 'db.php';

$sender= (string)filter_input(INPUT_POST, 'sender');
$message=(string)filter_input(INPUT_POST,'message');

var_dump($sender . " " .$message);
if(isset($_POST['ok'])){
   
$query=mysql_query("SELECT INTO chat(id, sender, message) VALUES (1, '$sender', '$message'");
}

$query='SELECT * FROM chat ORDER BY id DESC';

$result=mysql_query($query) or die(mysql_error());
$row=  mysql_num_rows($result);
while ($row = mysql_fetch_assoc($result)) {
    echo "<p>".
    $row['sender'] . "sent:<br>".
            $row['message'].
    
    "</p><br>";
}


