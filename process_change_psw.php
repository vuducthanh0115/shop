<?php
$token = $_POST['token'];
$psw = $_POST['psw'];
require 'connect.php';
$sql = "select customer_id from forgot_password
where token = '$token'";
$results = mysqli_query($connect, $sql);
$customer_id = mysqli_fetch_array($results)['customer_id'];
$number_rows = mysqli_num_rows($results);
if ($number_rows !== 1) {
    header('location:index.php');
    exit;
}
$sql = "update customers
set
password = '$psw'
where id = '$customer_id'";
mysqli_query($connect, $sql);

$sql = "delete from forgot_password
where token = '$token'";
mysqli_query($connect, $sql);
