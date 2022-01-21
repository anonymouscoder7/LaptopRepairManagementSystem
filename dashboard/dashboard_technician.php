<?php
session_start();

if (!isset($_SESSION['uName'])) {
    echo 'you are not log in';
    header('Location: ../login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin-Laptop repairing system</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <!--Top Nav-->
    <section class="top-nav">
        <div class="top-nav-content">
            <div class="left_area">
                <h3>Laptop repairing system</h3>
            </div>
        </div>
    </section>
    <section>
        <div class="sidebar">
            <center>
                <img src="images/user.jpg" alt="admin" style=" height:200px; border-radius: 50%; ">
                <h4 class="user-name"><?php echo $_SESSION['uName'] ?></h4>
            </center>
            <hr style="background-color:chartreuse;">
            <a href="logout.php"> <i class="fas fa-lock "></i><span>Logout</span></a>
            
        </div>
    </section> 

    <section>
        <div class="page-head">
            <h3>Repair</h3>
        </div>
        <div style="margin-left: 18%;">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Repair Product </th>
                        <th scope="col">Defect </th>
                        <th scope="col">Message </th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php include 'database/db_connection.php';
                    $nm = $_SESSION['uName'];
                    $sql = "SELECT * FROM repair WHERE Technician='$nm' ORDER BY ID DESC";
                    $result = $conn->query($sql);
                    while ($row = $result->fetch_assoc()) {
                    ?>
                        <tr>
                            <th><?php echo $row['ID'] ?></th>
                            <td><?php echo $row['Names'] ?></td>
                            <td><?php echo $row['Addresss'] ?></td>
                            <td><?php echo $row['Contact'] ?></td>
                            <td><?php echo $row['Product'] ?></td>
                            <td><?php echo $row['Defect'] ?></td>
                            <td><?php echo $row['Messages'] ?></td>
                            <td><?php echo $row['Dates'] ?></td>
                            <td><?php echo $row['Statuss'] ?>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter<?php echo $row['ID'] ?>">
                                    <i class="fa fa-pen"></i>
                                </button>
                            </td>

                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter<?php echo $row['ID'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Update Status</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="database/update_redpair_technician.php" method="POST">
                                        <input type="hidden" value="<?php echo $row['ID'] ?>" name="id">
                                        <div class="modal-body">
                                            <label for="inputState">State</label>
                                            <select name="status" id="inputState" class="form-control">
                                                <option selected>Choose...</option>
                                                <option>Active</option>
                                                <option>Completed</option>
                                                <option>Rejected</option>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </section>

</body>

</html>

<!-- Design & Developed By Myself _._._._._._._._ -->