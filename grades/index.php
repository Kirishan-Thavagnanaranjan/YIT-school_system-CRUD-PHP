<?php
require_once("../config.php");


$query = "SELECT * FROM grade ;";
$results = mysqli_query($conn,$query);
if(!$results){
	echo mysqli_error($conn);
}
?>

<DOCTYPE html>
<html>
<head>
<title>Grades</title>
<!-- <link rel="stylesheet" href="../style.css"> -->
</head>
<body>
	<?php
	require_once("../auth/usercheck.php");
	?>
<h2>Grades</h2>
	<table border="1" cellpadding = "10" cellspacing = "0">
			<tr>
				<td>Id</td>
				<td>Grade Name</td>
				<td>Grade Group</td>
				<td>Grade Color </td>
				<td>Grade order</td>
				<td>Actions</td>
			</tr>
		<?php foreach($results as $grade){ 
				//while($row = mysqli_fetch_assoc($results) ?>
			<tr>
				<td><?php echo $grade['id']; ?></td>
				<td><?php echo $grade['grade_name']; ?></td>
				<td><?php echo $grade['grade_group']; ?></td>
				<td><?php echo $grade['grade_color']; ?></td>
				<td><?php echo $grade['grade_order']; ?></td>
				<td><button><a href="edit.php?id=<?php echo $grade['id']?>" >Edit </a></button>
					<button><a href="delete.php?id=<?php echo $grade['id']?>" onclick ="return confirm('Are you sure !')">Delete </a></button>
					<button><a href="show.php?id=<?php echo $grade['id']?>" >Show </a></button>
					<button><a href="../grades/addsubject.php?id=<?php echo $grade['id']?>" >Add Subject </a></button>
					</td>
			</tr>
		<?php } ?>
	</table></br>
	<button ><a href="create.php" id="add">Add Grade</a></button>
</body>
</html>

