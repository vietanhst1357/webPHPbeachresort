<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        ob_start();
        $id=$_GET['del'];
        include('control.php');
        $get_data = new data();
        $del=$get_data -> delete_que($id);
        if($del)
        header('Location: table.php');
        // echo("<script>alert('Deleted');</script>");
        else
        echo("<script>alert('Error');</script>");
    ?>
</body>
</html>