<?php
session_start();
include 'db_connection.php';

$uname = $_POST["username"];
$upass = $_POST["password"];

$sql = "SELECT * FROM admins";

$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    if ($row == TRUE) {
        if ($row["Email"] == "$uname" && $row["Passwords"] == "$upass") {
            $_SESSION['uName'] = $row["Names"];
            header('location:../dashboard.php');
        } else {
            echo "<h1><center>Invalied</center></h1>";
        }
    }
}
?>