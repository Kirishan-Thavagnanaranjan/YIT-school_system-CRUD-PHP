<?php 
	$id = $_GET['id'];
	require_once("../config.php");
	
	$query = "SELECT * FROM students WHERE id = '$id' ;";
	$result = mysqli_query($conn,$query);
	$row = mysqli_fetch_array($result);
?>
<DOCTYPE html>
<html>
<head>
<title><?php echo $row['student_name']?>'s details</title>
<link rel="stylesheet" href="../style.css">
<style>
	img{
		width: 150px;
		border-radius: 50px;
		display: flex;
		margin-left: 10%;
		margin-bottom: 30px;
		margin-top: 20px;

	}
</style>
</head>
<body>

<form action="index.php" method = "POST" >

<img src="<?php echo $row['image'] ?>" alt="<?php echo $row['file_name'] ?>">
<table border="1" cellpadding = "10" cellspacing = "0">
	<tr>
		<th colspan = "2">  <?php echo $row['student_name']?>'s details  </th> 
	</tr>
	<tr>
		<td><label for="father_name">Father Name</label></td>
		<td><input type="text" name="father_name" id="father_name" value="<?php echo $row['father_name'] ?>">
			<input type = "hidden" name="id" id="id" value="<?php echo $row['id'] ?>"></td>
	</tr>
	<tr>
		<td><label for="student_name">Student Name</label></td>
		<td><input type="text" name="student_name" id="student_name" value="<?php echo $row['student_name'] ?>"></td>
	</tr>
	<tr>
		<td><label for="admission_number">Admission Number</label></td>
		<td><input type="text" name="admission_number" id="admission_number" value="<?php echo $row['admission_number'] ?>"></td>
	</tr>
	<tr>
		<td><label for="grade">Grade</label></td>
		<td><input type="text" name="grade_id" id="grade_id" 
		value="<?php $query1 = "SELECT grade_name from grades where id = {$row['grade_id']};";
					$result1 = mysqli_query($conn,$query1);
					$row1 = mysqli_fetch_assoc($result1);
					echo $row1['grade_name']; ?>"></td>
	</tr>
	<tr>
		<td><label for="nic">NIC</label></td>
		<td><input type="number" name="nic" id="nic" value="<?php echo $row['nic'] ?>"></td>
	</tr>
	<tr>
		<td><label for="dob">Date Of Birth</label></td>
		<td><input type="date" name="dob" id="dob" value="<?php echo $row['dob'] ?>"></td>
	</tr>
	<tr>
		<td><label for="gender">Gender</label></td>
		<td>
			<input type="radio" name="gender" id="gender" <?php if(isset($row['gender']) && $row['gender']=="male") { echo "checked";}?>  value= "male" >Male 
			<input type="radio" name="gender" id="gender" <?php if(isset($row['gender']) && $row['gender']=="female") { echo "checked";} ?> value= "female" >Female 
			<input type="radio" name="gender" id="gender" <?php if(isset($row['gender']) && $row['gender']=="other") { echo "checked";}?> value= "other" >Other </td>
	</tr>
	<tr>
		<td><label for="telephone_number">Phone Number</label></td>
		<td><input type="tel" name="telephone_number" id="telephone_number" value="<?php echo $row['telephone_number'] ?>"></td>
	</tr>
	<tr>
		<td><label for="address">Address</label></td>
		<td><input type="text" name="address" id="address" value="<?php echo $row['address'] ?>"></td>
	</tr>
</table> </br>
<a href="index.php"> <button type="button"> Back </button> </a>
	

</form>
</body>
</html>
