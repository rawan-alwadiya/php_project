<?php
include 'connect.php';
$name = '';
$num_of_hours = 0;
$start_date = '';
$end_date = '';
$file = '';
$institution = '';
$notes = '';
$i = 0;

?>


<!doctype html>
<html>

<head>
    <title>Course Information</title>
    <meta charset="UTF_8">
    <meta http-equiv="refresh" content="">
    <meta name="author" content="Dina Almasri">
    <meta name="keyword" content="Course information">
    <meta name="description" content="Course information">
    <meta name="viewPoint" content="width= device_width , initial_scale = 1.0">
    <link rel="stylesheet" href="MyStyle.css">


</head>

<body style="overflow: scroll;">
    <div class="outerDiv">
        <div class="top">
            <a href="Home.php" target="_self">Personal Information</a>
            <a href="ViewCourses.php" target="_self" class="active">Course Information</a>
            <a href="ViewExperience.php" target="_self">Experience Information</a>
            <a href="AddCourse.php">Add Course</a>
            <a href="AddExperience.php">Add Experience</a>
        </div>
        <img src="images/Alazher_University_Logo.png" alt="Alazhar_University_Logo" width="87.8px" height="60 px" align="right">

        <h1>All Courses Information</h1>
        <table class="CourseTable" cellspacing="0 px">
            <thead>
                <tr>
                    <th rowspan="2" width="50px" style="border-top-left-radius: 10px; border-bottom-color: gray;">#
                    </th>
                    <th rowspan="2" width="250px" style="border-bottom-color: gray;">Course Name</th>
                    <th rowspan="2" width="160px" style="border-bottom-color: gray;">Total Hours</th>
                    <th colspan="2">Date</th>
                    <th rowspan="2" width="250px" style="border-bottom-color: gray;">Institution</th>
                    <th rowspan="2" width="180px" style="border-bottom-color: gray;">Attachment</th>
                    <th rowspan="2" width="250px" style="border-top-right-radius: 10px ; border-bottom-color: gray;">
                        Notes</th>
                </tr>
                <tr>
                    <th width="125px" style="border-bottom-color: gray;">From</th>
                    <th width="125px" style="border-bottom-color: gray;"> To</th>
                </tr>
            </thead>
            <tbody>
            

<?php
$color = "";
$i = 0;
$sql = "SELECT id, name, num_of_hours, start_date, end_date, institution, notes FROM course";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row['name'];
        $num_of_hours = $row['num_of_hours'];
        $start_date = $row['start_date'];
        $end_date = $row['end_date'];
        $institution = $row['institution'];
        $notes = $row['notes'];
        $color = ($i % 2 == 0) ? '#ffffff' : 'E5E5E5';
        echo " <tr bgcolor=\"$color\">";
        echo "<td align=center>$row[id]</td>";
        echo "<td>$name</td>";
        echo "<td align=center>$num_of_hours</td>";
        echo "<td align=center>$start_date</td>";
        echo "<td align=center>$end_date</td>";
        echo "<td align=center>$institution</td>";
        echo "<td align=center><a href=Course_1View.php?id=$row[id] target=_blank>View</a></td>";
        echo "<td>$notes</td>";
        echo "</tr>";
        $i++;
    }
}
?>


            </tbody>
        </table>
    </div>

</body>

</html>