<?php 
require 'db.php';

if(isset($_POST['register-submit'])){

    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $department = $_POST['department'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];

    $roll = (int) $roll;

    if(!$name || !$roll || !$department || !$phone || !$gender){
        header("Location: ./../index.php?error=emptyfield&name=".$name);
        exit;
    }


    $sql = "INSERT INTO students (name, roll, department, phone, gender) VALUES ('$name', $roll, '$department', '$phone', '$gender')";
    $query = mysqli_query($conn, $sql);

    if($query){
        header("Location: ./../index.php?success=Register Success!");

    }else {
        header("Location: ./../index.php?error=".mysqli_error($conn));
    }


}else {
    echo "Something went to wrong";
}