<?php 
$t_name = $_POST['tname'];
$t_number = $_POST['tnumber'];
$t_dob = $_POST['tdob'];
$t_address = $_POST['taddress'];

$db = mysqli_connect("localhost","root","","class") or die("Error");

$insert_query = "INSERT INTO trainer (t_name,t_number,t_dob,t_address) VALUES 
('$t_name',$t_number,'$t_dob','$t_address')";

mysqli_query($db,$insert_query) or die(mysqli_error());

header("Location: http://localhost/class_work/alltrainer.php");

mysqli_close($db);

?>