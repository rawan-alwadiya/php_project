<?php
include 'connect.php';
$name = '';
$num_of_hours = 0;
$start_date = '';
$end_date = '';
$file = '';
$institution = '';
$notes = '';
$id = $_GET['id'];
?>


<!doctype html>
<html>

<head>
    <title>Course_1 View</title>
    <meta charset="UTF_8">
    <meta http-equiv="refresh" content="">
    <meta name="author" content="Dina Almasri">
    <meta name="keyword" content="Course 1 view">
    <meta name="description" content="Course 1 view">
    <meta name="viewPoint" content="width= device_width , initial_scale = 1.0">
    <link rel="stylesheet" href="MyStyle.css">
</head>

<body style="overflow: scroll;">
    <div class="outerDiv">
        <div class="top">
            <a href="Home.php" target="_self">Personal Information</a>
            <a href="ViewCourses.php" target="_self">Course Information</a>
            <a href="ViewExperience.php" target="_self">Experience Information</a>
            <a href="AddCourse.php" target="_self">Add Course</a>
            <a href="AddExperience.php" target="_self">Add Experience</a>
        </div>
        <img src="images/Alazher_University_Logo.png" alt="Alazhar_University_Logo" width="87.8px" height="60 px" align="right">


        <?php
        $sql = "SELECT  name , num_of_hours , start_date , end_date , file, institution  FROM course
             where id ='$id'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $name = $row['name'];
                $num_of_hours = $row['num_of_hours'];
                $start_date = $row['start_date'];
                $end_date = $row['end_date'];
                $institution = $row['institution'];
                echo "<div class=divView>";
                echo " <h1 class=courseView>Course $name</h1>";
                echo "  <p class=view>
                          from $start_date to $end_date, totally $num_of_hours training Hours
                           <br>
                          Institution was $institution
                          </p>";
                echo "</div>";
                echo "<figure>
                      <img src='" . $row['file'] . "' alt=My cirteficate width=100%>
                      <figcaption>Cirteficate File</figcaption>
                      </figure>";
            }
        }


        ?>
       
    </div>
</body>

</html>