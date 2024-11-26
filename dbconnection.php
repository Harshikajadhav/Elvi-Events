<?php
    // $connection = mysqli_connect("localhost", "xlfmd9p1ytr5", "oCkC9###55@Y", "elvi");
    $connection = mysqli_connect("localhost", "root", "", "elvi");
    if($connection == false){
        die("Connection Error". mysqli_connect_error());
    }
?>