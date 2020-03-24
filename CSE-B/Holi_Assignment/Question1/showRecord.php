
 <?php 
session_start();
     
     
$conn = mysqli_connect('localhost','root');
mysqli_select_db($conn,'student_db');


  ?>

<html>
<head>
<title>Records</title>
</head>
<body  bgcolor="#DAF7A6">

<?php
$sql = "select * from student";
$result = mysqli_query($conn, $sql);

if($result->num_rows > 0){
?>   
<table align="center" width="1000" border="2" bgcolor="#F6EFD3" border="1">
    <thead>
        <tr>
            <th>Enroll</th>
            <th>Name</th>
            <th>Age</th>
            <th>Course</th>
            <th>Branch</th>
            <th>Contact</th>
            <th>E-Mail</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
    <?php    
    while($data = $result->fetch_assoc()){ ?>
    <tr>
        <td><?php echo $data['enroll'];?></td>
        <td><?php echo $data['name']; ?></td>
        <td><?php echo $data['age']; ?></td>
         <td><?php echo $data['course']; ?></td>
        <td><?php echo $data['branch']; ?></td>
        <td><?php echo $data['contact']; ?></td>
        <td><?php echo $data['email']; ?></td>
        <td> <a href="edit1.php?id=<?php echo $data['enroll'];?>">Edit</a> </td>
        <td><a href="delete1.php?id=<?php echo $data['enroll'];?>">Delete</a></td>
    </tr>
    <?php } ?>
    </tbody>
    
<?php } ?>
</table>   
</body>   
</html>