<?php
require '../../connect.php';
$sql = "select * from configuration";
$result = mysqli_query($connect, $sql);
$num_row = mysqli_num_rows($result);
$product_id = $_GET['product_id'];
// $value = $_POST['name1'];
// die($value);
foreach ($result as $each) {
    $cofiguration_id = $each['id'];
    $tmp = "name" . "$cofiguration_id";
    $value = $_POST["$tmp"];
    $sql = "insert into product_configuration(configuration_id, product_id, value)
        values('$cofiguration_id' ,'$product_id', '$value')";
    $result = mysqli_query($connect, $sql);
}
//die($sql);
