<?php
$name = $_POST['name'];
$email = $_POST['email'];
$psw = $_POST['psw'];
$phone_number = $_POST['phone_number'];
$address = $_POST['address'];
$date = $_POST['date'];
$gender = $_POST['gender'];
//die($gender);

require '../connect.php';
$sql = "select * from admin
where email = '$email'";
$result = mysqli_query($connect, $sql);
$number_rows = mysqli_num_rows($result);
if ($number_rows == 1) {
    header('location:signup.php?error=Email đã tồn tại');
    exit;
}

$sql = "insert into admin(name,gender, email, password, date_of_birth, address, phone_number)
values('$name',  '$gender', '$email', '$psw', '$date', '$address', '$phone_number')";
//die($sql);
mysqli_query($connect, $sql);

// $sql = "select id from customers
// where email = '$email'";
// $result = mysqli_query($connect, $sql);
// $id = mysqli_fetch_array($result)['id'];
// session_start();
// $_SESSION['name'] = $name;
// $_SESSION['id'] = $id;
