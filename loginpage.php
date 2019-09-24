
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
        <form id='form' action="./login.php" method="POST" onSubmit='return toValue()'>
            <h2 style='text-align:center;margin-top:16px;'>Login</h2>

            <p class='label'>Username</p>
            <input type='text' class='username' name='username' placeholder='username' value=''>
            <p class='tip_word usernametip'></p>

            <p class='label'>Password</p>
            <input type='password' class='password' name='password' placeholder='password' value=''>
            <p class='tip_word passwordtip'></p>          
          
            <input type="submit" name='submit' id='submit' style='margin-top:29px;height: 29px;border-radius:29px;background:rgb(181,144,197);color:rgb(249,249,249);' value='Submit'>
        </form>      

    </div>
</body>
<script>
    function toValue(){
        // alert(1);
        //get values from list
        // var fullname = $('.fullname').val();
        // var email = $('.email').val();
        var username = $('.username').val();
        var password = $('.password').val();
        // var repeatpassword = $('.repeatpassword').val();
        // var checkbox = $("input[name='checkbox']:checked").val();
        // get all of objects tag
        // var fullnametip = $('.fullnametip');
        // var emailtip = $('.emailtip');
        var usernametip = $('.usernametip');
        var passwordtip = $('.passwordtip');
        usernametip.html("");
        passwordtip.html("");

        if(username == ''){
            usernametip.html('username required');
            return false;
        }

        // verify password
        if(password == ''){
            passwordtip.html('password required');
            return false;
        }
        return true;
       
    }
//javascript function  
</script>

</html>