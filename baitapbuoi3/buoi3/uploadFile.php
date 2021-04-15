<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="txtfile" id=""> <br>
    <input type="text" name="">
    <input type="submit" value="upload" name="txtup">
    </form>
    <?php
        require 'control.php';
        $get_data=new data();
        if(isset($_POST['txtup']))
        {
            $file = $_FILES['txtfile']['tmp_name'];    // tên file tạm
            $filename = $_FILES['txtfile']['name'];     // tên file
            $path = "./Public/files"; 
            echo $filename;
            // echo filesize($b);
            $file_type = $_FILES['txtfile']['type'];
            // echo($file_type);
            if($file_type == 'image/jpeg' || $file_type == 'image/png')
            {
                $up = move_uploaded_file($file,"$path/$filename"); // thực thi upload file
                //$insert=$get_data -> insert_anh($b);
                if($up)
                {
                    echo('upload thanh cong');
                }
            }
            else
            {echo('ko thanh cong');}

        }
    ?>
</body>
</html>