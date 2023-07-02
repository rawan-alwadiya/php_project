
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

.border {
    border: 2px solid #00BAFF;
}

.head{

    background-color: #00BAFF;
    padding-top: 20px;
    height: 40px;
    border: 1px solid #00BAFF;
    

}

.form_style{
            background-color: white;
            padding:20px;
            margin: auto;
            margin-bottom: 100px;
            border-radius: 5px;
            width: 60%;
        }
        .title{
            text-align: center;
            font-family: "Comic Sans MS";
            font-size: 20px;
            padding-bottom:40px;
            text-align: center;
            font-weight: bold;
            text-decoration: none;
            color: #000000;
        }
        .input_feild{
            display: block;
            width: 90%;
            height: 30%;
            border-radius: 2px;
            border: 1px solid black;
            margin-top: 10px;
            margin-bottom: 10px;
            margin-left: 5%;
            padding-top:10px;

        }
        input{
            font-weight: 700;
        }
        .submit_style{
            color: white;
            margin-top: 20px;
            margin-left: 10%;
            margin-bottom: 20px;
            width: 37.5%;
            height: 40px;
            border-radius: 5px;
            font-weight: 600;
            background-color: #198754;
            border:none;
            color: #FFFFFF;
            display: inline;
        }
        .home{
            color: white;
            margin-top: 20px;
            margin-left: 5%;
            margin-bottom: 20px;
            width: 37.5%;
            height: 40px;
            border-radius: 5px;
            font-weight: 600;
            border:none;
            display: inline;
            background-color: #dc3545;
            color: #FFFFFF;
        }
        a {
            font-weight: bold;
            text-decoration: none;
            color: white;
        }
        
        label{
            color: black;
            margin-top: 20px;
            margin-bottom: 10px;
            margin-left: 5%;
        }
        .gender-style{
            margin-bottom: 10px;
            padding-top: 10px;
        }
    </style>
</head>
<body>
    
    <div class="form_style">
    <div class="head">
        <form class="border" action="" method="post">
            <div class="title">Sign up</div>

        <label for="name">Full Name:</label>
       <input class="input_feild" type="text" name="name" required>


       <label for="dob">Birth Date</label>
       <input class="input_feild" type="date" name="dob" required >

       <label for="email">Nationality</label>
       <input class="input_feild" type="text" name="nationality" required>

       <label for="department">Place Of Birth</label>
       <input class="input_feild" type="text" name="birth_place" required>

       <label for="salary">Job Title</label>
       <input class="input_feild" type="text" name="job_title" required>

       <label for="salary">Years Of Experience</label>
       <input class="input_feild" type="number" name="exp_years" required>

       <div class="gender-style"><label for="gender">Gender</label></div>

       <label for="male">Male</label>
        <input type="radio" name="gender" id="male" value="male" required>

        <label for="female">Female</label>
        <input  type="radio" name="gender" value="female" id="female" required>

        <div>
        <button class="submit_style" type="submit" name="save">Save</button>
        <button class="home"><a href="./Home.php">Home</button>
        </div>


        </form>
    </div>
    </div>

    <?php
    include 'connect.php';

    $dob = $_POST['dob'];
    $birth_date = date('Y-m-d', strtotime($dob));
    $stmt = $conn->prepare("UPDATE user SET name = ?, gender = ?, birth_date = ?, nationality = ?, place_of_birth = ?, job_title = ?, year_of_experience = ?");
    $stmt->bind_param("sssssss", $_POST["name"], $_POST["gender"], $birth_date, $_POST["nationality"], $_POST["birth_place"], $_POST["job_title"], $_POST["exp_years"]);

    $stmt->execute();

    ?>
   




</body>
</html> 