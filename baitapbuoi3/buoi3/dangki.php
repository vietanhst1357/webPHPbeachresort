<?php
require 'control.php';
ob_start();
$get_data=new data();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Public/bootstrap-3.3.7-dist/css/bootstrap.css">
    <title>Đăng kí</title>
</head>
<body>

<div id="myModal-register">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h3 class="modal-title" align="center">ĐĂNG KÝ</h3>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form" method="post">
                    <div class="form-group">
                        <label for="user" class="col-sm-3 control-label">Chọn tên đăng nhập:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="user" placeholder="Nhập tên đăng nhập">
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-3 control-label">Mật khẩu:</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu">
                        
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="repassword" class="col-sm-3 control-label">Nhập lại mật khẩu:</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="repassword" placeholder="Nhập lại mật khẩu...">
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Họ và tên:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="name" placeholder="Nhập họ và tên">
                        
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Email:</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" name="email" placeholder="Nhập email" >   
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="gender" class="col-sm-3 control-label">Giới tính</label>
                        <div class="col-sm-8">
                            <input type="radio"  name="gender" value="nam" style="width:10px;height:10px"> Nam 
                            <input type="radio"  name="gender" value="nu"  style="width:10px;height:10px"> Nữ
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="birthday" class="col-sm-3 control-label">Ngày sinh:</label>
                        <div class="col-sm-8">
                            Ngày    <input type="text" name="day" style="width:30px;">
                            tháng    <input type="text" name="month" style="width:30px;">
                            năm    <input type="text" name="year" style="width:50px;">
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="address" class="col-sm-3 control-label">Nơi ở</label>
                        <div class="col-sm-8">
                            <select name="address" >
                                <option>Lựa chọn</option>
                                <?php
                                    $se_que=$get_data -> select_que();
                                    foreach($se_que as $se)
                                    {
                                ?>
                                <option><?php echo $se['tenque'];?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div align="center">
                            <button id="btn-register" type="submit" class="btn btn-success" name="submit">Đăng Ký</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
<?php
    if(isset($_POST['submit']))
    {
    $date=$_POST['day']."-".$_POST['month']."-".$_POST['year'];
        if(empty($_POST['user']) || empty($_POST['password']))
        {
            echo("<script>alert('Bạn chưa nhập dữ liệu');</script>");
        }
        else
        {
            $dk=$get_data -> regist($_POST['user'],$_POST['password'],$_POST['name'],$_POST['email'],$_POST['gender'],$date,$_POST['address']);
            if($dk)
            {
                header('Location: http://localhost:88/518a/baitapbuoi3/list.php');
                // echo("<script>alert('Đăng ký thành công');</script>");
            }
            else
                echo("<script>alert('Đăng ký không thành công');</script>");
        }
    }
?>
</body>
</html>