<?php
    $id = $_GET['id'];
    $now = strtotime('+1 day');
    require_once "./config.php";
    $sql = "select * from appointment where Id = '$id'";
    $result = mysqli_query($connect,$sql);
    $st18 = mysqli_fetch_array($result)['st'];
    
    if($now < $st18){
        $sql1 = "update appointment set `effective` = '0' where `Id` = '$id'";
        $result1 = mysqli_query($connect,$sql1);
        if($result){
            exit('You cancel an appointment successfully! You can make an another appointment now!');
        }else{
            exit('error');
        }
    }else{
        $sql3 = "update appointment set `effective` = '0' , `fee` = '1' where `Id` = '$id'";
        $result3 = mysqli_query($connect,$sql3);
        if($result){
            exit('You cancel an appointment within 24 hours. We will charge you a fee.');
        }else{
            exit('error');
        }
    }

?>