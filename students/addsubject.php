<?php
$id = $_GET['id'];
require_once("../config.php");
require_once "../auth/usercheck.php";
// Fetch student details
$query = "SELECT * FROM students WHERE id = '$id';";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);

// Fetch grade name
$query1 = "SELECT grade_name FROM grade WHERE id = {$row['grade_id']}";
$result1 = mysqli_query($conn, $query1);
$row1 = mysqli_fetch_assoc($result1);
$grade_name = $row1['grade_name'];

// Fetch all subjects
$query2 = "SELECT subject_name, id FROM subjects;";
$result2 = mysqli_query($conn, $query2);
$all_subjects = [];
while ($row2 = mysqli_fetch_assoc($result2)) {
    $all_subjects[] = $row2;
}

// Check assigned subjects
$query3 = "SELECT subject_id FROM student_subject WHERE student_id ='$id';";
$result3 = mysqli_query($conn, $query3);
$result3_arr = [];
while ($row3 = mysqli_fetch_array($result3)) {
    $result3_arr[] = $row3['subject_id'];
}

// Subjects allowed for the student's grade
$query4 = "SELECT subject_id FROM grade_subject WHERE grade_id = {$row['grade_id']};";
$result4 = mysqli_query($conn, $query4);
$selected_subjects = [];
while ($row4 = mysqli_fetch_assoc($result4)) {
    $selected_subjects[] = $row4['subject_id'];
}
?>
<!DOCTYPE html>
<html>

<head>
    <title><?php echo $row['student_name'] ?>'s details</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>

    <form action="../student_subject/store.php" method="POST">
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th colspan="2"><?php echo $row['student_name'] ?>'s details</th>
            </tr>
            <tr>
                <td><label for="father_name">Father Name</label></td>
                <td>
                    <input type="text" name="father_name" id="father_name" value="<?php echo $row['father_name'] ?>">
                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
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
                <td><label for="grade_id">Grade</label></td>
                <td><input type="text" name="grade_id" value="<?php echo $grade_name; ?>"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><label for="subject">Selected Subjects</label></td>
            </tr>
            
                <?php if (!empty($result3_arr)) { ?>
                    <?php foreach ($all_subjects as $subject) { ?>
                        <tr>
                        <td>
                            <?php if (in_array($subject['id'], $result3_arr)) { ?>
                                <?php echo $subject['subject_name']; ?></td>
                            <td><button><a href="../student_subject/delete.php?id=<?php echo $id ?>&sub_id=<?php echo $subject['id']?>">Delete</a></button></td>
                            <?php  } ?>
                       
                        </tr>
                    <?php } ?>

                <?php } else {
                    echo "No subjects assigned yet.";
                }
                ?>

            </tr>
        </table><br>

        <table border="1">
            <tr>
                <td><label for="subject_id">Subjects</label></td>
                <td>
                    <?php
                    foreach ($all_subjects as $subject) {
                        if (in_array($subject['id'], $selected_subjects)) {
                    ?>
                            <input type="checkbox" name="subjects_id[]" value="<?php echo $subject['id']; ?>"
                                <?php if (in_array($subject['id'], $result3_arr)) echo "checked"; ?>>
                            <?php echo $subject['subject_name']; ?><br>
                    <?php
                        }
                    }
                    ?>
                </td>
            </tr>
        </table><br>

        <a href="index.php"><button type="button">Back</button></a>
        <input type="submit" value="Save">
    </form>
</body>

</html>