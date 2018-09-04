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
		<link rel="stylesheet" href="w3.css"/>
		<link rel="shortcut icon" href="freshyFood.ico"/>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<link rel="stylesheet" href="slider_css_js/swiper.min.css"/>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>		
		
		
		
		
		
<!--------------------------------------------------------------------------------------------------->
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
    } document.onkeydown = function(e) {
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


<!------------------------------------------------------------------------------------------------------>

<script>
$(document).ready(function(){
	display();
	
	//cat() is a funtion fetching category record from database whenever page is load
	function display(){
		$.ajax({
			url	    :	"display.php",
			method  :	"POST",
			data	:   {review:1},
			success	:	function(data){
				$("#myview").html(data);
				
			}
		})
	}
	})
</script>
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

.card-1 {
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
}

.card-1:hover {
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
  

</style>
<!------------------------------------------------------------------------------------------------------>
<style>
.swiper-container {
      width: 100%;
      height: 100%;

    }
    .swiper-slide {
      text-align: center;
      font-size: 0 px;
      background: #fff;

    
    }
  </style>
  
   
  <style>
.card {
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
    transition: all 0.3s cubic-bezier(.25,.8,.25,1);
    width: 100%;
}

.card:hover {
     box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}

.container {
    padding: 2px 16px;
}
</style>



<style>
* {
    box-sizing: border-box;
}

.column {
    float: left;
    width: 25%;
    padding: 4px;
}

/* Clearfix (clear floats) */
.row::after {
    content: "";
    clear: both;
    display: table;
}
</style>

<style>
.container {
    position: relative;
    font-family: Arial;
text-align: center;
    color: #29c1aa;
font-size:150%;
}

.centered {
    position: absolute;
    top: 30%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.container .btn {
    position: absolute;
    bottom: 5%;
    left: 50%;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    background-color:#29c1aa;
    color: black;
    font-size: 16px;
    padding: 12px 24px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    text-align: center;

}

.container .btn:hover {
    background-color: #2e6da4;
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
	<div class="container-fluid">
		
			<div class="col-md-12 col-xs-15">
				<div class="row">
					<div class="col-md-12 col-xs-15" id="product_msg">
					</div>
				</div>
				
				<div class="panel panel-info">
		
		<!--<div class="panel-heading">Products</div>-->
					
		<div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="slide_images/v1.jpg"></div>
      <div class="swiper-slide"><img src="slide_images/v2.jpg"></div>
      <div class="swiper-slide"><img src="slide_images/v3.jpg"></div>
      <div class="swiper-slide"><img src="slide_images/v4.jpg"></div>
      <div class="swiper-slide"><img src="slide_images/v5.jpg"></div>
      <div class="swiper-slide"><img src="slide_images/v6.jpg"></div>
      <div class="swiper-slide"><img src="slide_images/v7.jpg"></div>
	  <div class="swiper-slide"><img src="slide_images/v8.jpg"></div>
      <div class="swiper-slide"><img src="slide_images/v9.jpg"></div>
	  <div class="swiper-slide"><img src="slide_images/v10.jpg"></div>
	  <div class="swiper-slide"><img src="slide_images/v11.jpg"></div>
      
    </div>
    <!-- Add Pagination 
    <div class="swiper-pagination"></div>-->
    <!-- Add Arrows -->
    <!-- <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>-->
  </div>

  <!-- Swiper JS -->
  <script src="slider_css_js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      spaceBetween: 0,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      
     
    });
  </script>
				
				</div>
				
				</br>
			
<!-----------------------------------why choose us--------------------------------------------------------->			

				
				
		<div class="panel panel-info">
				
    
  
<div class="card">
		<div class="panel-body">
		
				<img src="slide_images/b1.jpg" height="100%" width="100%">		
						
								
        </div>
</div>
			
				</div>
				
				</br>
				
				
				

<!-----------------------------------Why will you love Freshy food--------------------------------------------------------->			
<div class="panel panel-info">
<div class="panel-heading"><center><b><h3>Why will you love Freshy Food</h3></b></center></div>
				
		<div class="panel panel-info">
				
    
  <div class="card">
		<div class="panel-body">
		
				<div class="row">

  <div class="column">
  <div class="card">
    <img src="slide_images/p1.jpg"  style="width:100%"></div>
  </div>
  <div class="column">
  <div class="card">
    <a href="formalin.php"><img src="slide_images/p2.jpg"  style="width:100%"></a></div>
  </div>
  <div class="column">
  <div class="card">
     <a href="phome.php"><img src="slide_images/p4.jpg"  style="width:100%"></a></div>
  </div>
  <div class="column">
  <div class="card">
    <a href="phome.php"><img src="slide_images/p3.jpg"  style="width:100%"></a></div>
  </div>
    
</div>
						
								
</div>
</div>
			
				</div>
						
				</div>

				</br>
<!------------------------------------why choose Freshy Food------------------------------------------------->		
<div class="panel panel-info">
<div class="panel-heading"><center><b><h3>Why choose Freshy Food</h3></b></center></div>	
				<div class="panel panel-info">
				<div class="card">
		<div class="panel-body">
					<img src="slide_images/b2.jpg" height="50px" width="100%">	
						
								
</div></div>
			
				</div>
				</div>
				<img src="slide_images/delivery.png" height="200px" width="100%">		
			
				</br>
				
				
<!----------------------------Customer opinion---------------------------------------------------------------->
        <div class="panel panel-info">
          <div class="panel-heading"><center><b><h3>What our client saying</h3></b></center></div>
			<div class="panel panel-info">
				<div class="card">
		            <div class="panel-body" id="myview">											
								
                    </div>
                </div>
			
			</div>
		</div>

<!------------------------------------Join with us------------------------------------------------->		
<div class="panel panel-info">
<div class="panel-heading"><center><b><h3>Want to Join With Freshy Food</h3></b></center></div>	
				<div class="panel panel-info">
				
		<div class="panel-body">
					
</div>
			
				</div>
				
                                                                   
 <div class="container">
 <div class="card">
  <img src="slide_images/join with us.jpg" height="230px" width="100%"> 
  <div class="centered">
   <b><p>Do you want to be a corporate customer?</p></b>
   
  </div>
<button class="btn "><a style="color:#fff;" href="Supplier/Supplier_Corporate.php">join with us</button></a>
</div>
</div>
</br>
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


</body>
</html>

