<?php include'db_connection.php';

$Name = $_POST["name"];
$email = $_POST["email"];
$address = $_POST["address"];
$contact = $_POST["contact"];
$product = $_POST["product"];
$defect = $_POST["defect"];
$msg = $_POST['message'];
$date = date("Y/m/d");
$status = "..";

$sql = "INSERT INTO repair (Names,Addresss, Contact, Product, Defect, Messages,Dates,  Statuss ) VALUES ('$Name', '$address', '$contact','$product','$defect','$msg','$date','$status')";

if ($conn->query($sql) === TRUE) {
    header('location:../../index.php');
    
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

?>