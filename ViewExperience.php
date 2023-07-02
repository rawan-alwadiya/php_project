<?php
include 'connect.php';
$category = '';
$num_of_hours = 0;
$start_date = '';
$end_date = '';
$institution = '';
$notes = '';

?>


<!doctype html>
<html>

<head>
    <title>Course Information</title>
    <meta charset="UTF_8">
    <meta http-equiv="refresh" content="">
    <meta name="author" content="Dina Almasri">
    <meta name="keyword" content="Experience information">
    <meta name="description" content="Experience information">
    <meta name="viewPoint" content="width= device_width , initial_scale = 1.0">
    <link rel="stylesheet" href="MyStyle.css">
</head>

<body style="overflow: scroll;">
    <div class="outerDiv">
        <div class="top">
            <a href="Home.php" target="_self">Personal Information</a>
            <a href="ViewCourses.php" target="_self">Course Information</a>
            <a href="ViewExperience.php" target="_self" class="active">Experience Information</a>
            <a href="AddCourse.php" target="_self">Add Course</a>
            <a href="AddExperience.php" target="_self">Add Experience</a>
        </div>
        <img src="images/Alazher_University_Logo.png" alt="Alazhar_University_Logo" width="87.8px" height="60 px" align="right">

        <h1>All Information Experience</h1>
        <?php
        $sql = "SELECT category , num_of_hours , start_date , end_date , institution , notes FROM experience";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $category = $row['category'];
                $num_of_hours = $row['num_of_hours'];
                $start_date = $row['start_date'];
                $end_date = $row['end_date'];
                $institution = $row['institution'];
                $notes = $row['notes'];
                echo " <h4>$category <sub>$institution / $num_of_hours hours</sub></h4>
                           <h5>from $start_date to end_date</h5>
                            <p>$notes</p>
                             <br>";
            }
        }


        ?>

    </div>
</body>

</html>