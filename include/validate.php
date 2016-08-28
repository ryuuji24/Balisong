<?php
	
	if(isset($_POST['submit'])){
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$query = "select * from tbl_account where username = '$user' and password='$pass'";
		$statement = $pdo->query($query);
		if($statement->rowCount()==1){
			$row = $statement->fetch(PDO::FETCH_ASSOC);
			$_SESSION['userid'] = $row['userid'];
			$_SESSION['name'] = $row['fname'].' '.$row['lname'];
			$_SESSION['type'] = $row['type'];
			$_SESSION['sourceid'] = $row['source_id'];
			header('location:'.$row['type'].'');
		}else{
			header('location:index.php?login=0');
		}
	}
	
	if(isset($_SESSION['type'])){
		header('location:'.$_SESSION['type'].'');
	}
?>
