<?php

	include('../../include/db.php');
	include('model/data_model.php');
	$datares = $data->getalldata($pdo);
	$row = $datares->fetch(PDO::FETCH_ASSOC);
	$level = $row['level'];
	$datares2 = $data->getalllevels($pdo,$level);
	$row2 = $datares2->fetch(PDO::FETCH_ASSOC);
	

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/site.min.css">
    <script type="text/javascript" src="js/site.min.js"></script>
	<style type="text/css">
		.progress-bar span{
			font-family:Century Gothic;
			font-weight:bold;
			font-size:16px;
		}
	</style>
</head>
<body>
	<div id="container">
		<div id="menu">
			<ul>
				<li><a href="../index.php"><i class="glyphicon glyphicon-home"></i> Home</a></li>
				<li><a href="account.php"><i class="glyphicon glyphicon-user"></i> Profile</a></li>
				<li><a href=""><img src="img/logo1.jpg" alt="" /></a></li>
				<li><a href="../point_multiplier/setT.html"><i class="glyphicon glyphicon-star"></i> See Rewards</a></li>
				<li><a href=""><i class="glyphicon glyphicon-envelope"></i> Contact Us</a></li>
			</ul>
		</div>
		<br class="clearfix"/>
		
		<div id="client">
			<img class="char" src="img/char1.png" alt="" />
			<div class="clientdetails">
				<?php echo $_SESSION['name']; ?> <br />
				<?php $level = $row['level']; ?>
				<span><?php echo $row2['titles']; ?></span>
			
		
			<div class="row" >
			  <div class="col-md-6">
					<span>Level <?php echo $row['level']; ?> - <?php echo $row['experience']; ?>/<?php echo $row['exptoearn']; ?></span>
				  </div>
				</div>
			  </div>
			</div>
			
			
			
			</div>
		</div>
		
		<br class="clearfix" />
		
		<table class="table well">
			<tr>
				<td class="tbltitle">Rewards</td>
				<td class="tbltitle">Points</td>
			</tr>
			<tr>
				<td>Saver</td>
				<td>10 Points</td>
			</tr>
			<tr>
				<td>On the Go</td>
				<td>20 Points</td>
			</tr>
			<tr>
				<td>For the Future</td>
				<td>15 Points</td>
			</tr>
		</table>
		
	</div>
</body>
</html>