<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$id = $_POST['id'];
	$subject_name = $_POST['subject_name'];
	$subject_index  = $_POST['subject_index'];
	$subject_order = $_POST['subject_order'];
	$subject_color = $_POST['subject_color'];
	$subject_number = $_POST['subject_number'];
	require_once "../config.php";

	$fetch_query = "SELECT * FROM subjects where id != $id;";
	$fetch_results = mysqli_query($conn, $fetch_query);
	$fetch_subject_name = [];
	$fetch_subject_index = [];
	$fetch_subject_number = [];

	while ($row = mysqli_fetch_assoc($fetch_results)) {
		$fetch_subject_name[] = $row['subject_name'];
		$fetch_subject_index[] = $row['subject_index'];
		$fetch_subject_number[] = $row['subject_number'];
	}

	if (in_array($subject_name, $fetch_subject_name) && in_array($subject_index, $fetch_subject_index) && in_array($subject_number, $fetch_subject_number)) {
?>
		<script>
			alert("subject name ,subject index and subject number are already exits!");
			window.history.back();
		</script>
	<?php
	} else if (in_array($subject_name, $fetch_subject_name) && in_array($subject_index, $fetch_subject_index)) { ?>
		<script>
			alert("subject name and subject index  are already exits!");
			window.history.back();
		</script>

	<?php } else if (in_array($subject_name, $fetch_subject_name) && in_array($subject_number, $fetch_subject_number)) { ?>
		<script>
			alert("subject name and subject number  are already exits!");
			window.history.back();
		</script>

	<?php } else if (in_array($subject_number, $fetch_subject_number) && in_array($subject_index, $fetch_subject_index)) { ?>
		<script>
			alert("subject number and subject index  are already exits!");
			window.history.back();
		</script>

	<?php } else if (in_array($subject_name, $fetch_subject_name)) { ?>
		<script>
			alert("subject name is already exits!");
			window.history.back();
		</script>

	<?php } else if (in_array($subject_index, $fetch_subject_index)) { ?>
		<script>
			alert("subject index is already exits!");
			window.history.back();
		</script>

	<?php } else if (in_array($subject_number, $fetch_subject_number)) { ?>
		<script>
			alert("subject number is already exits!");
			window.history.back();
		</script>
<?php } else {

	$query = "UPDATE subjects SET subject_name = '$subject_name' ,subject_index = '$subject_index',subject_order = '$subject_order',subject_color = '$subject_color',subject_number = '$subject_number' WHERE id ='$id'; ";
	$results = mysqli_query($conn, $query);

	if (!$results) {
		echo mysqli_error($conn);
	} else {
		echo "query excuted";
	}
	header("Location: ../?section=subjects&page=index");
}
}?>