<?php
require '../../connect.php';
$sql = "select * from admin
where level = '0'";
$results = mysqli_query($connect, $sql);
?>

<table border="1" width="100%" style="background-color: white;">
    <h1 style="margin-top: 40px; text-align: center; margin-bottom: 20px;">
        THÔNG TIN NHÂN VIÊN
    </h1>
    <tr>
        <th>Họ và tên</th>
        <th>Giới tính</th>
        <th>Ngày sinh</th>
        <th>Số điện thoại</th>
        <th>Địa chỉ</th>
        <th>Email</th>
        <th>Mật khẩu</th>
    </tr>
    <?php foreach ($results as $each) : ?>
        <tr style="text-align: center;">
            <td> <?php echo $each['name']; ?> </td>
            <td>
                <?php
                $gender = 'Nữ';
                if ($each['gender'] == 1) {
                    $gender = 'Nam';
                }
                echo $gender;
                ?>
            </td>
            <td><?php echo $each['date_of_birth']; ?></td>
            <td><?php echo $each['phone_number']; ?></td>
            <td><?php echo $each['address']; ?></td>
            <td><?php echo $each['email']; ?></td>
            <td><?php echo $each['password']; ?></td>
        </tr>
    <?php endforeach ?>
</table>