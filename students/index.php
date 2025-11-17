<?php

$query = "SELECT * FROM students ;";
$results = mysqli_query($conn, $query);
if (!$results) {
	echo mysqli_error($conn);
}

?>


<body>
	<h2>Students</h2>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<td>Id</td>
			<td>Profile</td>
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
		<?php foreach ($results as $student) {
			//while($row = mysqli_fetch_assoc($results) 
		?>
			<tr>
				<td><?php echo $student['id']; ?></td>
				<td><img src="<?php echo substr($student['image'],3) ?>" alt="<?php $student['file_name'] ?>"
						style="vertical-align: middle;
				width: 50px;
				height: 50px;
				border-radius: 50%;"></td>
				<td><?php echo $student['father_name']; ?></td>
				<td><?php echo $student['student_name']; ?></td>
				<td><?php echo $student['admission_number']; ?></td>
				<td><?php
					$query1 = "SELECT grade_name from grades where id = {$student['grade_id']};";
					$result1 = mysqli_query($conn, $query1);
					$row1 = mysqli_fetch_assoc($result1);
					echo $row1['grade_name'];
					?></td>
				<td><?php echo $student['nic']; ?></td>
				<td><?php echo $student['dob']; ?></td>
				<td><?php echo $student['gender']; ?></td>
				<td><?php echo $student['telephone_number']; ?></td>
				<td><?php echo $student['address']; ?></td>
				<td><button><a href="?section=students&page=edit&id=<?php echo $student['id'] ?>">Edit </a></button>
					<button><a href="students/delete.php?id=<?php echo $student['id'] ?>&path=$student['image']" onclick="return confirm('Are you sure !')">Delete </a></button>
					<button><a href="?section=students&page=show&id=<?php echo $student['id'] ?>">Show </a></button>
					<button><a href="?section=students&page=addsubject&id=<?php echo $student['id'] ?>">Add Subject </a></button>
				</td>
			</tr>
		<?php } ?>
	</table></br>
	<button id="add"><a href="?section=students&page=create">Add Student</a></button>