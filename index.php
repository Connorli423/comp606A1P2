<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="./js/jquery.min.js"></script>
    <!-- <script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">  
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
        .card-body{
            padding: 0.5rem;
        }
        .card{
            background-color: #fff;
            border: 1px solid rgba(0,0,0,.125);
            border-radius: 0;
        }
        .cardSet1{
            background-color: #669999;
        }
        .cardSet2{
            background-color: #cc6666;
        }
        .cardSet3{
            background-color: #cc9966;
        }
        h3.card-title{
            font-size: 1.2rem;
        }
        h5.card-subtitle{
            font-size: 1.2rem;
        }
        p.card-text{
            padding-bottom: 0.8rem;
            line-height: 1.2re,;
        }
        .button{
            background: #e7e7e7;
            border: 1px solid;
            border-radius: 3px;
            font: 700 13px Helvetica, Arial;
            height: 30px;
            line-height: 28px;
            padding: 0 20px;
            text-align: center;
            text-decoration: none;
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
                <div><a href="./index.html">Home</a></div>
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
                    //drop list here
                    }
                ?> 
                                   
                </div>
            </div>

</div>
           
        </div>
    <div style='width:1200px;margin:auto ;background:rgba(248,248,248);'>
    <div class="container mt-5">
        <h2 class="mb-5">Which one do you like ?</h2>
        <div class="card-deck">
            <div class="card cardSet1 text-white">
                <div class="card-body">
                    <img src="img/mas1.jpg" alt="massage1" class="img-fluid"/>
                    <h3 class="card-title">Deep-Tissue Massage</h3>
                    <h5 class="card-subtitle">
                        <h6>30 Minutes – $45.00</h6> 
                        <h6>60 Minutes – $75.00</h6>
                    </h5>
                    <p>Deep tissue massage used in recovering from injury or illness your body.</p>
                </div>
            </div>
            <div class="card cardSet2 text-white">
                <div class="card-body">
                    <img src="img/mas2.jpeg" alt="massage2" class="img-fluid"/>
                    <h3 class="card-title">Sports Massage</h3>
                    <h5 class="card-subtitle">
                        <h6>30 Minutes – $45.00</h6> 
                        <h6>60 Minutes – $75.00</h6>
                    </h5>
                    <p>Sports and remedial massage is an effective and beneficial form of physical therapy, not only for active sports people, or those requiring therapy after a soft tissue injury, but also for those seeking relief from muscular tension or simply to maintain healthy muscles.</p>
                </div>
            </div>
            <div class="card cardSet3 text-white">
                <div class="card-body">
                    <img src="img/mas3.jpg" alt="massage3" class="img-fluid"/>
                    <h3 class="card-title">Therapeutic Massage</h3>
                    <h5 class="card-subtitle">
                        <h6>30 Minutes – $45.00</h6> 
                        <h6>60 Minutes – $75.00</h6>
                    </h5>
                    <p>Therapeutic massage is often used in injury or illness your body may experience unwanted aches and pains, your deep tissue massage program will be designed to work specifically on those areas to help relieve tension, restore mobility, and eliminate pain.</p>
                </div>
            </div>
        </div>
    </div>
        <div style='width:500px;margin-top:100px;text-align:center;display:block;margin:0 auto;'>
        <button class='appointment' style='width:250px;height:60px;border-radius:18px;background:rgba(199,179,229,1);font-size:18px;'>
                make an appointment
        </button> 
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
<script>
    
    $('.appointment').click(function(){
        window.location = "./appointmentpage.php";
    })

</script>