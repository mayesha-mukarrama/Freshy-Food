<?php
include('include/config.php');
if(!empty($_POST["cat_id"])) 
{
 $id=intval($_POST['cat_id']);
$query=mysql_query("SELECT brand_title FROM brands WHERE brand_id=$id");
?>
<option value="">Select Supplier</option>
<?php
 while($row=mysql_fetch_array($query))
 {
  ?>
  <option value="<?php echo htmlentities($row['Brand_id']); ?>"><?php echo htmlentities($row['Brand_title']); ?></option>
  <?php
 }
}
?>