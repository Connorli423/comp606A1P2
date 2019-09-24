<?php
if(isset($_POST["submit"])){
    // get front values
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $repeatpassword = $_POST["repeatpassword"];

    //connect to database
    require_once "./config.php";
    // check whether already registered
    $sql1 = "select * from `user` where `username` = '$username'";
    $result1=mysqli_query($connect,$sql1);
    $r = mysqli_num_rows($result1);
    if($r > 0){
        exit('username has been exist,please try again');
    }
    // if no reinsertion data
    $sql="insert into `user` (`username`,`name`,`email`,`password`) values ('$username' , '$fullname' ,  '$email' ,  '$password')";
    $result=mysqli_query($connect,$sql);
    //insert data to mysql and connect
    if($result){
        echo "<script>window.location = './registersuccessful.html'</script>";
        mysqli_close($connect);
    }else{
        exit('fail to register');
    }

}

 ?>