<?php
$page_title = "CUSTOMER_DETAIL";
include "includes/header.php"; ?>
<?php include "includes/navbar_customer_detail.php"; ?>
<?php include "db.php"; ?>


<div class="container">
    <div class="jumbotron">
    
    <h1 class="mb-3 h2 text-center" style = "color:white;"><strong><h1><strong>CUSTOMER DETAIL</strong></h1></stong> </h1>


<?php



$query = "SELECT * FROM customer_detail";
$select = mysqli_query($connection,$query);

// OVER DATABASE CONNECTION
?>
<table class="table table-bordered table-dark table-striped" style="background-color:white;">
    <thead class="table-dark">
        <tr>
            <th> ID </th>
            <th> NAME</th>
            <th> EMAIL </th>
            <th> CURRENT BALANCE </th>
            <th> TRANSACTION </th>
            
        </tr>
    </thead>

<?php

if($select)
{

    while($row = mysqli_fetch_array($select))
    {
        ?>
            <tbody>
            <tr>
                <th><?php echo $row['id']; ?></th>
                <th><?php echo $row['customer_name']; ?></th>
                <th><?php echo $row['customer_email']; ?></th>
                <th><?php echo $row['balance']; ?></th>

                

                 

                <form action="transaction_money.php" method="POST">
                    <input type="hidden" name="id" value=" <?php echo $row['id']; ?> " required>
                    <th><input type="submit" name="transfer_money" class="btn btn-primary" value="TRANSACTION" required></th>
                </form>
                </tr>
                </tbody>
<?php
}
}

?>
    </table>

    </div>
</div>





<?php include "includes/footer.php"; ?>