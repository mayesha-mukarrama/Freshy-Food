<?php
include("db.php");
if(isset($_POST["review"])){
	$category_query = " select * from user_review";
	$run_query = mysqli_query($con,$category_query) or die(mysqli_error($con));

	
	     echo "<table style='overflow-x:auto; border-collapse: collapse;'><tr>";
		while($row = mysqli_fetch_array($run_query)){
			
			$username = $row['first_name'].' '.$row['last_name'];
			$reviews = $row['review'];
		    $image = $row['image'];
		 	
			echo "<td>
			      <center>
			     <div class='mcard card-1'>
		         <br>
			     <p><img src='slide_images/$image' height='100 px' width='100px' style='border-radius: 50%;'></p>
                 <h4 tyle='font-family:Sans-Serif;'>$username</h4>
				 <p style='text-align:center ;justify;font-family:Sans-Serif; padding:20px;'>$reviews</p>
				 </div>
				 </center>
				 <td>"; 
				 
				}
		
		echo "</tr></table>";
	
}
?>






