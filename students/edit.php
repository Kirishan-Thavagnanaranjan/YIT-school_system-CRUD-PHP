<DOCTYPE html>
	<html>

	<head>
		<title>Edit Students</title>
		<link rel="stylesheet" href="../style.css">
	</head>

	<body>
		<?php
		$id = $_GET['id'];
		require_once "../config.php";

		$query = "SELECT * FROM students WHERE id = '$id' ;";
		$result = mysqli_query($conn, $query);
		$row = mysqli_fetch_array($result);
		$query1 = "SELECT * FROM grade;";
		$result1 = mysqli_query($conn, $query1);
		
		?>
		<form action="../students/update.php" method="POST">
			<table border="1" cellpadding="10" cellspacing="0">
				<tr>
					<th colspan="2"> Edit Student details </th>
				</tr>
				<tr>
					<td><label for="father_name">Father Name</label></td>
					<td><input type="text" name="father_name" id="father_name" value="<?php echo $row['father_name'] ?>">
						<input type="hidden" name="id" id="id" value="<?php echo $row['id'] ?>">
					</td>
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
					<td><label for="grade_id">Grade ID</label></td>
					<td>
						<select name="grade_id">
							<?php while ($row1 = mysqli_fetch_assoc($result1)) { ?>

								<option value="<?php echo $row1['id']; ?>" <?php if($row['grade_id'] == $row1['id']){echo "selected";} ?>><?php echo $row1['grade_name']; ?></option>


							<?php } ?>
						</select>
					</td>
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
						<input type="radio" name="gender" id="gender" <?php if (isset($row['gender']) && $row['gender'] == "male") {
																			echo "checked";
																		} ?> value="male">Male
						<input type="radio" name="gender" id="gender" <?php if (isset($row['gender']) && $row['gender'] == "female") {
																			echo "checked";
																		} ?> value="female">Female
						<input type="radio" name="gender" id="gender" <?php if (isset($row['gender']) && $row['gender'] == "other") {
																			echo "checked";
																		} ?> value="other">Other
					</td>
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
			<input type="reset" value="Reset"> <input type="submit" value="Save">


		</form>
	</body>

	</html>