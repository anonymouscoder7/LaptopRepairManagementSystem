<?php include'db_connection.php';

$Name = $_POST["name"];
$Email = $_POST["email"];
$pass = $_POST["password"];
$address = $_POST["address"];
$contact = $_POST["contact"];
$specialist = $_POST["specialist"];

$sql = "INSERT INTO technician (Names, Email, Pass, Addresss, Contact, Specialist ) VALUES ('$Name', '$Email', '$pass', '$address','$contact', '$specialist')";

if ($conn->query($sql) === TRUE) {
    header('location:../technician.php');
    
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

?>