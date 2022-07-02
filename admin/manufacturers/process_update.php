<?php
$id = $_POST['id'];
// die($id);
$name = $_POST['name'];
$phone_number = $_POST['phone_number'];
$address = $_POST['address'];
$image = $_POST['image'];
$about = $_POST['about'];
require '../../connect.php';
$sql = "update manufacturers
set
name = '$name',
phone_number = '$phone_number',
address = '$address',
image = '$image',
about = '$about'
where id = '$id'";
mysqli_query($connect, $sql);
header('location:index.php');
