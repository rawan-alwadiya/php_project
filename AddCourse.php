<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $name = $_POST['course_name'];
    $number_of_hours = $_POST['number_of_hours'];
    $start_date = date('Y-m-d', strtotime($_POST['start_date']));
    $end_date = date('Y-m-d', strtotime($_POST['end_date']));
    $file = $_FILES['file']['name'];
    $institution = $_POST['institution'];
    $notes = $_POST['notes'];
    $sql = "INSERT INTO course (name, num_of_hours, start_date, end_date ,file, institution , notes)
    VALUES ('$name','$number_of_hours','$start_date','$end_date','$file','$institution','$notes')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        move_uploaded_file($_FILES['file']['tmp_name'],  "$file");
    } else {
        die(mysqli_error($conn));
    }
    header("location:ViewCourses.php");
}
?>


<!doctype html>
<html>

<head>
    <title>Add course</title>
    <meta charset="UTF_8">
    <meta name="author" content="Dina Almasri">
    <meta name="keyword" content=" add course ">
    <meta name="description" content="add course">
    <meta name="viewPoint" content="width= device_width , initial_scale = 1.0">
    <link rel="stylesheet" href="MyStyle.css">
</head>

<body>
    <div class="outerDiv">
        <div class="top">
            <a href="Home.php" target="_self">Personal Information</a>
            <a href="ViewCourses.php" target="_self">Course Information</a>
            <a href="ViewExperience.php" target="_self">Experience Information</a>
            <a href="AddCourse.php" target="_self" class="active">Add Course</a>
            <a href="AddExperience.php" target="_self">Add Experience</a>
        </div>
        <img src="images/Alazher_University_Logo.png" alt="Alazhar_University_Logo" width="88.5px" height="60 px" align="right">
        <table cellspacing="0px" cellpadding="0px" class="table_form">
            <form method="post" enctype="multipart/form-data">
                <tr>
                    <td style="padding-left: 70px;"> <label for="1">Course Name:</label></td>
                    <td> <input type="text" name="course_name" required class="c_name" id="1"></td>
                </tr>
                <tr>
                    <td style="padding-left: 70px;"> <label for="2">Number of hours:</label></td>
                    <td> <input type="number" name="number_of_hours" required min="10" max="50" step="5" class="number_of_hours" id="2"></td>
                </tr>
                <tr>
                    <td style="padding-left: 70px;"><label for="3">Start Date:</label></td>
                    <td><input type="date" name="start_date" required class="start" id="3"></td>
                </tr>
                <tr>
                    <td style="padding-left: 70px;"> <label for="4">End Date:</label></td>
                    <td><input type="date" name="end_date" required class="end" id="4"></td>
                </tr>
                <tr>
                    <td style="padding-left: 70px;"><label for="5">Institution:</label></td>
                    <td><input type="text" name="institution" required class="C_institution" id="5"></td>
                </tr>
                <tr>
                    <td style="padding-left: 70px;"> <label>Attachment:</label></td>
                    <td><input id="f" type="radio" name="attachment" checked class="f">
                        <label for="f">File</label>
                        <input id="u" type="radio" name="attachment" class="u">
                        <label for="u">URL</label>
                    </td>
                </tr>
                <tr>
                    <td style="padding-left: 70px;"><label for="6">URL:</label></td>
                    <td><input type="url" name="url" class="url" id="6"></td>
                </tr>
                <tr>
                    <td style="padding-left: 70px;"><label for="7">File:</label></td>
                    <td><input type="file" name="file" class="file" id="7"></td>
                </tr>
                <tr>
                    <td style="padding-left: 70px;"><label for="8">Notes:</label></td>
                </tr>
                <tr>
                    <td></td>
                    <td><textarea class="C_notes" cols="30" rows="5" name="notes" id="8"></textarea></td>
                </tr>
                <tr>
                    <td><button type="submit" name="submit" class="save">Save</button></td>
                    <td> <button type="reset" name="reset" class="reset">Reset</button></td>

                </tr>

            </form>
        </table>
        <img class="AddCourseImg" src="images/Screenshot 2021-11-29 200432.png" alt="photo" width="500px" height="620px" align="right">
    </div>
</body>

</html>