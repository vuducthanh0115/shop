<?php
function current_url()
{
    $url      = "http://" . $_SERVER['HTTP_HOST'];
    $validURL = str_replace("&", "&amp;", $url);
    return $validURL;
}
$mail = $_POST['email'];
require 'connect.php';
$sql = "select * from customers
where email = '$mail'";
$results = mysqli_query($connect, $sql);
$number_rows = mysqli_num_rows($results);
if ($number_rows === 1) {
    $each = mysqli_fetch_array($results);
    $id = $each['id'];
    $name = $each['name'];
    $sql = "delete * from forgot_password
    where customer_id = '$id'";
    mysqli_query($connect, $sql);
    $token = uniqid();
    $sql = "insert into forgot_password (customer_id, token)
    values('$id','$token')";
    mysqli_query($connect, $sql);
    $link = current_url() . "/change_new_password.php?token=$token";
    require 'mail.php';
    $title = "Thay đổi mật khẩu";
    $content = "Bấm vào đây để thay đổi mật khẩu. <a href='$link'>here</a>";
    sendmail($mail, $name, $title, $content);
}
