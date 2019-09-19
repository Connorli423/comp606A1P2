<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="./js/jquery.min.js"></script>
    <link rel="stylesheet" href="./js/rome.css">

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
        .submit18{
            color:rgba(243,243,243,1);
        }
        .submit18:hover{
            color:white
        }

        .button{
            background: #e7e7e7;
            border: 1px solid;
            border-radius: 3px;
            font: 700 13px Helvetica, Arial;
            height: 30px;
            line-height: 28px;
            padding: 0 20px;
            text-decoration: none;
            text-align: center;
            margin-right: 10px;
            box-sizing: border-box; 
        }
        .footer-distributed {
	background-color: #292c2f;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	text-align: left;
	font: bold 16px sans-serif;

	padding: 55px 50px;
	margin-top: 80px;
}

.footer-distributed .footer-left,
.footer-distributed .footer-center,
.footer-distributed .footer-right{
	display: inline-block;
	vertical-align: top;
}

/* Footer left */

.footer-distributed .footer-left{
	width: 40%;
}

/* The company logo */

.footer-distributed h3{
	color:  #ffffff;
	font: normal 36px 'Cookie', cursive;
	margin: 0;
}

.footer-distributed h3 span{
	color:  #5383d3;
}

/* Footer links */

.footer-distributed .footer-links{
	color:  #ffffff;
	margin: 20px 0 12px;
	padding: 0;
}

.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color:  #8f9296;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}

/* Footer Center */

.footer-distributed .footer-center{
	width: 35%;
}

.footer-distributed .footer-center i{
	background-color:  #33383b;
	color: #ffffff;
	font-size: 25px;
	width: 38px;
	height: 38px;
	border-radius: 50%;
	text-align: center;
	line-height: 42px;
	margin: 10px 15px;
	vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope{
	font-size: 17px;
	line-height: 38px;
}

.bbc {
	color: white;
}

.bbd{
    color: white;
}

.bbe{
    color: white;
}

.footer-distributed .footer-center p{
	display: inline-block;
	color: #ffffff;
	vertical-align: middle;
	margin:0;
}

.footer-distributed .footer-center p span{
	display:block;
	font-weight: normal;
	font-size:14px;
	line-height:2;
}

.footer-distributed .footer-center p a{
	color:  #5383d3;
	text-decoration: none;;
}


/* Footer Right */

.footer-distributed .footer-right{
	width: 20%;
}

.footer-distributed .footer-company-about{
	line-height: 20px;
	color:  #92999f;
	font-size: 13px;
	font-weight: normal;
	margin: 0;
}

.footer-distributed .footer-company-about span{
	display: block;
	color:  #ffffff;
	font-size: 14px;
	font-weight: bold;
	margin-bottom: 20px;
}

.footer-distributed .footer-icons{
	margin-top: 25px;
}

.footer-distributed .footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color:  #33383b;
	border-radius: 2px;

	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;

	margin-right: 3px;
	margin-bottom: 5px;
}

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {

	.footer-distributed{
		font: bold 14px sans-serif;
	}

	.footer-distributed .footer-left,
	.footer-distributed .footer-center,
	.footer-distributed .footer-right{
		display: block;
		width: 100%;
		margin-bottom: 40px;
		text-align: center;
	}

	.footer-distributed .footer-center i{
		margin-left: 0;
	}
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
                <div><a href="./index.php">Gallery</a></div>
                <div><a href="./appointmentpage.php">Appointment</a></div>
            </div>

            <div class='user' style='width:600px;display:flex;height:78px;align-items:flex-end;justify-content:flex-end'>
                <div class='user_div' style='display:flex;align-items:flex-end;justify-content:flex-end;position:relative'>
                <?php
                    if(!isset($_SESSION['userid'])){
                        echo "<a class='button' href='./loginpage.php'>login</a> &nbsp;&nbsp; &nbsp;&nbsp; <a class='button' href='./registerpage.php'>register</a>";
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
                <div>Appoinment</div>
                <form action="./appointment.php" method='POST' id='form18' style='display:flex;justify-content:space-between;margin-top:96px;height:239px;flex-direction:column' onSubmit='return toValue()'>
                  
                    <label for="Time18">Time(server for an hour)</label>

                    <div style='display:flex;justify-content:space-between'>
                        <input id='input1' type="text" name='t17' style='width:40%;text-align:center;font-size:18px'>
                        <span>to</span>
                        <input id='input3' type="text" name='t18' style='width:40%;text-align:center;font-size:18px' readonly>
                    </div>
                     
                    
                    <label for="message18">kind of service</label>
                    <textarea id='message18' name='message18' placeholder='please leave a message about what kind of service you want.Such as  recovering from injury, dealing with anxiety. ' style='resize:none;height:126px;font-size:21px;padding-left:4px;padding-left:4px;padding-top:4px;padding-bottom:4px;'></textarea>
                 
                   <?php
                    if(isset($_SESSION['userid'])){
                        echo "<input type='hidden' name='user' value='".$_SESSION['userid']."' class='user_id'>";
                    }else{
                        echo "<input type='hidden' name='user' value='' class='user_id'>";
                    }
                     
                   ?>
       </form>
               
                
            </div>
                <div style='width:460px;text-align:center;margin-top:98px;'>
                <button class='submit18' style='width:128px;height:60px;border-radius:18px;background:rgba(199,179,229,1);font-size:24px;'>
                        submit
                </button> 
                </div>
                
            </div>
        </div>
        
    </div>
    <footer class="footer-distributed">

		<div class="footer-left">
	
		<img src="img/massage.jpg" alt="" height="150" width="150">
	
		<p class="footer-links">
			<a href="home.html">Home</a>
			·
			<a href="appointmentpage.php">Appointment</a>
			·
			<a href="about.html">About US</a>
	
		</p>
	
		<p class="footer-company-name">Massage IT Talent 2019</p>
		</div>
	
		<div class="footer-center">
	
		<div>
			<i class="fa fa-map-marker"></i>
			<p><span>222 Victory Street</span> Hamilton, new Zealand</p>
		</div>
	
		<div>
			<i class="fa fa-phone"></i>
			<p>07-967-8866</p>
		</div>
	
		<div>
			<i class="fa fa-envelope"></i>
			<p><a href="mailto:kamponghamilton@gmail.com">ChenJackson@gmail.com</a></p>
		</div>
		<div>
			<i class="fa fa-envelope"></i>
			<h4 class="bbc">Open Hours</h4>
			<li class="bbd"><span>Thusday - Sunday</span> <span>10 am - 5 pm  </span></li>
			<li class="bbe"><span>Monday Close</span></li>
		</div>
	
		</div>
	
		<div class="footer-right">
	
		<p class="footer-company-about">
			<span>About Us</span>
			We offer al kinds of wondeful massage service.
		</p>
	
		<div class="footer-icons">
			
			<a href="">
				<img src="img/fb.png" alt="socialMedia" height="30" width="30"/></a>
				<img src="img/twitter.jpg" alt="socialMedia" height="30" width="30"/></a>
				<img src="img/linkedin.jpg" alt="socialMedia" height="30" width="30"/></a>
				<img src="img/youtube.jpg" alt="socialMedia" height="30" width="30"/></a>
				<img src="img/ins.jpeg" alt="socialMedia" height="30" width="30"/></a>
	
		</div>
	
		</div>
		</footer>
</body>
</html>
<script src='./js/rome.js'>
</script>
<script>
    rome(input1,{ weekStart: 1 ,dateValidator: rome.val.afterEq(transformTime())});
    rome(input1).on('data', function (value) {
       var date = (new Date(value)).getTime()+(1000*60*60);
       var date1 = transformTime(date);
       $('#input3').val(date1);
       return value;
        //  result.innerText = value;
    });
    function transformTime(timestamp = +new Date()) {
    if (timestamp) {
        var time = new Date(timestamp);
        var y = time.getFullYear(); //getFullYear function returns the year in four digits
        var M = time.getMonth() + 1; // getMonthreturns the month (0 ~ 11), the result needs to be manually added.
        var d = time.getDate(); // getDate function returns a day of the month from the Date object (1 ~ 31)
        var h = time.getHours(); // getHours function returns the hour of the Date object (0 ~ 23)
        var m = time.getMinutes(); // getMinutes function returns the minute of the Date object (0 ~ 59)
        var s = time.getSeconds(); // getSeconds function returns Date seconds(0 ~ 59)
        return y + '-' + M + '-' + d + ' ' + h + ':' + m;
      } else {
          return '';
      }
     
      
}




$('.submit18').click(function(){
          
            $('#form18').submit();
      })
      function toValue(){
          var user_id = $('.user_id').val();
          var input1 = $('#input1').val();
          var input3 = $('#input3').val();
          var message18 = $('#message18').val();
         
          if(user_id == ""){
            alert('Please login first before making an appointment');
            return false;
          }
          if(input1 == ""){
            alert('Please select the start time');
            return false;
          }
          if(input3 == ""){
            alert('Please select the end time');
            return false;
          }
          if(message18 == ""){
            alert('Please leave a message for better cure!');
            return false;
          }
          if(confirm("you requirement about "+message18+" will be arranged between "+input1+" to "+input3)){
            return true;
          }else{
            return false;
          }
          
      }
</script>