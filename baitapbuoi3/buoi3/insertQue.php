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
                        <label for="user" class="col-sm-3 control-label">Chọn tên quê:</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="que" placeholder="Nhập tên đăng nhập">
                            
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
ob_start();
    if(isset($_POST['submit']))
    {
        $insert = $get_data -> insert_que($_POST['que']);
        if($insert)
        {
            header('Location: table.php');
            echo("<script>alert('Thêm thành công');</script>");
        }
        else
            echo("<script>alert('Không thành công');</script>");

    }
?>
</body>
</html>