
 <?php
include('connection.php');
?>
<?php $enroll= $_GET['enroll'];
?>

<?php
    $sql = "SELECT * FROM `student` WHERE enroll='$enroll'";
    $result = mysqli_query($conn, $sql);
    $data = $result->fetch_assoc();
    $username = $data['name'];
    $age = $data['age'];
    $course = $data['course'];
    $branch = $data['branch'];
    $contact = $data['contact'];
    $email = $data['email'];
     
?>

<?php
if(isset($_POST['btn'])){
    $username = $_POST['username'];
    $age = $_POST['age'];
      $course = $_POST['course'];
 $branch = $_POST['branch'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];

    $sql = "UPDATE `info2` SET name='$username', age='$age',course='$course',branch='$branch', contact='$contact', email='$email'WHERE enroll='$enroll'";
    if(mysqli_query($conn, $sql)){
        echo "Data updated successfully...";
    }
    else{
        echo "Updation Failed...Try Again";
    }
}
else{
    echo "Please click update button";
}
?>