<?php
require_once("../config.php");
require_once("../auth/usercheck.php");

$query = "SELECT * FROM subjects ;";
$results = mysqli_query($conn,$query);
if(!$results){
	echo mysqli_error($conn);
}
?>

<DOCTYPE html>
<html>
<head>
<title>Subjects</title>
<!-- <link rel="stylesheet" href="../style.css"> -->
</head>
<body>
	
<h2>Subjects</h2>
	<table border="1" cellpadding = "10" cellspacing = "0">
			<tr>
				<td>Id</td>
				<td>Subject Name</td>
				<td>Subject Index</td>
				<td>Subject order </td>
				<td>Subject Color</td>
				<td>Subject Number</td>
				<td>Actions</td>
			</tr>
		<?php foreach($results as $subject){ 
				//while($row = mysqli_fetch_assoc($results) ?>
			<tr>
				<td><?php echo $subject['id']; ?></td>
				<td><?php echo $subject['subject_name']; ?></td>
				<td><?php echo $subject['subject_index']; ?></td>
				<td><?php echo $subject['subject_order']; ?></td>
				<td><input type="color" value="<?php echo $subject['subject_color']; ?>"></td>
				<td><?php echo $subject['subject_number']; ?></td>
				<td><button><a href="edit.php?id=<?php echo $subject['id']?>" >Edit </a></button>
					<button><a href="delete.php?id=<?php echo $subject['id']?>" onclick ="return confirm('Are you sure !')">Delete </a></button>
					<button><a href="show.php?id=<?php echo $subject['id']?>" >Show </a></button>
					</td>
			</tr>
		<?php } ?>
	</table></br>
	<button id="add"><a href="create.php">Add Subject</a></button>
</body>
</html>

