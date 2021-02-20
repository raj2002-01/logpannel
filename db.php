<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (mysqli_error($conn)) {
  die("Connection failed: " . mysqli_error($conn));
}


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$trade = $_POST['trade'];
$bpl = $_POST['bpl'];

$sql= "INSERT INTO adms (name,email,phone,trade,bpl) VALUES ('$name','$email','$phone','$trade','$bpl')";

if(mysqli_query($conn,$sql)){
	echo "<script>alert('new record created')</script>";
}
else{
	echo "Error".$sql."<br>".mysqli_error($conn);
}

mysqli_close($conn);


header("location:index.php");
exit();


?>