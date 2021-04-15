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
        $select=$data -> list_user();
    ?>
    <table border="1" class="table primary-table">
        <tr><td colspan="9"><h1>Danh sach tai khoan</h1></td></tr>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Fullname</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Birthday</th>
            <th>Address</th>
            <th colspan="2"></th>
        </tr>
        <?php
        foreach($select as $se_user)
        {
        ?>
        <tr>
            <td><?php echo $se_user['id']; ?></td>
            <td><?php echo $se_user['tendn']; ?></td>
            <td><?php echo $se_user['hoten']; ?></td>
            <td><?php echo $se_user['email']; ?></td>
            <td><?php echo $se_user['gioitinh']; ?></td>
            <td><?php echo $se_user['ngaysinh']; ?></td>
            <td><?php echo $se_user['noio']; ?></td>
            <td><a href="edit_user.php?edit=<?php echo $se_user['id'];?>">Edit</a></td>
            <td><a href="del_user.php?del=<?php echo $se_user['id'];?>">Delete</a></td>
        </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>