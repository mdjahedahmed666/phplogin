<?php

    session_start();
    if(isset($_SESSION['username'])){
        //Home Access
        echo "<h3> Hi ".$_SESSION['username']."</h3>";

        //Show various content
        echo"<br><a href = 'logout.php'><input type = 'button' value = 'Logut' name = 'logout'></a>";
    }else{
        echo "<script>alert('Login first to access the home page!')</script>";
            echo "<script>location.herf='login.php'</script>";
    }

?>