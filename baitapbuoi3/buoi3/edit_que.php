<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        Tên quê cũ: <input type="text" name="" id="" value="<?php 
        $data=new data();
        $select=$data ->  echo  ?>"> <br>
        Tên quê mới: <input type="text" name="tenque" id="">
    </form>
    <?php
        ob_start();
        $id=$_GET['edit'];
        $tenque=$_GET['tenque'];
        include('control.php');
        $get_data = new data();
        $edit=$get_data -> update_que($id,$tenque);
        if($edit)
        header('Location: table.php');
        // echo("<script>alert('Deleted');</script>");
        else
        echo("<script>alert('Error');</script>");
    
    ?>
</body>
</html>