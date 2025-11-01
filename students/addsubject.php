<?php
$id = $_GET['id'];
require_once("../config.php");

$query = "SELECT * FROM students WHERE id = '$id' ;";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);
?>
<DOCTYPE html>
    <html>

    <head>
        <title><?php echo $row['student_name'] ?>'s details</title>
        <link rel="stylesheet" href="../style.css">
    </head>

    <body>

        <form action="index.php" method="POST">
            <table border="1" cellpadding="10" cellspacing="0">
                <tr>
                    <th colspan="2"> <?php echo $row['student_name'] ?>'s details </th>
                </tr>
                <tr>
                    <td><label for="father_name">Father Name</label></td>
                    <td><input type="text" name="father_name" id="father_name" value="<?php echo $row['father_name'] ?>">
                        <input type="hidden" name="id" id="id" value="<?php echo $row['id'] ?>">
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
                    <td><label for="grade_id">Grade ID</label></td>
                    <td><input type="Number" name="grade_id" id="grade_id" value="<?php echo $row['grade_id'] ?>"></td>
                </tr>
                <tr>
                    <td><label for="grade_id">Subjects</label></td>
                    <td><input type="checkbox" name="subject1" id="subject1" value="Maths">Maths</br>
                    <input type="checkbox" name="subject1" id="subject1" value="Science">Science</br>
                    <input type="checkbox" name="subject1" id="subject1" value="ICT">ICT</br>
                    <input type="checkbox" name="subject1" id="subject1" value="History">History

                    </td>
                </tr>

            </table> </br>
            <a href="index.php"> <button type="button"> Back </button> </a>


        </form>
    </body>

    </html>