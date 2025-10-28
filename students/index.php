<?php
require_once("../config.php");

$query = "SELECT * FROM students ;";
$results = mysqli_query($conn,$query);
if(!$results){
	echo mysqli_error($conn);
}
?>

<DOCTYPE html>
<html>
<head>
<title>Students</title>
</head>
<body>
<h2>Students</h2>
	<table border="1" cellpadding = "10" cellspacing = "0">
			<tr>
				<td>Id</td>
				<td>First Name</td>
				<td>Last Name</td>
				<td>Addmission NO </td>
				<td>Grade_Id</td>
				<td>NIC</td>
				<td>DOB</td>
				<td>Gender</td>
				<td>Phone Number</td>
				<td>Address</td>
				<td>Actions</td>
			</tr>
		<?php foreach($results as $student){ 
				//while($row = mysqli_fetch_assoc($results) ?>
			<tr>
				<td><?php echo $student['id']; ?></td>
				<td><?php echo $student['father_name']; ?></td>
				<td><?php echo $student['student_name']; ?></td>
				<td><?php echo $student['admission_number']; ?></td>
				<td><?php echo $student['grade_id']; ?></td>
				<td><?php echo $student['nic']; ?></td>
				<td><?php echo $student['dob']; ?></td>
				<td><?php echo $student['gender']; ?></td>
				<td><?php echo $student['telephone_number']; ?></td>
				<td><?php echo $student['address']; ?></td>
				<td><button><a href="../public/edit.php?id=<?php echo $student['id']?>" >Edit </a></button>
					<button><a href="../public/delete.php?id=<?php echo $student['id']?>" onclick ="return confirm('Are you sure !')">Delete </a></button>
					</td>
			</tr>
		<?php } ?>
	</table></br>
	<button><a href="create.php">Add Student</a></button>
</body>
</html>

