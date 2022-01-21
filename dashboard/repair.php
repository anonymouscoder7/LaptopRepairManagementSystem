<?php include 'includes/head.php'; ?>
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
                    <th scope="col">Technician </th>
                    <th scope="col">Message </th>
                    <th scope="col">Date</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'database/db_connection.php';
                $sql = "SELECT * FROM repair ORDER BY ID DESC";
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
                        <td><?php echo $row['Technician'] ?>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#technicianModalCenter<?php echo $row['ID'] ?>">
                                <i class="fa fa-paper-plane"></i>
                            </button>
                        </td>
                        <td><?php echo $row['Messages'] ?></td>
                        <td><?php echo $row['Dates'] ?></td>
                        <td><?php echo $row['Statuss'] ?>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter<?php echo $row['ID'] ?>">
                                <i class="fa fa-pen"></i>
                            </button>
                        </td>
                        <td>
                            <a href="database/delete_repair.php?id=<?php echo $row['ID'] ?>"><button class="btn btn-secondary"><i class="fa fa-trash"></i></button></a>
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
                                <form action="database/update_repair.php" method="POST">
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
                     <!-- tech Modal -->
                     <div class="modal fade" id="technicianModalCenter<?php echo $row['ID'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Update Technician</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="database/update_repair_technician.php" method="POST">
                                    <input type="hidden" value="<?php echo $row['ID'] ?>" name="id">
                                    <div class="modal-body">
                                        <label for="inputState">State</label>
                                        <select name="status" id="inputState" class="form-control">
                                            <option selected>Choose...</option>
                                            <?php 
                                            $sql1 = "SELECT * FROM technician ORDER BY ID DESC";
                                            $result1 = $conn->query($sql1);
                                            while ($row1 = $result1->fetch_assoc()) {
                                            echo"
                                            <option>" .$row1['Names']. "</option>
                                            ";
                                            }
                                            ?>
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
<?php include 'includes/foot.php'; ?>