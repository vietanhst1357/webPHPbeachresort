<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <table border="1">
        <tr><th colspan="2">Tạo - Ghi - Đọc file</th></tr>
        <tr>
            <td>Tên file</td>
            <td><input type="text" name="tenfile"></td>
        </tr>
        <tr>
            <td>Nội dung</td>
            <td><input type="text" name="noidung"></td>
        </tr>
        <tr align="center"><td colspan="2"><input type="submit" name="submit" value="Ghi - Đọc file"></td></tr>
        </table>
    </form>
    <?php
        if(isset($_POST['submit']))
        {
            $fileName = $_POST['tenfile'];
            $text = $_POST['noidung'];
            $sf = fopen($fileName.'.txt','a');
            $result = fwrite($sf,$text.PHP_EOL);
            $sf1 = fopen($fileName.'.txt','r');
            if ($sf)
            {
                if($result)
                {
                    if($sf1)
                    {
                        echo("Successfull".'<br>'.'Nội dung:');
                        while(!feof($sf1))
                        {
                            echo(fgets($sf1).'<br>');
                        }
                        echo('Tên file: '.$fileName.'.txt'.'<br>');
                    }
                    else
                    {echo("Không đọc được file");}
                }
                else
                {echo("Không ghi được nội dung");}
            }
            else
            {echo("Không tìm thấy file");}
        }
        
        
        //echo(readfile("text.txt"));
    ?>
</body>
</html>