<?php

include 'db.php';

$sender= (string)filter_input(INPUT_POST, 'sender');
$message=(string)filter_input(INPUT_POST,'message');

if(isset($_POST['ok'])){   
$query=mysql_query("INSERT INTO chat(Msg_ID, Sender, Message) VALUES (NULL, '$sender', '$message')");
if(!$query) print(mysql_error());
    
}

$query='SELECT * FROM chat ORDER BY `Msg_ID` DESC';

$result=mysql_query($query) or die(mysql_error());
$row=  mysql_num_rows($result);
while ($row = mysql_fetch_assoc($result)) {
    echo "<p>".
    $row['Sender'] . " sent: ".
            $row['Message'].
    
    "</p>";
}


