<?php include'db_connection.php';

$id = $_POST["id"];
$Name = $_POST["name"];
$Email = $_POST["email"];
$pass = $_POST["password"];
$address = $_POST["address"];
$contact = $_POST["contact"];
$specialist = $_POST["specialist"];

$sql = "UPDATE technician SET Names='$Name', Email='$Email', Pass='$pass', Addresss='$address',Contact='$contact', Specialist='$specialist' WHERE ID='$id'";

if ($conn->query($sql) === TRUE) {
    header('location:../technician.php');
    
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

?>