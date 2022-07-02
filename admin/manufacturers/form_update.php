<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/form_insert.css">
    <title>Chỉnh sửa nhà sản xuất</title>
</head>

<body>
    <?php
    $id = $_GET['id'];
    require '../../connect.php';
    $sql = "select * from manufacturers
    where id = '$id'";
    $result = mysqli_query($connect, $sql);
    $each = mysqli_fetch_array($result);
    ?>
    <form action="process_update.php" method="post">
        <input type="hidden" value="<?php echo $id; ?>" name="id">
        <div class="container">
            <h1>Chỉnh sửa nhà sản xuất</h1>
            <p>Xin hãy nhập thông tin bên dưới</p>
            <hr>
            <label for="name"><b>Tên nhà sản xuất</b></label>
            <input type="text" value="<?php echo $each['name']; ?>" name="name" id="name">
            <i id="error_name"></i>
            <br>
            <br>
            <label for="phone_number"><b>Số điện thoại</b></label>
            <input type="text" value="<?php echo $each['phone_number']; ?>" name="phone_number" id="phone_number">
            <i id="error_phone_number"></i>
            <br>
            <br>
            <label for="address"><b>Địa chỉ</b></label>
            <input type="text" placeholder="Nhập địa chỉ" value="<?php echo $each['address']; ?>" name="address" id="address">
            <i id="error_address"></i>
            <br>
            <br>
            <label for="image"><b>Ảnh</b></label>
            <input type="text" placeholder="Nhập link ảnh" value="<?php echo $each['image']; ?>" name="image" id="image">
            <i id="error_image"></i>
            <br>
            <br>
            <label for=" about"><b>Giới thiệu về công ty</b></label>
            <br>
            <textarea placeholder="Xin mời bạn nhập ..." name="about" id="about"><?php echo $each['about']; ?></textarea>
            <br>
            <div class="clearfix">
                <button type="submit" class="signupbtn" onclick="return check()">Cập nhật</button>
            </div>
        </div>
    </form>
</body>

</html>