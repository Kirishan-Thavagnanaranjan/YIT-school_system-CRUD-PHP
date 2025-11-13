
<?php 
	$id = $_GET['id'];

	$query = "SELECT * FROM subjects WHERE id = '$id' ;";
	$result = mysqli_query($conn,$query);
	$row = mysqli_fetch_array($result);
?>
<form action="subjects/update.php" method = "POST" autocomplete = "on">
<table border="1" cellpadding = "10" cellspacing = "0">
	<tr>
		<th colspan = "2"> Edit Subject details  </th> 
	</tr>
	<tr>
		<td><label for="subject_name">Subject Name</label></td>
		<td><input type="text" name="subject_name" id="subject_name" value = "<?php echo $row['subject_name'] ?>">
		<input type = "hidden" name="id" id="id" value="<?php echo $row['id'] ?>"></td>
	</tr>
	<tr>
		<td><label for="subject_index">Subject Index</label></td>
		<td><input type="text" name="subject_index" id="subject_index" value = "<?php echo $row['subject_index'] ?>"></td>
	</tr>
	<tr>
		<td><label for="subject_order">Subject Order</label></td>
		<td><input type="number" name="subject_order" id="subject_order" step="0.1" value = "<?php echo $row['subject_order'] ?>"></td>
	</tr>
	<tr>
		<td><label for="subject_color">Subject Color</label></td>
		<td><input type="Color" name="subject_color" id="subject_color" value = "<?php echo $row['subject_color'] ?>"></td>
	</tr>
	<tr>
		<td><label for="subject_number">Subject Number</label></td>
		<td><input type="number" name="subject_number" id="subject_number" value = "<?php echo $row['subject_number'] ?>"></td>
	</tr>
</table> </br>
<input type="reset" value="Reset"> <input type="submit" value="Save">
	

</form>

