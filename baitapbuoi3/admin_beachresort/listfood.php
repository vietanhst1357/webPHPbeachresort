<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Foods - Bhaccasyoniztas Beach Resort Website Template</title>
	<!-- <link rel="stylesheet" href="Public/bootstrap-3.3.7-dist/css/bootstrap.css"> -->
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<!-- <style>
		  .table {
    border-collapse: collapse !important;
  }
  .table td,
  .table th {
    background-color: #fff !important;
  }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #ddd !important;
  }
	</style> -->
	<style>
	table {
  border-spacing: 0;
  border-collapse: collapse;
}
	td,
	th {
  padding: 0;
}
	</style>
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
						<li>
							<a href="dives.php">Dive Site</a>
						</li>
						<li class="selected">
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
							<h1><a href="addfood.php">New Foods</a></h1>
							<h1><a href="listfood.php">List Foods</a></h1>
							<?php
							require 'control.php';
							$get_data = new data();
							$select = $get_data -> select_food();
							?>
							<table border="1" class="table primary_table">
        						<tr><td colspan="6"><h1 style="text-align: center;">Danh sách Food</h1></td></tr>
        						<tr>
            					<th>ID</th>
            					<th>Name Food </th>
								<th>Image Food </th>
								<th>Description </th>
            					<th colspan="2"></th>
        						</tr>
								<!-- <ul id="foods"> -->
        <?php
        foreach($select as $se_user)
        {
        ?>
								<!-- <li>
									<h2><a href="foods.php"><?php echo $se_user['namefood']; ?></a></h2>
									<div class="infos">
										<a href="foods.php"><img src="./foods/<?php echo $se_user['imgfood']; ?>" alt="Img" height="169" width="780"><span class="cover"></span></a>
										<p>
											<span><?php echo $se_user['description']; ?></span>
										</p>
									</div>
								</li> -->
        <tr>
            <td><?php echo $se_user['id']; ?></td>
            <td><?php echo $se_user['namefood']; ?></td>
			<td><img src="./foods/<?php echo $se_user['imgfood']; ?>" alt="" width="100px" height="100px"></td>
			<td><?php echo $se_user['description']; ?></td>
            <td><a href="edit_food.php?edit=<?php echo $se_user['id'];?>">Edit</a></td>
            <td><a href="del_food.php?del=<?php echo $se_user['id'];?>">Delete</a></td>
        </tr>
        <?php
        }
        ?>
								<!-- </ul> -->
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
					<li>
						<a href="dives.php">Dive Site</a>
					</li>
					<li class="active">
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