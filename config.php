<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webtech";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){
        die("connection failed: ".mysqli_connect_error());
    }else{
        // echo "<script>alert('connected to DB !!')</script>";
    }
?>