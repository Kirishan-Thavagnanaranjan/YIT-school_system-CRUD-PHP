<?php
if($_SERVER ["REQUEST_METHOD"] == "POST" ){
	$id = $_POST['id'];
	$grade_name = $_POST['grade_name'];
	$grade_group  =$_POST['grade_group'];
	$grade_color = $_POST['grade_color'];
	$grade_order = $_POST['grade_order'];

	
	require_once('../config.php');

	$query1 = "SELECT grade_name,grade_order FROM grades where id!=$id;";
	$result1 = mysqli_query($conn, $query1);
	$fetch_grade_names = [];
	$fetch_grade_order = [];
	while ($row = mysqli_fetch_assoc($result1)) {
		$fetch_grade_names[] = $row["grade_name"];
		$fetch_grade_order[] = $row["grade_order"];
	}

	if (in_array($grade_name, $fetch_grade_names) && in_array($grade_order, $fetch_grade_order)) {
?>
		<script>
			alert("Grade name and grade order are all ready exits..!");
			window.history.back();
		</script>
<?php
	}
	else if(in_array($grade_name,$fetch_grade_names)){
		?>
		<script>
			alert("Grade name already exits..!");
			window.history.back();
		</script>
		<?php
	}
	else if (in_array($grade_order,$fetch_grade_order)){
		?>
		<script>
			alert("Grade order is already exits..!")
			window.history.back();
		</script>
		<?php
	}
	else{

	$query = "UPDATE grades SET grade_name = '$grade_name' ,grade_group = '$grade_group',grade_color = '$grade_color',grade_order = '$grade_order' WHERE id ='$id'; ";
	$results = mysqli_query($conn,$query);
	
	if(!$results){
		echo mysqli_error($conn);
	}
	else{
		echo "query excuted";
	}
	header("Location: ../index.php?section=grades&page=index");
}
}

?>