<?php
	include('../include/db.php');
	include('include/header.php');
	include('include/modal.php');

?>
	
	<div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Start Bootstrap
                    </a>
                </li>
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li>
                    <a href="#">Shortcuts</a>
                </li>
                <li>
                    <a href="#">Overview</a>
                </li>
                <li>
                    <a href="#">Events</a>
                </li>
                <li>
                    <a href="#">About</a>
                </li>
                <li>
                    <a href="#">Services</a>
                </li>
                <li>
                    <a href="#">Contact</a>
                </li>
            </ul>
        </div>
			
			<div class="container-fluid">
				<div class="page-header">
					<h3>Test Index</h3>
				</div>
				
				<?php if(isset($_GET['return'])): ?>
					<div class="alert alert-success">Transaction Success</div> 
					<div class="jumbotron">
					
					
					</div>
				<? endif; ?>
				
				<div class="row">
					<div class="col-lg-2 col-md-3"> 
						<button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#transacwindow">New Transaction</button>
					</div>
					
					<div class="col-lg-5 col-md-3"> 
						<a href="gamification/account.php"><button type="button" class="btn btn-lg btn-primary">Account Profile</button></a>
					</div>
				</div>
				
					
				
			</div>
				


<?php include('include/footer.php'); ?>