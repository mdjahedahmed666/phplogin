<?php

    session_start();
    if(isset($_SESSION['username'])){
        session_destroy();
        echo "<script>location.href = 'login.php'</script>";
    }else{
        echo "<script>alert('You have to Login First')</script>";
        echo "<script>location.href = 'login.php'</script>";
    }

?>