<?php
$insert = false;
if(isset($_POST['name'])){


$server = "localhost";
$username = "root";
$password ="";
$database = "aiub_ride";

$con = mysqli_connect($server,$username,$password,$database);

if(!$con){
    die("connection to this database failed due to  " . 
    mysqli_connect_error());
}
//echo "Success connecting to the db";
$name = $_POST['name'];
$gender = $_POST['gender'];
$age = $_POST['age'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$other = $_POST['other'];
$sql = "INSERT INTO `aiub_ride`.`ride` (`name`, `age`, `gender`, `email`, `phone`, `other`, `date`) 
        VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp())";

//echo $sql;

if($con->query($sql)===true){
    //echo "Succsessfully inserted";
    $insert = true;
}
else{
    echo "Error: $sql <br> $con->error";
}
$con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wlcome to Travel Ride</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Style+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="pic" src="pic.jpg" alt="AIUB"
    <div class = "container">
        <h1>Welcome to AIUB Ride form</h1>
        <p>Enter Your details to confirm your ride</p>
    <?php
    if($insert === true )
    {
      echo "<p class='submsg'>Thank you for submitting the form to confirm your ride</p>";
    }
    //else {
     //   echo "<p class='submsg'>There is some problems!!</p>";
   // }
    
    ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your
            name">
            <input type="text" name="age" id="age" placeholder="Enter your
            age">
            <input type="text" name="gender" id="gender" placeholder="Enter your
            gender">
            <input type="email" name="email" id="email" placeholder="Enter Your Email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your
            phone">
            <textarea name="other" id="other" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button>
        

        </form>

    </div>
    <script src="index.js"></script>
   
</body>
</body>
</html>