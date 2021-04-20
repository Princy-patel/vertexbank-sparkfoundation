<?php



$connection = mysqli_connect('localhost','root','','vertex_bank');
if(!$connection)
{
    die('connection failed'.mysqli_error($connection));
}

?>