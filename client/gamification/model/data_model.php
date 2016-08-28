<?php
	
	$data = new Data();
	if(isset($_GET['q'])){
		$data->$_GET['q']();
	}
	
	
	class Data{
		function getalldata($pdo){
			$q = "select * from tbl_gamification";
			$statement = $pdo->query($q);
			return $statement;
		}
		function getalllevels($pdo,$level){
			$q = "select * from tbl_level_titles where level = '$level'";
			$statement = $pdo->query($q);
			return $statement;
			
		}
		function triggerdata(){
			include('../../../include/db.php');
			$channelid = $_GET['channelid'];
			$transactionid = $_GET['transactionid'];
			$source_id = $_GET['source_id'];
			$currency = $_GET['currency'];
			$target = $_GET['target'];
			$targetcurrency = $_GET['targetcurrency'];
			
			$amount = $_GET['amount'];
			$exptoearn = $row2['exptoearn'];
			
			$query = "select * from tbl_gamification where userid = '$source_id'";
			$statement2 = $pdo->query($query);
			$row2 = $statement2->fetch(PDO::FETCH_ASSOC);
			if($_GET['stat'] == 'addexp'){
				$additionalexp = $amount / 100;
				$experience = $row2['experience'] + $additionalexp;
				$percent = $row2['experience'] / $row['exptoearn'] * 100;
				if($row2['experience'] >= $row2['exptoearn']){
					$level = $row2['level'] + 1;
					$experience = $row2['experience'] == 1;
					$exptoearn = $row2['exptoearn'] * .3;
					
				}else{
					$level = $row2['level'];
					$exptoearn = $row2['exptoearn'];
				}
			}
			$q2 = "update tbl_gamification set level = '$level', experience = '$experience', exptoearn = '$exptoearn', percent = '$percent' where userid='$source_id'";
			$statement = $pdo->query($q2);
			if($statement){
				header('location:../account.php?stat=success');
			}
			
			
		}
		// function addclick(){
			// include('../../include/db.php');
			// $id = $_GET['id'];
			// $level2 = $_GET['level'];
			// $exptoearn = $_GET['exptoearn'];
			// $q = "select * from tbl_player where player_id = '$id' ";
			// $r = mysql_query($q);
			// $row = mysql_fetch_array($r);
			// if($_GET['stat'] == 'addexp'){
				// $experience = $row['experience'] + 25;
				// if($row['experience'] >= $exptoearn){
					// $level = $row['level'] + 1;
					// $experience = $row['experience'] == 1;
					// $exptoearn = $row['exptoearn'] * 2;
 				// }else{
					// $level = $row['level'] = $level2;
					// $exptoearn = $row['exptoearn'];
				// }
			// }else{echo mysql_error();}
			// $q2 = "update tbl_player set level = '$level', experience = '$experience', exptoearn = '$exptoearn' where player_id='$id'";
			// $r2 = mysql_query($q2);
			// if($r2){
				// header('location:../index.php?stat=success');
			// }else{
				
			// }
		}
		
?>