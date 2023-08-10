<?php

$server = 'localhost';
$username = 'root';
$password = '';
$database = 'jobs';

$conn = mysqli_connect($server, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
}
echo "";

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['phone_number'];
    $password = $_POST['password'];
    $sql = "INSERT INTO `users` (`Name`,`email`,`password`,`phone_number`) VALUES('$name','$email','$password','$number')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>Alert('User added Successflully')</script>";
    } else {
        echo "Error:Could not able to execute $sql." . mysqli_error($conn);
    }
}


session_start();
if (isset($_POST['Login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE `email`='$email' AND `password`='$password'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    if (mysqli_num_rows($result) == 1) {
        header("location: index.php");
    } else {
        $error = 'email_id or password incorrect';
    }
}


if(isset($_POST['submit'])){
    $cname = $_POST['cname'];
    $position =$_POST['position'];
    $Jdesc =$_POST['Jdesc'];
    $skills =$_POST['skills'];
    $CTC = $_POST['CTC'];
    $sql2 = "INSERT INTO `cjobs`(`cname`,`position`, `Jdesc`,`skills`,`CTC`) VALUES('$cname','$position','$Jdesc','$skills','$CTC') ";
    if(mysqli_query($conn,$sql2)){
        echo "New Job Posted";
    }
    else{
        echo "ERROR: Failed to post the job $sql2." .mysqli_error($conn);
    }
}

if(isset($_POST['apply'])){
    $name = $_POST['name'];
    $apply =$_POST['applying'];
    $qual =$_POST['qual'];
    $year =$_POST['year'];
    $sql3 = "INSERT INTO `candidates`(`name`,`apply`,`qual`,`year`) VALUES('$name','$apply','$qual','$year')";
    mysqli_query($conn,$sql3);
}

?>
