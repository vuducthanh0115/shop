<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link rel="stylesheet" href="./css/base_n.css">
    <link rel="stylesheet" href="./css/form_signin_up.css" />
    <link rel="stylesheet" href="./css/main_n.css">
    <link rel="stylesheet" href="./css/cart.css">
    <link rel="stylesheet" href="./font/fontawesome/css/all.min.css">
    <link rel="icon" type="image/png" sizes="16x16" href="./image/favicon.png">
</head>

<body>
    <div class="app">
        <?php
        include 'header_all_product.php';
        require 'connect.php';
        if (isset($_SESSION['id'])) {
            $id = $_SESSION['id'];
            $sql = "select * from customers
            where id = '$id'";
            $query = mysqli_query($connect, $sql);
            $info_customer = mysqli_fetch_array($query);
        }
        if (isset($_SESSION['cart'])) {
            $cart = $_SESSION['cart'];
        }
        $sum = 0;
        ?>
        <div class="container">
            <main class="main">
                <section class="section">
                    <table class="section-table">
                        <thead class="section-table__thead">
                            <tr>
                                <th></th>
                                <th></th>
                                <th>Tên sản phẩm</th>
                                <th>Giá tiền</th>
                                <th>Số lượng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (isset($_SESSION['cart'])) { ?>
                                <?php foreach ($cart as $id => $each) : ?>
                                    <tr>
                                        <td>
                                            <img class="image" src="" alt="">
                                        </td>
                                        <td style="background-image: url('./admin/products/images/<?php echo $each['image']; ?>'); width: 90px;" class="img">
                                        </td>
                                        <td><?php echo $each['name']; ?></td>
                                        <td><?php echo number_format($each['price']) . " VND"; ?></td>
                                        <td>
                                            <div class="section-table__counter">

                                                <a href="update_quantity.php?id=<?php echo $id; ?>&type=decre" class="square" style="text-decoration: none;">-</a>
                                                <div class="square"><?php echo $each['quantity']; ?></div>
                                                <a href="update_quantity.php?id=<?php echo $id; ?>&type=incre" class="square" style="text-decoration: none;">+</a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                    $sum += $each['price'] * $each['quantity'];
                                    ?>
                                <?php endforeach ?>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class=" section-footer">
                        <a href="view_cart.php" class="button">Cập nhật</a>
                    </div>
                </section>
                <form action="process_order.php" class="aside" method="POST">
                    <table class="aside-table">

                        <tr class="aside-table__tbody">
                            <th>
                                Thông tin người nhận
                            </th>
                        </tr>
                        <tr class="aside-table__tbody">
                            <th>
                                Họ và tên :
                            </th>
                            <th>
                                <input type="text" name="name_receiver" value="<?php if (isset($_SESSION['id'])) {
                                                                                    echo $info_customer['name'];
                                                                                } ?>">
                            </th>
                        </tr>
                        <tr>
                            <th>
                                Số điện thoại :
                            </th>
                            <th>
                                <input type="text" name="phone_receiver" value="<?php if (isset($_SESSION['id'])) {
                                                                                    echo $info_customer['phone_number'];
                                                                                } ?>">
                            </th>
                        </tr>
                        <tr>
                            <th>
                                Địa chỉ :
                            </th>
                            <th>
                                <input type="text" name="address_receiver" value="<?php if (isset($_SESSION['id'])) {
                                                                                        echo $info_customer['address'];
                                                                                    } ?>">
                            </th>
                        </tr>

                        <tr>
                            <th>
                                Tổng tiền :
                            </th>
                            <th><?php echo number_format($sum) . " VND"; ?></th>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button class="button">Thanh toán</button>
                        </tr>
                        </tbody>
                    </table>
                    </aside>
            </main>
            <?php
            include 'footer_all_product.php';
            include 'signin.php';
            include 'signup.php';
            ?>
        </div>
</body>

</html>