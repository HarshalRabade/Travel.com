
<?php
if(isset ($_POST['name'])){
$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server,$username,$password);
 
if (!$con) {
    die("Connection error due to". mysqli_connect_error());
}
// echo "Success connecting to db";
$name  =$_POST['name'];
$gender=$_POST['gender'];
$age   =$_POST['age'];
$email =$_POST['email'];
$phone =$_POST['phone'];
$desc =$_POST['desc'];
// $sql="INSERT INTO 'trip'.'trrip' ('name', 'age', 'gender', 'email', 'phone', 'other', 'dt') VALUES ('$name', '$age',
// '$gender', '$email', '$phone', '$desc', current_timestamp());";

$sql ="INSERT INTO `trip`.`trrip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`)
VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc ', current_timestamp());
";
//  echo $sql;
if($con->query($sql) == true){
echo "";
}else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h3>Welcome to IIT Kharagpur US Trip form</h3>
        <p>Enter your details and submit this form to confirm your participation int he trip </p>

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10"
                placeholder="Enter any other information here"></textarea>
            <button class="btn">Submit</button>

        </form>
    </div>
    <script src="index.js"></script>
    <!-- INSERT INTO `trrip` (`sno`, `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('2', 'ram', '34',
    'male', 'ram83636@gmail.com', '7658368976', 'dfghjkl', '2023-06-17 18:34:27.000000'); -->
</body>

</html>