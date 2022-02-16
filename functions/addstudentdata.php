<?php 

$s_name = $_POST['sname'];
$s_number = $_POST['snumber'];
$s_course = $_POST['course'];

$db = mysqli_connect("localhost","root","","class") or die("Error");
$fetch_query = "SELECT * FROM course WHERE c_id = $s_course";
$result = mysqli_query($db,$fetch_query);
$eachdata = mysqli_fetch_assoc($result);

$s_trainer = $eachdata['c_trainer'];

$insert_query = "INSERT INTO student (s_name,s_number,s_course,s_trainer) VALUES 
('$s_name',$s_number,$s_course,$s_trainer)";

mysqli_query($db,$insert_query) or die(mysqli_error());

header("Location: http://localhost/class_work/home.php");
mysqli_close($db);


?>