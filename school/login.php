<?php
session_start();

if (isset($_SESSION['auth']))
{
    if (!isset($_SESSION['message']))
    {
        $_SESSION['message'] = "You are already logged in";
    }
    
    header("location: index.php");
    exit(0);
}
include('includes/header.php');

?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                
            <?php include('message.php');?>

                <div class="card">
                    <div class="card-header">
                        <h4>User Login</h4>
                    </div>
                    <div class="card-body">

                    <form action="logincode.php" method="POST">
                        <div class="form-group mb-3">
                            <label>Email Id</label>
                            <input type="email" required name="email" placeholder="Enter Email Address" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label>Password</label>
                            <input type="password" required name="password" placeholder="Enter Password" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" name="login_btn" class="btn btn-primary">Login Now</button>
                        </div> 
                        </form> 
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

include('includes/footer.php');

?>