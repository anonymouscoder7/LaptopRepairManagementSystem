<?php include'db_connection.php';

$id = $_POST["id"];
$status = $_POST["status"];

$sql = "UPDATE repair SET Technician='$status' WHERE ID='$id'";

if ($conn->query($sql) === TRUE) {
    header('location:../repair.php');
    
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

?>