<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/form_insert.css">
    <title>Thêm thông số</title>
</head>

<body>
    <?php
    require '../../connect.php';
    $sql = "select * from products
    group by id desc limit 1";
    $result = mysqli_query($connect, $sql);
    $each = mysqli_fetch_array($result);
    $product_id = $each['id'];
    ?>
    <form action="process_insert_configuratin.php?product_id=<?php echo $product_id; ?>" method="post">
        <div class="container">

            <h1><?php echo $each['name']; ?></h1>
            <p>Xin hãy nhập thông tin bên dưới</p>
            <hr>
            <?php
            $sql = "select * from configuration";
            $result = mysqli_query($connect, $sql);
            ?>
            <?php foreach ($result as $each) : ?>
                <label for="name"><b><?php echo $each['name']; ?></b></label>
                <input type="text" name="name<?php echo $each['id']; ?>" id="name">
                <i id="error_name"></i>
            <?php endforeach ?>
            <br>
            <br>
            <div class="clearfix">
                <button type="submit" class="signupbtn" onclick="return check()">Thêm</button>
            </div>
        </div>
    </form>
</body>

</html>