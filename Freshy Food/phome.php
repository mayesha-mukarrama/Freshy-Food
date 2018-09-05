<?php
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>FreshyFood</title>
		<link rel="shortcut icon" href="freshyfood.ico">
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
	
		<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript">
$(function() {
    $(this).bind("contextmenu", function(e) {
        e.preventDefault();
    });
}); 
</script>
<script type="text/JavaScript"> 
    function killCopy(e){ return false } 
    function reEnable(){ return true } 
    document.onselectstart=new Function ("return false"); 
    if (window.sidebar)
    { 
        document.onmousedown=killCopy; 
        document.onclick=reEnable; 
    } 
	
document.onkeydown = function(e) {
if(event.keyCode == 123) {
return false;
}
if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)){
return false;
}
if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)){
return false;
}
}
</script>
<style>
.card {
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
    transition: all 0.3s cubic-bezier(.25,.8,.25,1);
    width: 100%;
}

.card:hover {
     box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}

</style>
<style>
/* Float four columns side by side */
.column1 {
  float: left;
  width: 33.33%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row1 {margin: 0 -5px;}

/* Clear floats after the columns */
.row1:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column1 {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}
</style>
	</head>
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
			    <li><a href="#"><span class="glyphicon glyphicon-envelope"></span>&nbsp;Contact Us</a></li>
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
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2 col-xs-12">
				<div class="card"><div id="get_category">
				</div></div>
				</br>
				<div class="card">
				<div id="get_brand">
				</div></div>
				
				
			</div>
			<div class="col-md-8 col-xs-12">
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading"><center><b>Products</b></center></div>
					<div class="panel-body">
                       
						<center><div id="get_product">
						
							<!--Here we get product jquery Ajax Request-->
					</div></center>
						
					</div>
						
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
<div class="card">

<div class="panel-footer">
			
<div class="row1">
<div class="column1">
<p><ul style="list-style-type:none";>
  <li><h4>Our Services:</h4></li>
  <li><a href="formalin.php" style="text-decoration:none">Live formalin detection</a></li></li>
  <li><a href="contact_us.php" style="text-decoration:none">Contact Us</a></li></li>
  <li><a href="faq.php" style="text-decoration:none">FAQ</a></li></li>
  <li><a href="about.php" style="text-decoration:none">About Us</a></li></li>
  <li><a href="/freshyfood/Supplier/Supplier_Corporate.php" style="text-decoration:none">Career</a></li></li></ul></p>
 </div>

<div class="column1">
<p><ul style="list-style-type:none";>
   <li><h4>Our Products:</h4></li>
  <li><a href="phome.php" style="text-decoration:none">Fruits</a></li>
  <li><a href="phome.php" style="text-decoration:none">Vegetables</a></li>
  <li><a href="phome.php" style="text-decoration:none">Baverages</a></li>
  <li><a href="phome.php" style="text-decoration:none">Gift Basket</a></li>
  <li><a href="phome.php" style="text-decoration:none">Dairy</a></li>
  <li><a href="phome.php" style="text-decoration:none">Packages</a></li></ul></p>
 </div>

 
 <div class="column1">
<p>
<ul style="list-style-type:none";>
 <li><h4>Payment Options:</h4></li>
  <li style="margin-bottom:7px;"><span style="font-size: 10px; font-weight:bold; display: inline-flex;vertical-align: super; width: 50px">CASH ON DELIVERY</span></li>
   
   <li style="margin-bottom:7px;"><img src="slide_images/bkash.png"></li>
   
   <li style="margin-bottom:7px;"><img src="slide_images/rocket.png"></li>

   <li style="margin-bottom:7px;"><img src="slide_images/ucash.png"></li>
   </ul></p>
  
</div>


  
  </div>
  <div class="panel-footer"><center>Copyright © 2018 FreshyFood All rights reserved</center></div>
</div>
</div>

</body>
</html>
