<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Public/bootstrap-3.3.7-dist/css/bootstrap.css">
    <style>
        table{
            background-color: beige;
            border-color: burlywood;
            border-width: 5px;
        }
        h1{
            text-align: center;
            margin: 2px ;
        }
        a{
            border-bottom: 1px;
        }
    </style>
</head>
<body>
    <?php
        include('control.php');
        $data=new data();
        $select=$data -> list_que();
    ?>
    <table border="1" class="table primary-table">
        <tr><td colspan="4"><h1>Danh sách quê</h1></td></tr>
        <tr>
            <th>ID</th>
            <th>Tên quê</th>
            <th colspan="2"></th>
        </tr>
        <?php
        foreach($select as $se_user)
        {
        ?>
        <tr>
            <td><?php echo $se_user['id_que']; ?></td>
            <td><?php echo $se_user['tenque']; ?></td>
            <td><a href="edit_que.php?edit=<?php echo $se_user['id_que'];?>">Edit</a></td>
            <td><a href="del_que.php?del=<?php echo $se_user['id_que'];?>">Delete</a></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>