<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');

?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">

                        <?php include('message.php');?>

                        <h3>Hello</h3>
                        <button type="button" class="btn btn-primary" href="login.php">Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

include('includes/footer.php');

?>