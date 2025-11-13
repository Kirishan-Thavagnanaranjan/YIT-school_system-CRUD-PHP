
<form action="subjects/store.php" method = "POST" autocomplete = "on">
<table border="1" cellpadding = "10" cellspacing = "0">
	<tr>
		<th colspan = "2"> Subject Registration </th> 
	</tr>
	<tr>
		<td><label for="subject_name">Subject Name</label></td>
		<td><input type="text" name="subject_name" id="subject_name" placeholder = "Enter the subject name.." required></td>
	</tr>
	<tr>
		<td><label for="subject_index">Subject Index</label></td>
		<td><input type="text" name="subject_index" id="subject_index" placeholder = "Enter the subject index.." required></td>
	</tr>
	<tr>
		<td><label for="subject_order">Subject Order</label></td>
		<td><input type="number" name="subject_order" id="subject_order" step="0.1" placeholder = "(1,2,3,..)" required></td>
	</tr>
	<tr>
		<td><label for="subject_color">Subject Color</label></td>
		<td><input type="Color" name="subject_color" id="subject_color" ></td>
	</tr>
	<tr>
		<td><label for="subject_number">Subject Number</label></td>
		<td><input type="number" name="subject_number" id="subject_number" placeholder = "Enter the subject number.."></td>
	</tr>
</table> </br>
<input type="reset" value="Reset" id="res"> <input type="submit" value="Add" id="sub">
	

</form>

