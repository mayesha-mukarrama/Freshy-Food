
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>FreshyFood</title>
		<link rel="shortcut icon" href="freshyFood.ico">
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link href="style.css" rel="stylesheet" type="text/css"  media="all"/>
		<style>
		


.mcard {
  background-image:url("slide_images/background.png") ;
  border-radius: 2px;
  display: inline-block;
  height: 300px;
  margin: 0.3rem;
  position: relative;
  width: 300px;
}
		
		</style>
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<body oncontextmenu="return false;">
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="card">
		<div class="container-fluid">	
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
					<span class="sr-only">navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand" style="font-family:Jokerman;color:white">FreshyFood</a>
			</div>
		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav">
				 
				<li style="width:230px;left:10px;top:10px;"><input type="text" class="form-control" id="search" placeholder="Search"></li>
				<li style="top:10px;left:20px;"><button class="btn btn-primary" id="search_btn">Search</button></li>
			</ul>
			
			<ul class="nav navbar-nav navbar-right">
			 
			    <li><a href="#">&nbsp;En | বাং</a></li>
				<li><a href="phome.php"><span class="glyphicon glyphicon-home"></span>&nbsp;Product</a></li>				
			    <li><a href="contact_us.php"><span class="glyphicon glyphicon-envelope"></span>&nbsp;Contact Us</a></li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;Cart&nbsp;<span class="badge">0</span></a>
					<div class="dropdown-menu" style="width:400px;">
						<div class="panel panel-success">
							<div class="panel-heading">
								<div class="row">
									<div class="col-md-3">Sl.No</div>
									<div class="col-md-3">Product Image</div>
									<div class="col-md-3">Product Name</div>
									<div class="col-md-3">Price in Tk.</div>
								</div>
							</div>
							<div class="panel-body">
								<div id="cart_product">
								
								</div>
							</div>
							<div class="panel-footer"></div>
						</div>
					</div>
				</li>
				<li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>&nbsp;SignIn</a>
					<ul class="dropdown-menu">
						<div style="width:300px;">
							<div class="panel panel-primary">
								<div class="panel-heading">Login</div>
								<div class="panel-heading">
									<form onsubmit="return false" id="login">
										<label for="email">Email</label>
										<input type="email" class="form-control" name="email" id="email" required/>
										<label for="email">Password</label>
										<input type="password" class="form-control" name="password" id="password" required/>
										<p><br/></p>
										<a href="#" style="color:white; list-style:none;">Forgotten Password</a><input type="submit" class="btn btn-success" style="float:right;">
									</form>
								</div>
								<div class="panel-footer" id="e_msg"></div>
							</div>
						</div>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	
 </div>
</div> 
	
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>


	
	
<!----------------------------------------contact us------------------------------------------------------>

                <div class="panel panel-info">
					<div class="panel-heading"><center><b><h4>Our location</h4></b></center></div>
					<div class="panel-body">

                    <div style="width: 100%"><iframe width="100%" height="300" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=%20House%20No.%2056%2C%20Road%20No.%204%2FA%2C%20Satmasjid%20Road%2C%20Dhanmondi%2C%20Dhaka%201209+(Freshy%20Food)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/create-google-map/">Google Maps iframe generator</a></iframe></div><br />

                    </div>
				    </div>

				<div>
					
		<div class="panel panel-info">
            <div class="panel-heading"><center><b><h4>Customer Service</h4></b></center></div>
			<div class="panel panel-info">
			
			<div class="row">
			
		                			
	     		            <div class="col-md-6">
							</br>
							<img style="float:right; padding:40px;" src="slide_images/customer.jpg" class="img-responsive img-thumbnail" draggable="false" />
					        </div>
							<div class="col-md-6">
							<br>
							<img style="float:left; padding:10px;" src="slide_images/email.jpg" class="img-responsive img-thumbnail" draggable="false" />
                            <img style="float:left; padding:10px;" src="slide_images/phone.jpg" class="img-responsive img-thumbnail" draggable="false" />							
							<img style="float:left; padding:10px;" src="slide_images/facebook.jpg" class="img-responsive img-thumbnail" draggable="false" />
							<img style="float:left; padding:10px;" src="slide_images/call.jpg" class="img-responsive img-thumbnail" draggable="false" />
							</div>
						</div>
			</div>		
			
			
				
			
			</div>
		</div>	
					
	
					

<!-- //contact -->


<!-------------------------------------footer------------------------------------------------------->


<div class="card">

<div class="panel-footer">
								
  <ul style="list-style-type:none" >
  <center>
  <div class="row">
			
    <div class="col-md-3" >
  <li><style="text-decoration:none"><h4>Our Services:</h4></li>
  <li><a href="formalin.php" style="text-decoration:none">Live formalin detection</a></li></li>
  <li><a href="contact_us.php" style="text-decoration:none">Contact Us</a></li></li>
  <li><a href="faq.php" style="text-decoration:none">FAQ</a></li></li>
  <li><a href="about_us.php" style="text-decoration:none">About Us</a></li></li>
  <li><a href="Supplier_Corporate.php" style="text-decoration:none">Career</a></li></li>
  </br>
  </div>
   <div class="col-md-3" >
  <li><style="text-decoration:none"><h4>Our Products:</h4></li>
  <li><a href="phome.php" style="text-decoration:none">Fruits</a></li>
  <li><a href="phome.php" style="text-decoration:none">Vegetables</a></li>
  <li><a href="phome.php" style="text-decoration:none">Baverages</a></li>
  <li><a href="phome.php" style="text-decoration:none">Gift Basket</a></li>
  <li><a href="phome.php" style="text-decoration:none">Dairy</a></li>
  <li><a href="phome.php" style="text-decoration:none">Packages</a></li>
  </br>
  </div>
  <div class="col-md-6" >
   <li><style="text-decoration:none"><h4>Payment Options:</h4></li></br>
  <li><span style="font-size: 10px; font-weight:bold; display: inline-flex;vertical-align: super; width: 50px">CASH ON DELIVERY</span>&nbsp;&nbsp;<img src="slide_images/bkash.png">&nbsp;&nbsp;<img src="slide_images/rocket.png">&nbsp;&nbsp;<img src="slide_images/ucash.png">  </li>
  </center>
  </div>
  </div>
  </div>
  <div class="panel-footer"><center><img src="copyr.png" height="15px" width="15px">&nbsp;<img src="freshyFood.ico" height="15px" width="15px">&nbsp;Freshy Food&nbsp;All rights reserved</center></div>
</div>

	<!------------------live chat--------------------->
	<?php include 'chat.php';?>
	<!------------------//live chat---------------------> 
	
</body>
</html>


