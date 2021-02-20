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
 ?>


<?php


$id = $_GET['id']; // get id through query string

$query = "delete from adms where id = '$id'"; // delete query

$del = mysqli_query($conn, $query);

if($del)
{
   echo "<script>

   		 alert('Hello I am an alert box');

   </script>";
    header("location:tab.php"); // redirects to all records page
    // exit; 
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>