<?php
include 'connect.php';


$sql = "SELECT name, gender, birth_date, nationality, place_of_birth, job_title, year_of_experience, image FROM user";


$result = mysqli_query($conn, $sql);
$name = '';
$gender = '';
$birth_date = '';
$nationality = '';
$place_of_birth = '';
$job_title = '';
$year_of_experience = 0;
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row["name"];
        $gender = $row["gender"];
        $birth_date = $row["birth_date"];
        $nationality = $row["nationality"];
        $place_of_birth = $row["place_of_birth"];
        $job_title = $row["job_title"];
        $year_of_experience = $row["year_of_experience"];
        $image =  $row['image'];
    }
}

?>



<!doctype html>
<html>

<head>
    <title>Personal Information</title>
    <meta charset="UTF_8">
    <meta http-equiv="refresh" content="">
    <meta name="author" content="Dina Almasri">
    <meta name="keyword" content="Personal information">
    <meta name="description" content="personal information">
    <meta name="viewPoint" content="width= device_width , initial_scale = 1.0">
    <link rel="stylesheet" href="MyStyle.css"></a>

    <style>
        .edit{
            color: white;
            margin-bottom: 10px;
            margin-left: 50px;
            margin-top: 15px;
            width: 250px;
            height: 40px;
            border-radius: 5px;
            font-weight: 600;
            background-color: #198754;
            border:none;
            color: #FFFFFF;
            background-color: #dc3545;
            border-color: #dc3545;
            color: #FFFFFF;
            display: block;
        }
        .a_style {
            font-weight: bold;
            text-decoration: none;
            color: white;
        }
    </style>
</head>

<body>
    <div class="outerDiv">
        <div class="top">
            <a href="Home.php" target="_self" class="active">Personal Information</a>
            <a href="ViewCourses.php" target="_self">Course Information</a>
            <a href="ViewExperience.php" target="_self">Experience Information</a>
            <a href="AddCourse.php" target="_self">Add Course</a>
            <a href="AddExperience.php" target="_self">Add Experience</a>
        </div>
        <img src="images/Alazher_University_Logo.png" alt="Alazhar_University_Logo" width="88.5px" height="60 px" align="right">


        <h1> Personal Information</h1>
        <table class="home_table">
            <tr>
                <td>Full Name:</td>
                <td><strong><?php echo $name; ?></strong></td>
            </tr>
            <tr>
                <td> Gender:</td>
                <td><strong><?php echo $gender; ?></strong></td>
            </tr>
            <tr>
                <td>Birth Date:</td>
                <td><strong><?php echo $birth_date; ?></strong></td>
            </tr>
            <tr>
                <td>Nationality:</td>
                <td><strong><?php echo $nationality; ?></strong></td>
            </tr>
            <tr>
                <td>Place of birth:</td>
                <td><strong><?php echo $place_of_birth; ?></strong></td>
            </tr>
            <tr>
                <td>Job title:</td>
                <td><strong> <?php echo $job_title; ?></strong></td>
            </tr>
            <tr>
                <td>Years of experience:</td>
                <td><strong><?php echo $year_of_experience . " year/s"; ?> </strong></td>
            </tr>
            
        </table>

        <div><button class="edit"><a class="a_style" href="./sign_up.php">Edit Personal Information</button></div>

        <?php echo "
            <img src='" . $image . "' alt=My picture=100% width=400px height=410px class=pic> "; ?>

    </div>

</body>


</html>