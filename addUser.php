<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="myStyle.css">
</head>
<body>
<div class="mainLogin">
    <img src="cat.jpg" class="logo" alt="">
    <form action="" method="POST">
        <p>Enter Username</p>
        <input type="text" name="user" placeholder="Username"> <br>
        <p>Enter Password</p>
        <input type="password" name="pass" placeholder="Password"> <br>
        <p>Repeat Password</p>
        <input type="password" name="pass_rp" placeholder="Password (Repeat)"> <br>
        <input type="checkbox" name="check" id="">I agree all terms of service <br>
        <input type="submit" value="Sign up" name="sub">
    </form>
</div>
    <?php
        include('./control.php');
        if(isset($_POST['sub']))
        {
            if($_POST['pass'] == $_POST['pass_rp'])
            {
                if(isset($_POST['check']))
                {
                    $data = new data();
                    $insert = $data -> add_user($_POST['user'],$_POST['pass']);
                    if($insert) 
                        echo("<script>alert('Successfull');</script>");
                    else 
                        echo("<script>alert('Unsuccessfull');</script>");
                }
                else
                    echo("<script>alert('Phai dong y dieu khoan');</script>");
            }
            else
                echo("<script>alert('Mat khau khong trung khop');</script>");
        }
    ?>
</body>
</html>