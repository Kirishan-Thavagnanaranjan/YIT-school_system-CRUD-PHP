<!DOCTYPE html>
	<html>

	<head>
		<title>Add Student</title>
		<link rel="stylesheet" href="../style.css">
		<style>

		</style>
	</head>

	<body>
		<?php
		require_once("../config.php");
		$query = "SELECT * FROM grade ;";
		$results = mysqli_query($conn, $query);
		if (!$results) {
			echo mysqli_error($conn);
		}
		?>

		<form action="../students/store.php" method="POST" autocomplete="on">
			<table border="1" cellpadding="10" cellspacing="0">
				<tr>
					<th colspan="2"> Student Registration </th>
				</tr>
				<tr>
					<td><label for="father_name">Father Name</label></td>
					<td><input type="text" name="father_name" id="father_name" placeholder="Enter the father name.." required></td>
				</tr>
				<tr>
					<td><label for="student_name">Student Name</label></td>
					<td><input type="text" name="student_name" id="student_name" placeholder="Enter the student name.." required></td>
				</tr>
				<tr>
					<td><label for="admission_number">Admission Number</label></td>
					<td><input type="text" name="admission_number" id="admission_number" placeholder="Enter your admission number." required></td>
				</tr>
				<tr>
					<td><label for="grade_id">Grade</label></td>
					<td>
						<select name="grade_id" id="grade_id">
							<option value="">-- Select Grade --</option>
						<?php while ($row = mysqli_fetch_assoc($results)) { ?>

							<option value="<?php echo $row['id']; ?>"><?php echo $row['grade_name']; ?></option>


						<?php } ?>
						</select>
					</td>

				</tr>
				<tr>
					<td><label for="nic">NIC</label></td>
					<td><input type="number" name="nic" id="nic" placeholder="Enter the nic.."></td>
				</tr>
				<tr>
					<td><label for="dob">Date Of Birth</label></td>
					<td><input type="date" name="dob" id="dob"></td>
				</tr>
				<tr>
					<td><label for="gender">Gender</label></td>
					<td><input type="radio" name="gender" id="gender" value="male">Male <input type="radio" name="gender" id="gender" value="female">Female <input type="radio" name="gender" id="gender" value="other">Other </td>
				</tr>
				<tr>
					<td><label for="telephone_number">Phone Number</label></td>
					<td><input type="tel" name="telephone_number" id="telephone_number" placeholder="Enter your phone Number"></td>
				</tr>
				<tr>
					<td><label for="address">Address</label></td>
					<td><input type="text" name="address" id="address" placeholder="Enter the address.."></td>
				</tr>
			</table> </br>
			<input type="reset" value="Reset" id="res"> <input type="submit" value="Add" id="sub">


		</form>
	</body>

	</html>