<?php
require '../../connect.php';
$name = $_POST['name'];
$address = $_POST['address'];
$phone_number = $_POST['phone_number'];
$image = $_POST['image'];
$about = $_POST['about'];

$sql = "insert into manufacturers(name, address, phone_number, image, about)
values('$name', '$address', '$phone_number', '$image', '$about')";
//die($sql);
mysqli_query($connect, $sql);
header('location:form_insert.php');
