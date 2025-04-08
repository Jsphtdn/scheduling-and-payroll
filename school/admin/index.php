<?php

include('authentication.php');
include('includes/header.php');

?>

<div class="container-fluid px-4">
    <h1 class="mt-4">Kurios Christian Colleges Foundation</h1>
    <ol class="breadcrumb mb-4">
    </ol>
        <div class="row">
        <div class="card">
                <div class="card-header">
                    <h4>Attendance</h4>
                </div>
                <div class="card-body">
                    
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Time In</th>
                            <th>Time Out</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $connect=mysqli_connect('localhost','root','','school');
                        $query = "SELECT * FROM users INNER JOIN attendance ON users.email=attendance.username";
                        $query_run = mysqli_query($connect, $query);
                        while ($row = mysqli_fetch_assoc($query_run))
                        {
                            if(mysqli_num_rows($query_run) > 0)
                            {
                                foreach($query_run as $row)
                                {
                                ?>
                                <tr>
                                <td><?= $row['username'];?></td>
                                <td><?= $row['fname'].' '['lname'];?></td>
                                <td><?= $row['position'];?></td>
                                <td><?= $row['time_in'];?></td>
                                <td><?= $row['time_out'];?></td>
                                </tr>
                                <?php
                                }
                            }
                        }
                        
                        ?>
                        
                    </tbody>
                </table>

                </div>
            </div>
    </div>

</div>
<?php
include('includes/footer.php');
include('includes/scripts.php');

?>