<?php
$days="";
$price="";

$db = mysqli_connect('localhost', 'root', '', 'registration');
/*
if(!$db){
    die('connection error:'. mysqli_connect_error);
}else{
    echo"connected successfully";
}
*/
$connectDb=mysqli_select_db($db,'registration');

$result=mysqli_query($db,'select days from goa');

while ($row=mysqli_fetch_array($result)) {
    echo $row['days'];
}
?>