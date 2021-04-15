<?php
require 'control.php';
$get_data = new data();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <?php
        $select = $get_data -> select_1obdive($_GET['edit']);
            foreach($select as $se)
            {
                $id = $se['id_dive'];
        ?>
        Old dive name: <input type="text" name="" id="" value="<?php echo $se['namedive']; ?>"> <br>
        <?php
            } 
        ?>
        New dive name: <input type="text" name="namedive" id=""> <br>
        <input type="submit" value="Update" name="update">
    </form>
    <?php
    if(isset($_POST['update']))
    {
        ob_start();
        $name=$_POST['namedive'];
        $edit=$get_data -> update_dive($id,$name);
        if($edit)
        {
        header('Location: listdives.php');
        echo("<script>alert('Success');</script>");
        }
        else
        echo("<script>alert('Error');</script>");
    }
    
    ?>
</body>
</html>