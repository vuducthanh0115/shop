<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/form_insert.css">
    <title>Thêm sản phẩm</title>
</head>

<body>

    <form action="process_insert.php" method="post" enctype="multipart/form-data">
        <div class="container">
            <h1>Thêm sản phẩm</h1>
            <p>Xin hãy nhập thông tin bên dưới</p>
            <hr>
            <label for="name"><b>Tên sản phẩm</b></label>
            <input type="text" placeholder="Ví dụ : Laptop Asus..." name="name" id="name">
            <i id="error_name"></i>
            <br>
            <br>
            <label for="price"><b>Giá</b></label>
            <input type="text" placeholder="Ví dụ : 900.000đ..." name="price" id="name">
            <i id="error_price"></i>
            <br>
            <br>
            <label for="manufacturers"><b>Nhà sản xuất</b></label>
            <!-- <input type="text" placeholder="Nhập Số điện thoại" name="phone_number" id="phone_number">
            <i id="error_phone_number"></i> -->
            <?php
            require '../../connect.php';
            $sql = "select * from manufacturers";
            $result = mysqli_query($connect, $sql);
            ?>
            <select name="manufacturer_id" id="manufacturers" style="width:150px ; height: 35px; border-radius: 10px;box-shadow: 4px 4px 10px rgb(0 0 0 / 20%);border: none; margin-left: 97px;">
                <?php foreach ($result as $each) : ?>
                    <option value="<?php echo $each['id']; ?>" style="text-align: center;">
                        <?php echo $each['name']; ?>
                    </option>
                <?php endforeach ?>
            </select>
            <br>
            <br>
            <label for="group"><b>Nhóm sản phẩm</b></label>
            <?php
            $sql = "select * from product_group";
            $result = mysqli_query($connect, $sql);
            ?>
            <select name="group_id" id="product_group" style="width:150px ; height: 35px; border-radius: 10px;box-shadow: 4px 4px 10px rgb(0 0 0 / 20%); border: none; margin-left: 73px;">
                <?php foreach ($result as $each) : ?>
                    <option value="<?php echo $each['id']; ?>" style="text-align: center;">
                        <?php echo $each['name']; ?>
                    </option>
                <?php endforeach ?>
            </select>
            <br>
            <br>
            <label for="image"><b>Ảnh</b></label>
            <input type="file" name="image" style="margin-left: 68px;">
            <i id="error_image"></i>
            <br>
            <br>
            <label for="description"><b>Mô tả sản phẩm</b></label>
            <br>
            <textarea placeholder="Xin mời bạn nhập ..." name="description" id="about"></textarea>
            <br>
            <div class="clearfix">
                <button type="submit" class="signupbtn" onclick="return check()">Thêm</button>
            </div>
        </div>
    </form>
</body>

</html>