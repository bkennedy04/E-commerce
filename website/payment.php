<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
	$page_name = "Shopping Cart";
	include "cartheader.php"; 
	include "db_connect.php";
?>
<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-lg-offset-1">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-bottom:15px">
			<h1 style="text-align:center">Checkout Information</h1>
		</div>
	</div>
	<div class="row">
		<div id="cart_table" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<form>
			  <div class="form-group">
				<label for="exampleInputEmail1">First Name</label>
				<input type="email" class="form-control" id="exampleInputEmail1" placeholder="John">
			  </div>
			  <div class="form-group">
				<label for="exampleInputEmail1">Last Name</label>
				<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Doe">
			  </div>
			  <div class="form-group">
				<label for="exampleInputEmail1">Email Address</label>
				<input type="email" class="form-control" id="exampleInputEmail1" placeholder="jdoe@email.com">
			  </div>
			  <div class="form-group">
				<label for="exampleInputEmail1">Phone Number</label>
				<input type="email" class="form-control" id="exampleInputEmail1" placeholder="(502) 555-4567">
			  </div>
			  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-bottom:15px">			  
				  <button type="button" class="btn btn-primary pull-left" data-toggle="collapse" data-target="#card">Pay With Card</button>
					  <div id="card" class="collapse">
						  <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-lg-offset-1">
							  <form>
								  <div class="form-group">
									<label for="exampleInputEmail1">Card Number</label>
									<input type="email" class="form-control" id="exampleInputEmail1" placeholder="YYYY-MM-DD">
								  </div>
								  <div class="form-group">
									<label for="exampleInputEmail1">Expiration Date</label>
									<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ex: 9:00am">
								  </div>
								  <div class="form-group">
									<label for="exampleInputEmail1">Security Code</label>
									<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Hospital">
								  </div>
								  <div class="form-group">
									<label for="exampleInputEmail1">Name On Card</label>
									<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Location">
								  </div>
								  <div class="form-group">
									<label for="exampleInputPassword1">Billing Address</label>
									<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Doctor">
								  </div>
							  </form>
						  </div>
					  </div>
				  </div>
				  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-bottom:15px">
					  <button type="button" class="btn btn-primary pull-left" data-toggle="collapse" data-target="#bank">Connect to Bank Account</button>
					  <div id="bank" class="collapse">
						  <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-lg-offset-1">
							  <form>
								  <div class="form-group">
									<label for="exampleInputEmail1">Card Number</label>
									<input type="email" class="form-control" id="exampleInputEmail1" placeholder="YYYY-MM-DD">
								  </div>
								  <div class="form-group">
									<label for="exampleInputEmail1">Expiration Date</label>
									<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ex: 9:00am">
								  </div>
								  <div class="form-group">
									<label for="exampleInputEmail1">Security Code</label>
									<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Hospital">
								  </div>
								  <div class="form-group">
									<label for="exampleInputEmail1">Name On Card</label>
									<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Location">
								  </div>
								  <div class="form-group">
									<label for="exampleInputPassword1">Billing Address</label>
									<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Doctor">
								  </div>
							  </form>
						  </div>
					  </div>
					  </div>
				  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="padding-bottom:15px">
					  <button type="button" class="btn btn-primary pull-left" data-toggle="collapse" data-target="#paypal">Paypal</button>
					  <div id="paypal" class="collapse">
						  <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-lg-offset-1">
							  <form>
								  <div class="form-group">
									<label for="exampleInputEmail1">Card Number</label>
									<input type="email" class="form-control" id="exampleInputEmail1" placeholder="YYYY-MM-DD">
								  </div>
								  <div class="form-group">
									<label for="exampleInputEmail1">Expiration Date</label>
									<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Ex: 9:00am">
								  </div>
								  <div class="form-group">
									<label for="exampleInputEmail1">Security Code</label>
									<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Hospital">
								  </div>
								  <div class="form-group">
									<label for="exampleInputEmail1">Name On Card</label>
									<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Location">
								  </div>
								  <div class="form-group">
									<label for="exampleInputPassword1">Billing Address</label>
									<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Doctor">
								  </div>
							  </form>
						  </div>
					  </div>
				  </div>
			</form>
			<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-lg-offset-1" style="text-align:center;">
				<a href="testemail.php"><button type="button" class="btn btn-primary btn-lg">Finish Checkout</button></a>
			</div>
		</div>
	</div>
</div>

	
<?php include "footer.php";?>