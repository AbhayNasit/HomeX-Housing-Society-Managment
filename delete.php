<?php

$connection = mysqli_connect("localhost","root","","homex");

// Check connection
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

// Retrieving data from database
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM vehicle_details WHERE name='$id'";
        if(mysqli_query($connection, $sql)){
            header('location: vehical_detail.php');
        }
    }
?>