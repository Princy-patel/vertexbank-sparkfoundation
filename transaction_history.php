<?php
$page_title = "Transaction history";
include "includes/header.php"; ?>
<?php include "includes/navbar_transaction_history.php"; ?>
<?php include "db.php"; ?>

<div class="container">
    <div class="jumbotron">
    
    <h1 class="mb-3 h2 text-center" style = "color:white;"><strong>TRANSACTION   HISTORY</stong> </h1>



<?php

    $query = "SELECT * FROM transaction_history";
    $select = mysqli_query($connection,$query);
?>

    <table class="table table-bordered table-secondary" style="background-color:white;">
    <thead class="table-dark">
        <tr>
            <th> ID </th>
            <th> SENDER </th>
            <th> RECIVER </th>
            <th> AMOUNT </th>
            <th> TRANSACTION DATE TIME </th>
            
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
                    <th><?php echo $row['s_name']; ?></th>
                    <th><?php echo $row['s_reciver']; ?></th>
                    <th><?php echo $row['amount']; ?></th>
                    <th><?php echo $row['transaction_date_time']; ?></th>
                </tr>
            </tbody>

           
            
            
            
            <?php
        
        }
    } 
    else
    {
        echo "no record found";
    }


?>
</table>

</div>
</div>




<?php include "includes/footer.php"; ?>