<?php
$page_title = "transaction money";
include "includes/header.php"; ?>
<?php include "includes/navbar_transaction_money.php"; ?>
<?php include "db.php"; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card mt-5">
                <div class="card-header">
                    <h4>Transaction Money</h4>
                </div>
                <div class="card-body">
                    <form action="" method = "POST" >
                        <div class="form-group mb-3">
                            <label for="">From :-</label>
                                <select name="sender" id="" class= "form-control" required>
                                    <option value=""><--Select Sender--></option>
                                    <?php

                                        $query = "SELECT * FROM customer_detail";
                                        $select = mysqli_query($connection,$query);
                                        if(!$select)
                                        {
                                            die('query failed'.mysqli_error($connection));
                                        }

                                        while($row = mysqli_fetch_array($select))
                                        {
                                            $customer_name = $row['customer_name'];
                                            echo "<option value = '$customer_name'>$customer_name</option><br>";
                                        }
                                    ?>
                                </select>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Transfer To:-</label>
                                <select name="reciver" id="" class= "form-control" required>
                                    <option value=""><--Select Reciver--></option>
                                    <?php

                                        $query = "SELECT * FROM customer_detail";
                                        $select = mysqli_query($connection,$query);
                                        if(!$select)
                                        {
                                            die('query failed'.mysqli_error($connection));
                                        }

                                        while($row = mysqli_fetch_array($select))
                                        {
                                            $customer_name = $row['customer_name'];
                                            echo "<option value = '$customer_name'>$customer_name</option><br>";
                                        }
                                    ?>
                                </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Amount :-</label>
                            <input type="text" name = "amount" class= "form-control" placeholder="Enter Amount" required>
                        </div>
                        <div class="form-group mb-3">
                            <button type = "submit" name = "transfer" class= "btn btn-primary">Pay</button>
                            <a href="index.php" class = "btn btn-danger" name = "back" >Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

if(isset($_POST['transfer']))
{
    $sender = $_POST['sender'];
    $reciver = $_POST['reciver'];
    $amount = $_POST['amount'];

    $query = "INSERT INTO transaction_history(s_name,s_reciver,amount) VALUES ('$sender','$reciver','$amount')";
    $insert = mysqli_query($connection,$query);
    if($insert)
    {
         echo '<script type = "text/javascript"> alert("Transaction Successful") </script>';
    }
    else
    {
        echo '<script type = "text/javascript"> alert("Transaction fail") </script>';
    }
}


?>


<?php include "includes/footer.php"; ?>