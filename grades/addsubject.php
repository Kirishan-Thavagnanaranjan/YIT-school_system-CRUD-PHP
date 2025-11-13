<?php
$id = $_GET['id'];



//fetch grade details	
$query = "SELECT * FROM grades WHERE id = '$id' ;";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);

//fetch subject details from subject table
$query2 = "SELECT subject_name,id FROM subjects;";
$result2 = mysqli_query($conn, $query2);
$subjects = [];
while ($row2 = mysqli_fetch_assoc($result2)) {
    $subjects[] = $row2;
}


//check assigned subjects
$query3 = "SELECT subject_id FROM grade_subject WHERE grade_id ='$id';";
$result3 = mysqli_query($conn, $query3);
$result3_arr = [];
while ($row3 = mysqli_fetch_array($result3)) {
    $result3_arr[] = $row3['subject_id'];
}

?>
<title><?php echo $row['grade_name'] ?>'s details</title>

<form action="grade_subject/store.php" method="POST" autocomplete="on">
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th colspan="2"> <?php echo $row['grade_name'] ?>'s details </th>
        </tr>
        <tr>
            <td><label for="grade_name">Grade Name</label></td>
            <td><input type="text" name="grade_name" id="grade_name" value="<?php echo $row['grade_name'] ?>">
                <input type="hidden" name="id" id="id" value="<?php echo $row['id'] ?>">
            </td>
        </tr>
        <tr>
            <td><label for="grade_group">Grade Group</label></td>
            <td><input type="text" name="grade_group" id="grade_group" value="<?php echo $row['grade_group'] ?>"></td>
        </tr>
        <tr>
            <td><label for="grade_color">Grade color</label></td>
            <td><input type="color" name="grade_color" id="grade_color" value="<?php echo $row['grade_color'] ?>"></td>
        </tr>
        <tr>
            <td><label for="grade_order">Grade order</label></td>
            <td><input type="number" name="grade_order" id="grade_order" step="0.1" value="<?php echo $row['grade_order'] ?>"></td>
        </tr>
        <tr>
            <td><label for="subject">Selected Subjects</label></td>
            <td><?php
                if (!empty($result3_arr)) {
                    $selected_subjects = [];
                    foreach ($subjects as $subject) {
                        if (in_array($subject['id'], $result3_arr)) {
                            echo $subject['subject_name']; ?>
                            <button><a href="grade_subject/delete.php?id=<?php echo $id ?>&sub_id=<?php echo $subject['id'] ?>">Delete</a></button><br />
                <?php  }
                    }
                } else {
                    echo "No subjects assigned yet.";
                }

                ?>

            </td>

        </tr>
    </table> </br>


    <table border="1">
        <tr>
            <td><label for="subject_id">Subjects</label></td>
            <td>
                <?php

                foreach ($subjects as $subject) { ?>

                    <input type="checkbox" name="subjects_id[]" id="subjects_id[]" value="<?php echo $subject['id']; ?>" <?php if (in_array($subject['id'], $result3_arr)) {
                                                                                                                                echo "checked";
                                                                                                                            } ?>><?php echo $subject['subject_name']; ?></br>
                <?php } ?>

            </td>
        </tr>
    </table><br>

    <a href="?section=grades&page=index"> <button type="button"> Back </button> </a>
    <input type="submit" value="Save">


</form>