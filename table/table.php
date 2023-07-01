<table class="table table-striped table-hover table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name <i class="fa fa-sort"></i></th>
                        <th>Address</th>
                        <th>City <i class="fa fa-sort"></i></th>
                        <th>Pin Code</th>
                        <th>Country <i class="fa fa-sort"></i></th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                      include_once "conn.php";
                      $sql = "SELECT * FROM user";
                      $result = mysqli_query($conn,$sql);
                      while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr class="row-no-<?php echo $row['id']; ?>">
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td>89 Chiaroscuro Rd.</td>
                        <td><?php echo $row['email']; ?></td>
                        <td>+63 <?php echo $row['mobile']; ?></td>
                        <td>USA</td>
                        <td>
                            <a href="#" class="view" title="View" data-toggle="tooltip"><i class="material-icons">&#xE417;</i></a>
                            <a href="../color/index.php?id=<?php echo $row['id']; ?>" class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons">&#xE254;</i></a>
                            <a data-id="<?php echo $row['id']; ?>" href="" class="delete" title="Delete" ><i class="material-icons">&#xE872;</i></a>
                        </td>
                    </tr>
                    <?php } ?>
                    <!--href="delete.php?id=<?php //echo $row['id']; ?>"-->    
                </tbody>
            </table>