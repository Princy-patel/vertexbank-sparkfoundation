<?php
$page_title = "CONTACT_US";
include "includes/header.php"; ?>
<?php include "includes/navbar_contact_us.php"; ?>
<?php include "db.php"; ?>

<div class="container">
<div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card mt-5">
                    <div class="card-header">
                        <h4>CONTACT US</h4>
                    </div>
                    <div class="card-body">
                    <form action="" method="POST">
                            <div class="form-group mb-3">
                                <label for=""> FULL Name :-</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter Your Name">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Email :-</label>
                                <input type="Email" name="email" class="form-control" placeholder="Enter Your Email Adderess">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Phone Number :-</label>
                                <input type="text" name="phone" class="form-control" placeholder="Enter Your phone Number">
                            </div>
                            
                            <div class="form-group mb-3">
                                <button type="submit" name="send" class="btn btn-success"> SEND </button>
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


        if(isset($_POST['send']))
            {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                
                
                $query = "INSERT INTO contact_us (c_name,c_email,s_phone) VALUES ('$name','$email','$phone')";
                $query_run = mysqli_query($connection,$query);

                if($query_run)
                {
                    echo '<script type="text/javascript"> alert("DETAIL SEND") </script>';
                    
                }
                else
                {
                    echo '<script type="text/javascript"> alert("Detail not send sucessfully") </script>';
                }

            }
            



        ?>



<?php include "includes/footer.php"; ?>