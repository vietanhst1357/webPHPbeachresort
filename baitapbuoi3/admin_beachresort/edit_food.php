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
        $select = $get_data -> select_1ob($_GET['edit']);
            foreach($select as $se)
            {
                $id = $se['id'];
        ?>
        Old food name: <input type="text" name="" id="" value="<?php echo $se['namefood']; ?>"> <br>
        <?php
            } 
        ?>
        New food name: <input type="text" name="namefood" id=""> <br>
        <input type="submit" value="Update" name="update">
    </form>
    <?php
    if(isset($_POST['update']))
    {
        ob_start();
        $name=$_POST['namefood'];
        $edit=$get_data -> update_food($id,$name);
        if($edit)
        {
        header('Location: listfood.php');
        echo("<script>alert('Success');</script>");
        }
        else
        echo("<script>alert('Error');</script>");
    }
    
    ?>
</body>
</html>