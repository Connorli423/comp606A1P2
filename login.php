<?php
    $username = $_POST['username'];
    $password = $_POST['password'];

    require_once "./config.php";
    $sql1 = "select * from `user` where `username` = '$username' and `password` = '$password'";
    $result1=mysqli_query($connect,$sql1);
    
    $arr = mysqli_fetch_array($result1);
    $r = mysqli_num_rows($result1);
    if($r > 0){
        session_start();
        
        $_SESSION['username'] = $arr['name'];
        $_SESSION['userid'] = $arr['Id'];
        $_SESSION['role'] = $arr['role'];
        if($arr['role'] == 1){

            echo "<script>window.location = './index.php'</script>";
        }else{
            
            echo "<script>window.location = './admin.php'</script>";
        }
        
    }else{
        exit('error');
    }
?>