<?php
include 'connect.php';
if (isset($_POST['submit'])) {
    $cateogry = $_POST['cateogry'];
    $number_of_hours = $_POST['numberOfHours'];
    $start_date = date('Y-m-d', strtotime($_POST['start_date']));
    $end_date = date('Y-m-d', strtotime($_POST['end_date']));
    $institution = $_POST['institution'];
    $notes = $_POST['notes'];
    $sql = "INSERT INTO experience (category, num_of_hours, start_date, end_date , institution , notes)
    VALUES ('$cateogry','$number_of_hours','$start_date','$end_date','$institution','$notes')";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die(mysqli_error($conn));
    }
}
?>


<!doctype html>
<html>

<head>
    <title>Add Experience</title>
    <meta charset="UTF_8">
    <meta name="author" content="Dina Almasri">
    <meta name="keyword" content=" add experience ">
    <meta name="description" content="add experience">
    <meta name="viewPoint" content="width= device_width , initial_scale = 1.0">
    <link rel="stylesheet" href="MyStyle.css">
</head>

<body>
    <div class="outerDiv">
        <div class="top">
            <a href="Home.php" target="_self">Personal Information</a>
            <a href="ViewCourses.php" target="_self">Course Information</a>
            <a href="ViewExperience.php" target="_self">Experience Information</a>
            <a href="AddCourse.php" target="_self">Add Course</a>
            <a href="AddExperience.php" target="_self" class="active">Add Experience</a>
        </div>
        <img src="images/Alazher_University_Logo.png" alt="Alazhar_University_Logo" width="88.5px" height="60 px" align="right">
        <table cellspacing="0px" cellpadding="0px" border="0px" class="table_form2">
            <form method="post">
                <tr>
                    <td style="padding-left:70px;"><label for="9">Experience category:</label></td>
                    <td><input list="experience" name="cateogry" required class="Experience" id="9">
                    </td>
                </tr>
                <tr>
                    <td style="padding-left: 70px;"><label for="10">Number of Hours</label></td>
                    <td><input type="number" name="numberOfHours" required class="numberOfHours" id="10"></td>
                </tr>
                <tr>
                    <td style="padding-left: 70px;"><label for="11">Start Date:</label></td>
                    <td><input type="month" name="start_date" required class="S" id="11"></td>
                </tr>
                <tr>
                    <td style="padding-left: 70px;"><label for="12">End Date:</label></td>
                    <td><input type="month" name="end_date" required class="E" id="12"></td>
                </tr>
                <tr>
                    <td style="padding-left: 70px;"><label for="13">Institution:</label></td>
                    <td><input type="text" name="institution" required class="In" id="13"></td>
                </tr>
                <tr>
                    <td style="padding-left: 70px;"><label for="14">Notes:</label></td>
                </tr>
                <tr>
                    <td></td>
                    <td><textarea class="N" name="notes" cols="50" rows="5" id="14"></textarea></td>
                </tr>

                <tr>
                    <td><button type="submit" name="submit" class="save2">Save</button></td>
                    <td><button type="reset" name="reset" class="reset2">Reset</button></td>
                </tr>

            </form>
        </table>


        <img src="images/Screenshot 2021-11-29 200549.png" alt="Picture" width="400px" height="500px" align="right" class="Last">
    </div>
</body>

</html>