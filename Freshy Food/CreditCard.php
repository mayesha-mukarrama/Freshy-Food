<?php
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>FreshyFood</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="shortcut icon" href="freshyFood.ico">
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
	

</script>
	</head>
<body oncontextmenu="return false;">
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">	
			<div class="navbar-header">
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
				</div>
		</div>
	</div>
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">Payment With Credit Card</div>
					<div class="panel-body">
						
						<form onsubmit="return false" id="submit">
							<label for="email">EMAIL ADDRESS</label>
							<input type="email" class="form-control" name="email" id="email" required/>
							<label for="name">FIRST NAME</label>
							<input type="name" class="form-control" name="name" id="name" required/>
                                                        <label for="name">LAST NAME</label>
							<input type="name" class="form-control" name="name" id="name" required/>
							<p><br/></p>
                                      <center> <h3><div class="panel-heading">Credit Card Info</div></h3> </center>
					<div class="panel-body">
						<!--Credit Card Info-->
						<form onsubmit="return false" id="Submit">
							<label for="name">NAME ON CARD</label>
							<input type="name" class="form-control" name="name" id="name" required/>
							<label for="number">CARD NUMBER</label>
							<input type="number" class="form-control" name="number" id="number" required/>
                                                        <h5>EXPIRATION</h5>
                                                        <input type="number" class="text_box" value="6" min="1">
                                                        <input type="number" class="text_box" value="1988" min="1">
                                                        <h5>CVV NUMBER</h5>
                                                        <input type="text" value="xxxx" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'xxxx';}" required="">
                                                        <div class="single-bottom">
						        <input type="checkbox" id="brand" value="">
							<label for="brand"><span></span>By checking this box, I agree to the Terms &amp; Conditions &amp; Privacy Policy.</label>
<div class="single-bottom">
					
											</div>
							<p><br/></p>
                                                           <center><INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Submit"></center>
													
						</form>
				</div>
				
</div>

</div>

</div>
</div>
</div>
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
  <li><a href="about_us.html" style="text-decoration:none">About Us</a></li></li>
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














