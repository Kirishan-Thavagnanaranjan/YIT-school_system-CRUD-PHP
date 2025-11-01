<?php
require_once(__DIR__ . "/../config.php");
require_once("../auth/usercheck.php");

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
<!-- <link rel="stylesheet" href="../style.css"> -->
</head>
<body>
<h2>Students</h2>
	<table border="1" cellpadding = "10" cellspacing = "0">
			<tr>
				<td>Id</td>
				<td>First Name</td>
				<td>Last Name</td>
				<td>Addmission NO </td>
				<td>Grade</td>
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
				<td><button><a href="../students/edit.php?id=<?php echo $student['id']?>" >Edit </a></button>
					<button><a href="delete.php?id=<?php echo $student['id']?>" onclick ="return confirm('Are you sure !')">Delete </a></button>
					<button><a href="../students/show.php?id=<?php echo $student['id']?>" >Show </a></button>
					<button><a href="../students/addsubject.php?id=<?php echo $student['id']?>" >Add Subject </a></button>
					</td>
			</tr>
		<?php } ?>
	</table></br>
	<button id="add"><a href="create.php">Add Student</a></button>
</body>
</html>

