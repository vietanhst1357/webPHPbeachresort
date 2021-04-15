<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Rooms - Bhaccasyoniztas Beach Resort Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="background">
		<div id="page">
			<div id="header">
				<div id="logo">
					<a href="index.php"><img src="images/logo.png" alt="LOGO" height="112" width="118"></a>
				</div>
				<div id="navigation">
					<ul>
						<li>
							<a href="index.php">Home</a>
						</li>
						<li>
							<a href="about.php">About</a>
						</li>
						<li class="selected">
							<a href="rooms.php">Rooms</a>
						</li>
						<li>
							<a href="dives.php">Dive Site</a>
						</li>
						<li>
							<a href="foods.php">Food</a>
						</li>
						<li>
							<a href="news.php">News</a>
						</li>
						<li>
							<a href="contact.php">Contact</a>
						</li>
					</ul>
				</div>
			</div>
			<div id="contents">
				<div class="box">
					<div>
						<div class="body">
							<h1>Rooms</h1>
							<h2><a href="addroom.php">ADD ROOM</a></h2>
							<h2><a href="listroom.php">LIST ROOM</a></h2>
							<div id="contact" class="body">
							<h1>Contact</h1>
							<form method="post" enctype="multipart/form-data">
								<table>
									<tbody>
										<tr>
											<td>Name:</td>
											<td><input type="text" name="name" value="" class="txtfield"></td>
										</tr> <tr>
											<td>Image:</td>
											<td><input type="file" name="img" value="" class="txtfield"></td>
										</tr> <tr>
											<td class="txtarea">Description:</td>
											<td><textarea name="des"></textarea></td>
										</tr> <tr>
											<td>Rate:</td>
											<td><input type="text" name="rate" value="" class="txtfield"></td>
										</tr> <tr>
											<td></td>
											<td><input class="add" type="submit" value="ADD" name="submit"></td>
										</tr>
									</tbody>
								</table>
							</form>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="footer">
			<div>
				<ul class="navigation">
					<li>
						<a href="index.php">Home</a>
					</li>
					<li>
						<a href="about.php">About</a>
					</li>
					<li class="active">
						<a href="rooms.php">Rooms</a>
					</li>
					<li>
						<a href="dives.php">Dive Site</a>
					</li>
					<li>
						<a href="foods.php">Food</a>
					</li>
					<li>
						<a href="news.php">News</a>
					</li>
					<li>
						<a href="contact.php">Contact</a>
					</li>
				</ul>
				<div id="connect">
					<a href="http://pinterest.com/fwtemplates/" target="_blank" class="pinterest"></a> <a href="http://freewebsitetemplates.com/go/facebook/" target="_blank" class="facebook"></a> <a href="http://freewebsitetemplates.com/go/twitter/" target="_blank" class="twitter"></a> <a href="http://freewebsitetemplates.com/go/googleplus/" target="_blank" class="googleplus"></a>
				</div>
			</div>
			<p>
				© 2023 by BHACCASYONIZTAS BEACH RESORT. All Rights Reserved
			</p>
		</div>
	</div>
	<?php
        require 'control.php';
        $get_data = new data();
        if(isset($_POST['submit']))
        {
            $name = $_POST['name'];
            //$img = $_POST['img'];
            $des = $_POST['des'];
			$rate = $_POST['rate'];
			$file = $_FILES['img']['tmp_name'];    // tên file tạm
			$filename = $_FILES['img']['name'];		// tên file
			//echo("<script>alert('name: ',$filename)</script>");
			$path = "./rooms/";
            if(empty($name)||empty($filename)||empty($des))
            {
                echo("<script>alert('Data empty')</script>");
                
            }
            else
            {
				$insert = $get_data -> insert_rooms($name,$filename,$des,$rate);
                if($insert)
                {
					$u = move_uploaded_file($file,$path.$filename);
					if($u)
					{
						echo("<script>alert('Successfull')</script>");
					}
					else
					{
						echo("<script>alert('Unsuccessfull image')</script>");
					}
                }
                else
                {
                    echo("<script>alert('Unsuccessfull')</script>");
                }
            }
        } 
    ?>
</body>
</html>