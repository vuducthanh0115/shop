<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/form_insert.css">
    <title>Sửa sản phẩm</title>
</head>

<body>
    <?php
    require '../../connect.php';
    $id = $_GET['id'];
    $sql = "select * from products
    where id = '$id'";
    $result_product = mysqli_query($connect, $sql);
    $each = mysqli_fetch_array($result_product);
    $group_id = $each['group_id'];
    ?>
    <form action="process_update.php" method="post" enctype="multipart/form-data">
        <input type="hidden" value="<?php echo $each['id']; ?>" name="id">
        <div class="container">
            <h1>Thêm sản phẩm</h1>
            <p>Xin hãy nhập thông tin bên dưới</p>
            <hr>
            <label for="name"><b>Tên sản phẩm</b></label>
            <input type="text" name="name" id="name" value="<?php echo $each['name']; ?>">
            <i id="error_name"></i>
            <br>
            <br>
            <label for="price"><b>Giá</b></label>
            <input type="text" name="price" id="name" value="<?php echo $each['price']; ?>">
            <i id="error_price"></i>
            <br>
            <br>
            <label for="manufacturers"><b>Nhà sản xuất</b></label>
            <!-- <input type="text" placeholder="Nhập Số điện thoại" name="phone_number" id="phone_number">
            <i id="error_phone_number"></i> -->
            <?php
            $sql = "select * from manufacturers";
            $result_manufacturer = mysqli_query($connect, $sql);
            ?>
            <select name="manufacturer_id" id="manufacturers" style="width:150px ; height: 35px; border-radius: 10px;box-shadow: 4px 4px 10px rgb(0 0 0 / 20%);border: none; margin-left: 97px;">
                <?php foreach ($result_manufacturer as $each_manufacturer) : ?>
                    <option value="<?php echo $each_manufacturer['id']; ?>" style="text-align: center;" <?php if ($each['manufacturer_id'] == $each_manufacturer['id']) { ?> selected <?php } ?>>
                        <?php echo $each_manufacturer['name']; ?>
                    </option>
                <?php endforeach ?>
            </select>
            <br>
            <br>
            <label for="group"><b>Nhóm sản phẩm</b></label>
            <?php
            $sql = "select * from product_group";
            $result_group = mysqli_query($connect, $sql);
            ?>
            <select name="group_id" id="product_group" style="width:150px ; height: 35px; border-radius: 10px;box-shadow: 4px 4px 10px rgb(0 0 0 / 20%); border: none; margin-left: 73px;">
                <?php foreach ($result_group as $each_group) : ?>
                    <option value="<?php echo $each_group['id']; ?>" style="text-align: center;" <?php if ($group_id == $each_group['id']) { ?> selected <?php } ?>>
                        <?php echo $each_group['name']; ?>
                    </option>
                <?php endforeach ?>
            </select>
            <br>
            <br>
            <label for="image"><b>Ảnh mới</b></label>
            <input type="file" name="image" style="margin-left: 68px;">
            <i id="error_image"></i>
            <br>
            <br>
            <label for="image"><b>Hoặc giữ ảnh cũ</b></label>
            <img src="./images/<?php echo $each['image']; ?>" alt="" height="150">
            <input type="hidden" name="old_image" value="<?php echo $each['image'] ?>">
            <br>
            <br>
            <label for="description"><b>Mô tả sản phẩm</b></label>
            <br>
            <textarea name="description" id="about"><?php echo $each['description']; ?></textarea>
            <br>
            <div class="clearfix">
                <button type="submit" class="signupbtn" onclick="return check()">Sửa</button>
            </div>
        </div>
    </form>
</body>

</html>