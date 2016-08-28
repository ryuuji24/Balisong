<div class="modal fade" id="transacwindow">
				<div class="modal-dialog">
					<div class="modal-content">
						
						<!-- header -->
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h3 class="modal-title">Session name</h3>
						</div>
						
						<!-- body (form) -->
						<div class="modal-body">
							<form role="form" action="transaction/index.php" method="post">
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">Amount</span>
										<input type="text" class="form-control" placeholder="00.00" id="amount" name="amount" aria-describedby="basic-addon1">
									</div>
								</div>
								
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon">Target</span>
										<input type="text" class="form-control" placeholder="Source ID" id="target" name="target" aria-describedby="basic-addon1">
									</div>
								</div>
						
						
								<button class="btn btn-success btn-block" type="submit" name="submit">Transac</button>
							</form>
							
						</div>
						
						<!-- footer -->
						<div class="modal-header">
							<button class="btn btn-danger btn-block">Close</button>
						</div>
					
					</div>
				</div>
			</div>