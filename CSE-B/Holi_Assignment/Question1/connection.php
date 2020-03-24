<?php
$hostName = 'localhost';
$userName = 'root';
$password = '';
$databaseName = 'student_db';
    
$conn = mysqli_connect($hostName, $userName, $password, $databaseName);
if ($conn){
}
else{
    echo "Connection failed!!" + mysqli_connect_error();
}
?>
© 2020 GitHub, Inc.