<?php
//database connection;
$host = "localhost";
$user = "root";
$password = "";
$database = "mydatabase";

$myconnection = mysqli_connect($host, $user, $password, $database);
if($myconnection){
   echo "Succefully connect";
}else{
    die("Check the process");
}
$name = $_POST['name'];
$age = $_POST['age1'];
$place = $_POST['plc'];
$phone = $_POST['phone'];
$doctor = $_POST['doctor'];
$department = $_POST['department'];
$value = "INSERT INTO detailes (NAME,  AGE, PLACE, PHONE, doctor_name, department) VALUES ('$name', '$age', '$place', '$phone','$doctor', '$department')";

//check user give any textfield data is empty;
if(empty($name || $age || $place || $phone || $doctor|| $department)){ 
   echo '<h3>'.'please give the detiles correctly'.'</h3>';
}else if(mysqli_query($myconnection, $value)){
    echo '<h1>'.'Succesfully Booked'.'</h1>';
}





mysqli_close($myconnection);
?>