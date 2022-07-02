<?php
$name = $_POST['name'];

require '../../connect.php';
$sql = "insert into product_group(name)
values('$name')";
mysqli_query($connect, $sql);
header('location:form_insert.php');
