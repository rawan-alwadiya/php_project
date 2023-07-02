<?php
# test connection
$server = "localhost";
$username = "root";
$password = "";
$database = "myDB";

// $conn = mysqli_connect($server, $username, $password);

// if (!$conn) {
//     die("Faild To Connent " . mysqli_connect_error());
// }
# create a database
// $sql = "CREATE DATABASE myDB";
// if (mysqli_query($conn, $sql)) {
//     echo "Created successfully";
// } else {
//     echo "Error creating database" . mysqli_error($conn);
// }

# create user table
$conn = new mysqli($server, $username, $password, $database);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }


// $sql_user = "CREATE TABLE user (
//     id  int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
//     name VARCHAR(50),
//     gender VARCHAR(6),
//     birth_date DATE,
//     nationality VARCHAR(20),
//     place_of_birth VARCHAR(20),
//     job_title VARCHAR(30),
//     year_of_experience INT(2)
//     )
//     ";
// if (mysqli_query($conn, $sql_user)) {
//     echo " Table Created successfully";
// } else {
//     echo "Error creating user" . mysqli_error($conn);
// }
// $sql = "ALTER TABLE user ADD image VARCHAR(100) NOT NULL AFTER year_of_experience";
// $result = mysqli_query($conn, $sql);
// if ($result) {
//     echo "Altered successfully";
// } else {
//     echo "Error" . $sql . "<br>" . mysqli_error($conn);
// }

# insert into user
// $birth_date = date('Y-m-d', strtotime('17-4-2002'));
// $sql = " INSERT INTO user(name , gender , birth_date , nationality , place_of_birth, job_title, year_of_experience,image)
//  VALUES ('Dina Almasri','Female' , '$birth_date', 'Palestinian',
//  'Gaza', 'Software engineer', 2, 'Personal_Information_picture.png')";
// if (mysqli_query($conn, $sql)) {
//     echo "Inserted successfully";
// } else {
//     echo "Error" . $sql . "<br>" . mysqli_error($conn);
// }
# create experience table
// $sql = "CREATE TABLE experience(
//         id  int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
//         category VARCHAR(20),
//         num_of_hours INT(3),
//         start_date DATE,
//         end_date DATE,
//         institution VARCHAR(50),
//         notes VARCHAR(5000))
// ";
// if (mysqli_query($conn, $sql)) {
//     echo " Table Created successfully";
// } else {
//     echo "Error creating user" . mysqli_error($conn);
// }
# create course table
// $sql = "CREATE TABLE course(
//         id  int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
//         name VARCHAR(20),
//         num_of_hours INT(3),
//         start_date DATE,
//         end_date DATE,
//         file VARCHAR(100) ,
//         institution VARCHAR(50),
//         notes VARCHAR(5000))
// ";
// if (mysqli_query($conn, $sql)) {
//     echo " Table Created successfully";
// } else {
//     echo "Error creating user" . mysqli_error($conn);
// }

?>
