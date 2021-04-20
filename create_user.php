<?php
$page_title = "Create User ";
include "includes/header.php"; ?>
<?php include "includes/navbar.php"; ?>
<?php include "db.php"; ?>

<div class="container">
<div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card mt-5">
                    <div class="card-header">
                        <h4> Create User</h4>
                    </div>
                    <div class="card-body">
                    <form action="" method="POST">
                            <div class="form-group mb-3">
                                <label for=""> Name :-</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Your Name" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Email :-</label>
                                <input type="Email" name="email" class="form-control" placeholder="Enter Your Email Adderess" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Balance :-</label>
                                <input type="text" name="balance" class="form-control" placeholder="Enter Balance" required>
                            </div>
                            <div class="form-group mb-3">
                                <button type="submit" name="Create" class="btn btn-success"> Create </button>
                                <a href="index.php" class = "btn btn-danger" name = "back" >Back</a>
                            </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

<?php

        if(isset($_POST['Create']))
            {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $balance = $_POST['balance'];
                
                
                $query = "INSERT INTO customer_detail (customer_name,customer_email,balance) VALUES ('$name','$email','$balance')";
                $query_run = mysqli_query($connection,$query);

                if($query_run)
                {
                    echo '<script type="text/javascript"> alert("User Created") </script>';
                    
                }
                else
                {
                    echo '<script type="text/javascript"> alert("Something Went Wrong") </script>';
                }

            }
            



        ?>







<?php include "includes/footer.php"; ?>