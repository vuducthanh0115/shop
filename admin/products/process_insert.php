<?php
$image = $_FILES['image'];
$name = $_POST['name'];
$manufacturer_id = $_POST['manufacturer_id'];
$group_id = $_POST['group_id'];
$description = $_POST['description'];
$price = $_POST['price'];
$folder = './images/';

$file_extention = explode('.', $image['name'])[1];
$file_name = time() . '.' . $file_extention;
$path_file = $folder . $file_name;
move_uploaded_file($image['tmp_name'], $path_file);

require '../../connect.php';
$sql = "insert into products(manufacturer_id, group_id, name, description, price, image )
values('$manufacturer_id', '$group_id', '$name', '$description', '$price', '$file_name')";
mysqli_query($connect, $sql);
header('location:insert_configuration.php');
