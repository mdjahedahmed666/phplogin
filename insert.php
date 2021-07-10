<?php

include 'config.php';

if(isset($_POST['r_submit'])){
    $id = uniqid();
    $r_username = $_POST['r_username'];
    $r_email = $_POST['r_email'];
    $r_phone = $_POST['r_phone'];
    $r_pass = $_POST['r_pass'];
    $r_con_pass = $_POST['r_con_pass'];
}

$mobilePattern = "/(\+88)?-?01[1-9]\d{8}/";
$insert_query = "INSERT INTO `register`( `id`, `username`, `email`, `phone`, `pass`) VALUES ('$id', '$r_username','$r_email','$r_phone','$r_pass')";
$duplicate_username = mysqli_query($conn, "SELECT * FROM `register` WHERE username = '$r_username'");

if (strlen($r_username)<3 || strlen($r_username)>20){
    echo "<script>alert('Name should be 3 to 20 char long')</script>";
    echo "<script>location.href = 'register.php'</script>";
}elseif(!preg_match($mobilePattern, $r_phone)){
    echo "<script>alert('Invalid Phone Number')</script>";
    echo "<script>location.href = 'register.php'</script>";
}elseif($r_pass != $r_con_pass){
    echo "<script>alert('Password and confirm password are not same!')</script>";
    echo "<script>location.href = 'register.php'</script>";
}elseif(mysqli_num_rows($duplicate_username)>0){
    echo "<script>alert('This username is already taken. Give a unique Username!!')</script>";
    echo "<script>location.href = 'register.php'</script>";
}
else{

    if(!mysqli_query($conn, $insert_query)){
        echo "<script>alert('not inserted')</script>";
    }else{
        echo "<script>alert('Successfully inserted')</script>";
        echo "<script>location.href = 'login.php'</script>";
    }
}

?>