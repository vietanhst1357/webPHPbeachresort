<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Dive Sites - Bhaccasyoniztas Beach Resort Website Template</title>
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
						<li>
							<a href="rooms.php">Rooms</a>
						</li>
						<li class="selected">
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
							<h1>Dive Site</h1>
							<h2><a href="adddives.php">ADD DIVES</a></h2>
							<h2><a href="listdives.php">LIST DIVES</a></h2>
        <?php
        require 'control.php';
		$get_data = new data();
		$select = $get_data -> select_dives();
		?>
							<table border="1" class="table primary_table">
        						<tr><td colspan="6"><h1 style="text-align: center;">Danh sách Food</h1></td></tr>
        						<tr>
            					<th>ID</th>
            					<th>Name Dive </th>
								<th>Image Dive </th>
								<th>Description </th>
            					<th colspan="2"></th>
        						</tr>
        <?php
        foreach($select as $se_user)
        {
        ?>
        <tr>
            <td><?php echo $se_user['id_dive']; ?></td>
            <td><?php echo $se_user['namedive']; ?></td>
			<td><img src="./dives/<?php echo $se_user['imgdive']; ?>" alt="" width="100px" height="100px"></td>
			<td style="width: fit-content;"><?php echo $se_user['desdive']; ?></td>
            <td><a href="edit_dive.php?edit=<?php echo $se_user['id_dive'];?>">Edit</a></td>
            <td><a href="del_dive.php?del=<?php echo $se_user['id_dive'];?>">Delete</a></td>
        </tr>
        <?php
        }
        ?>
                            </table>
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
					<li>
						<a href="rooms.php">Rooms</a>
					</li>
					<li class="active">
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
</body>
</html>