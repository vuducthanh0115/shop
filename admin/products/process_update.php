<?php

$id = $_POST['id'];
$name = $_POST['name'];
$new_image = $_FILES['image'];
if ($new_image['size'] > 0) {
    $folder = './images/';
    $file_extention = explode('.', $new_image['name'])[1];
    $file_name = time() . '.' . $file_extention;
    $path_file = $folder . $file_name;
    move_uploaded_file($image['tmp_name'], $path_file);
} else {
    $file_name = $_POST['old_image'];
}
$price = $_POST['price'];
$description = $_POST['description'];
$manufacturer_id = $_POST['manufacturer_id'];
$group_id = $_POST['group_id'];

require '../../connect.php';
$sql = "update products
set
name = '$name',
image = '$file_name',
price = '$price',
description = '$description',
manufacturer_id = '$manufacturer_id',
group_id = '$group_id'
where id = '$id'";
mysqli_query($connect, $sql);
