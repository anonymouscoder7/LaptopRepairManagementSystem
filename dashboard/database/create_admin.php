<?php include'db_connection.php';

$Name = $_POST["name"];
$Email = $_POST["email"];
$password = $_POST["password"];
$address = $_POST["address"];
$contact = $_POST["contact"];

$sql = "INSERT INTO admins (Names, Email, Passwords, Addresss, Contact ) VALUES ('$Name', '$Email', '$password', '$address','$contact')";

if ($conn->query($sql) === TRUE) {
    header('location:../admin.php');
    
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

?>