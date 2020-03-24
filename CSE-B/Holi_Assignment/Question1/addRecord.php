<?php
include('connection.php');
?>


<?php 
if (isset($_POST['btn'])){
 echo "Dear, ".$_POST['username']." You are Welcome.".'<br>';
 $username = $_POST['username'];
 $age = $_POST['age'];
 $course = $_POST['course'];
 $branch = $_POST['branch'];
 $contact = $_POST['contact'];
 $email = $_POST['email'];
 $enroll = $_POST['enroll']; 
    
    $sql  = "INSERT INTO `student` (name, age,course,branch, contact, email,enroll) 
    VALUES ('$username', '$age','$course','$branch', '$contact', '$email','$enroll')";
    mysqli_query($conn, $sql);
    header("Location: show.php");
}
else{
    echo "Welcome Guest";
}
?>