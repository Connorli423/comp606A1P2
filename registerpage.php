
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- cdn introduces jquery plugin -->
    <script src="./js/jquery.min.js"></script>
    <title>registration page</title>
</head>
<style>
    body {
        background: rgb(249, 249, 249)
    }

    * {
        margin: 0px;
        padding: 0px;
    }

    .container {
        width: 1000px;
        overflow: hidden;
        margin: 0px auto;
        margin-top: 60px;
        height: auto;
        background: rgb(249, 249, 249)
    }

    #banner {
        background: url('./img/spa.png');
        background-size: cover;
        float: left;
        width: 660px;
        height: 630px;
    }

    #form {
        float: right;
        width: 300px;
        height: 630px;
        background: white;
        border-radius: 29px;
        padding: 0px 18px;
        box-sizing: border-box
    }

    .label {
        margin: 39px 0px 9px;
    }

    input {
        outline: none;
        border: none;
        border-bottom: 1px solid rgb(199, 199, 199);
        width: 264px;
        font-size: 16px;
        color: rgb(79, 79, 79);
    }

    .tip_word {
        display: block;
        float: left;
        color: red;
        width: 300px;
    }

    #submit :hover {
        background: #a152c4;
        cursor: pointer;
    }
</style>

<body>
    <div class="container">
        <div id='banner'></div>
        <form id='form' action="./register.php" method="POST" onSubmit='return toValue()'>
            <h2 style='text-align:center;margin-top:16px;'>Registration</h2>
            <p class='label'>Full Name</p>
            <input type='text' class='fullname' name='fullname' placeholder='your fullname ' value=''>
            <p class='tip_word fullnametip'></p>

            <p class='label'>Email</p>
            <input type='text' class='email' name='email' placeholder='your email' value=''>
            <p class='tip_word emailtip'></p>

            <p class='label'>Username</p>
            <input type='text' class='username' name='username' placeholder='username' value=''>
            <p class='tip_word usernametip'></p>

            <p class='label'>Password</p>
            <input type='password' class='password' name='password' placeholder='your password' value=''>
            <p class='tip_word passwordtip'></p>

            <p class='label'>Repeat Password</p>
            <input type='password' class='repeatpassword' name='repeatpassword' placeholder='repeat password' value=''>
            <p class='tip_word repeatpasswordtip'></p>

            <input type="checkbox" value="" name="checkbox" class='checkbox' style='width: 16px;margin-top:9px;'><span style='font-size: 14px;color: rgb(79,79,79)'> I agree to the Terms of User</span>
            <input type="submit" name='submit' id='submit' style='margin-top:29px;height: 29px;border-radius:29px;background:rgb(181,144,197);color:rgb(249,249,249);' value='Sign Up'>
        </form>
       

    </div>
</body>
<script>
    function toValue(){
        // // alert(1);
        // get values from list
        var fullname = $('.fullname').val();
        var email = $('.email').val();
        var username = $('.username').val();
        var password = $('.password').val();
        var repeatpassword = $('.repeatpassword').val();
        var checkbox = $("input[name='checkbox']:checked").val();
        // get objects of tag
        var fullnametip = $('.fullnametip');
        var emailtip = $('.emailtip');
        var usernametip = $('.usernametip');
        var passwordtip = $('.passwordtip');
        var repeatpasswordtip = $('.repeatpasswordtip');

        fullnametip.html("");
        emailtip.html("");
        usernametip.html("");
        passwordtip.html("");
        repeatpasswordtip.html("");
        // console.log(checkbox);
        // return false;

        if(fullname == ''){
            
            fullnametip.html('fullname required');
            return false;
        }

        if(email == ''){
          
            emailtip.html('email required');
            return false;
        }else{

        }

        if(username == ''){
            usernametip.html('username required');
            return false;
        }else{

        }

        // verify password
        if(password == ''){
            passwordtip.html('password required');
            return false;
        }else{

        }

        // verify repeat password
        if(repeatpassword == ''){
            repeatpasswordtip.html('password required');
            return false;
        }else{
            if(password != repeatpassword){
                repeatpasswordtip.html('The two passwords do not match');
                return false;
            }
        }
        if(checkbox == null){
            alert('please check if you agree to the Terms');
            return false;
            //checkbox function
        }
        return true;
       
    }
      
</script>

</html>