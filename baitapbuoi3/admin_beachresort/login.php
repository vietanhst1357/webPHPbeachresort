<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="myStyle.css">
</head>
<body>
<div class="mainLogin">
    <img src="cat.jpg" class="logo" alt="">
    <h1 style="margin: 0; text-align: center; font-size: 30px; padding-bottom: 25px">Login now</h1>
    <form action="" method="get">
    <p>Enter Username</p>
    <input type="text" name="user" placeholder="Username" id=""> <br>
    <p>Enter Password</p>
    <input type="password" name="pass" placeholder="Password" id=""> <br>
    <input type="submit" value="Login" name="sub"> <br>
    <a href="./index.php">Create new accout</a> <br>
    <a href="">Do you forgot your password</a>
    </form>
</div>
    <?php
        include('control1.php');
        if(isset($_GET['sub']))
        {
            $data = new data();
            $login = $data -> login($_GET['user']);
            foreach($login as $key)
            {
                $user = $key['username'];
                $pass = $key['password'];
            }
            if($_GET['user'] != $user)
                echo("<script>alert('Sai username');</script>");
            else if($_GET['pass'] != $pass)
                echo("<script>alert('Sai password');</script>");
            else
                echo("<script>alert('finish');</script>");
        }
    ?>
</body>
</html>