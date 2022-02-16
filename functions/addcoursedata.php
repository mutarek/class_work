<?php 

$c_name = $_POST['cname'];
$c_price = $_POST['cprice'];
$c_duration = $_POST['cduration'];
$c_trainer = $_POST['course'];

$db = mysqli_connect("localhost","root","","class") or die("Error");
$insert_query = "INSERT INTO course (c_name,c_price,c_duration,c_trainer) VALUES 
('$c_name',$c_price,$c_duration,$c_trainer)";

mysqli_query($db,$insert_query) or die(mysqli_error());

header("Location: http://localhost/class_work/allcourse.php");

mysqli_close($db);


?>