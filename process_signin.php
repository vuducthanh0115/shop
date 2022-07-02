<?php
$email = $_POST['email'];
$psw = $_POST['psw'];
if (isset($_POST['remember'])) {
    $remember = true;
} else {
    $remember = false;
}
require 'connect.php';
$sql = "select * from customers
where email = '$email' and password = '$psw'";
$result = mysqli_query($connect, $sql);
$number_rows = mysqli_num_rows($result);
if ($number_rows == 1) {
    session_start();
    $each = mysqli_fetch_array($result);
    $id = $each['id'];
    $_SESSION['name'] = $each['name'];
    $_SESSION['id'] = $id;
    if ($remember) {
        $token = uniqid('user', true);
        $sql = "update customers
		set
		token = '$token'
		where 
		id = '$id'
		";
        mysqli_query($connect, $sql);
        setcookie('remember', $token, time() + 60 * 60 * 24 * 30);
    }
    header('location:index.php');
    exit;
} else {
    echo '<script>alert("Tài khoản hoặc mật khẩu không chính xác")</script>';
}
