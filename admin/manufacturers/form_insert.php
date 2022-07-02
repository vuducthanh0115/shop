<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/form_insert.css">
    <title>Thêm nhà sản xuất</title>
</head>

<body>
    <form action="process_insert.php" method="post">
        <div class="container">
            <h1>Thêm nhà sản xuất</h1>
            <p>Xin hãy nhập thông tin bên dưới</p>
            <hr>
            <label for="name"><b>Tên nhà sản xuất</b></label>
            <input type="text" placeholder="Ví dụ : Asus..." name="name" id="name">
            <i id="error_name"></i>
            <br>
            <br>
            <label for="phone_number"><b>Số điện thoại</b></label>
            <input type="text" placeholder="Nhập Số điện thoại" name="phone_number" id="phone_number">
            <i id="error_phone_number"></i>
            <br>
            <br>
            <label for="address"><b>Địa chỉ</b></label>
            <input type="text" placeholder="Nhập địa chỉ" name="address" id="address">
            <i id="error_address"></i>
            <br>
            <br>
            <label for="image"><b>Ảnh</b></label>
            <input type="text" placeholder="Nhập link ảnh" name="image" id="image">
            <i id="error_image"></i>
            <br>
            <br>
            <label for=" about"><b>Giới thiệu về công ty</b></label>
            <br>
            <textarea placeholder="Xin mời bạn nhập ..." name="about" id="about"></textarea>
            <br>
            <div class="clearfix">
                <button type="submit" class="signupbtn" onclick="return check()">Thêm</button>
            </div>
        </div>
    </form>
</body>

</html>