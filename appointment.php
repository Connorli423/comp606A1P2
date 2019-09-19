<?php
// get start_date and end_date
    $st = strtotime($_POST['t17']);
    $et = strtotime($_POST['t18']);
    $message = $_POST['message18'];
    $user = $_POST['user'];


    require_once "./config.php";
    $sql1 = "select * from appointment where (('$st' >= st and '$st' <= et) or ('$et' >= st and '$et' <= et)) and `effective` = '1'";
    $result1 = mysqli_query($connect,$sql1);
    $row18 = mysqli_fetch_array($result1);
    $row = mysqli_num_rows($result1);
    $st1 = $row18['st'];
    $et1 = $row18['et'];
    if($row > 0){
        exit("Sorry,the time slot you selected has already been pre-selected by other customers.Please try again!");
    }else{
        $sql="insert into `appointment` (`st`,`et`,`message`,`user`) values ('$st','$et','$message','$user')";
        $result=mysqli_query($connect,$sql);
        if($result){
            exit('success');
            // echo "<script>window.location = './registersuccessful.html'</script>";
            mysqli_close($connect);
        }else{
            
            exit('fail to making an appointment');
        }
    }
?>