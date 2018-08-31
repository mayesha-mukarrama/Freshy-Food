<?php
?>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<div class="panel panel-primary">
					<div class="panel-heading">Payment With Credit Card</div>
                                        <div>Personal Information</div>
					<div class="panel-body">
						<!--Payment With Credit Card-->
						<form onsubmit="return false" id="Submit">
							<label for="email">EMAIL ADDRESS</label>
							<input type="email" class="form-control" name="email" id="email" required/>
							<label for="name">FIRST NAME</label>
							<input type="name" class="form-control" name="name" id="name" required/>
                                                        <label for="name">LAST NAME</label>
							<input type="name" class="form-control" name="name" id="name" required/>
							<p><br/></p>
                                        <div>Credit Card Info</div>
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
						       <INPUT TYPE = "Submit" Name = "Submit1" VALUE = "Submit">	
						</form>
				</div>
				<div class="panel-footer"><center><img src="copyr.png" height="15px" width="15px">&nbsp;<img src="simpliciashop.ico" height="15px" width="15px">&nbsp;FreshyFood&nbsp;All rights reserved</center><div id="e_msg"></div></div>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
</body>
</html>






















