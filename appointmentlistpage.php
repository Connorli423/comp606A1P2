<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="./js/jquery.min.js"></script>
    <!-- <script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script> -->
    <title>welcome here for a wondeful massage</title>
    <style>
        *{
            margin:0px;
            padding:0px
        }
        .nav div a{
            cursor: pointer;
            color:rgb(99,99,99);
            text-decoration: none;
            font-size:24px;
        }
        .nav div a:hover{
            color:rgb(40,40,40)
        }
        .user_div{
            padding:6px;
            box-sizing:border-box;
            border-radius:3px;
            cursor:pointer;
            
        }
        .user_div3{
            display:none
        }
        .user_div:hover{
            background:rgb(243,215,181,.6);
            
        }
        .user_div:hover .user_div3{
            display:block
        }
        .appointment{
            color:rgba(243,243,243,1);
        }
        .appointment:hover{
            color:white
        }
        .user_div a{
            text-decoration:none
        }

    </style>
</head>
<body style='background:rgb(253,255,223)'>
<div class='header' style='background:linear-gradient(0deg,rgba(253,255,223,1) 0%,rgba(243,215,181,1) 100%);width:100%;height:106px'>
<div style='width:1200px;margin:auto;display:flex;justify-content:space-between'>
            <div style='width:220px'>
               <img src="./img/spa.png" alt="" style='width:99px;height:88px;'>
            </div>
            <div class='nav' style='width:380px;display:flex;height:72px;align-items:flex-end;justify-content:space-between'>
                <div><a href="./appointmentpage.php">Gallery</a></div>
                <div><a href="./appointmentpage.php">Appointment</a></div>
            </div>

            <div class='user' style='width:600px;display:flex;height:78px;align-items:flex-end;justify-content:flex-end'>
                <div class='user_div' style='display:flex;align-items:flex-end;justify-content:flex-end;position:relative'>
                <?php
                    session_start();
                    if(!isset($_SESSION['userid'])){
                        echo "<a href='./loginpage.php'>login</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href='./registerpage.php'>register</a>";
                    }else{

                        echo "<div style='width:60px;height:60px;border-radius:50%;border:1px solid rgb(199,199,199);' >
                        <img src='./img/user.png' alt='' style='width:100%;height:100%'>
                    </div>
                    <div class='user_name' style='font-weight:bold;margin-left:19px'>
                        Hi, ".$_SESSION['username']."
                    </div>
                    <div class='user_div3' style='position:absolute;float:right;width:164px;bottom:-63px;right:0px;z-index:1;background:rgb(243,215,181,.6);text-align:right'>
                        <div><a href='./appointmentlistpage.php'>my appointment</a></div>
                        <div><a href='./mypage.php?id=".$_SESSION['userid']."'>my infomation</a></div>
                        <div><a href='./logout.php'>logout</a></div>
                    </div>";
                    }
                ?> 
                

                    
                </div>
            </div>

</div>
           
        </div>
    <div style='width:1200px;margin:auto;background:rgba(248,248,248);'>


        <div class='banner' style='text-align:right;position:relative;border-radius:8px'>
            <img src="./img/banner.png" alt="" style='width:60%'>
            <div style='position:absolute;left:0px;top:0px;width:460px;text-align:left;font-size:24px;'>
            
                <div style='padding-left:18px;padding-top:36px;'>
                My Appointment List <br>
                <span style='font-size:12px;'>If you cancel within 24 hours of the appointment, we will charge you a fee.</span>
                
                <br/><br/>
                    
                <table border=1 style="width:460px;font-size:16px;">
                    <tr style='text-align:center'>
                        <td>order</td>
                        <td>time</td>
                        <td>message</td>
                        <td>operation</td>
                    </tr>

                    <?php
                        
                        require_once "./config.php";
                        $userid = $_SESSION['userid'];
                        $sql = "select * from appointment where user = '$userid' and `effective` = '1'";
                        $res = mysqli_query($connect,$sql);
                        $arr = mysqli_fetch_all($res,1);
                        foreach($arr as $i=>$s){
                            echo "<tr>
                                    <td>".($i+1)."</td>
                                    <td>".date("Y-m-d H:i:s",$s['st'])." to ".date("Y-m-d H:i:s",$s['et'])."</td>
                                    <td>".$s['message']."</td>
                                    <td><a href='./cancel.php?id=".$s['Id']."' onclick='return tip();'>cancel</a></td>
                                </tr>";
                        }
                        
                    ?>
                    
                </table>
                
                </div>
                
                <div style='width:460px;text-align:center;margin-top:98px;'>
                </div>
                
            </div>
        </div>

    </div>
</body>
</html>
<script>
    $('.appointment').click(function(){
        window.location = "./appointmentpage.php";
    })
    function tip(){
        if(confirm("If you cancel within 24 hours of the appointment, we will charge you a fee.")){  
            return true;  
        }  
            return false;  
        }
</script>