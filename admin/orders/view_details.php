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
    <link rel="stylesheet" href="../../css/base_n.css">
    <link rel="stylesheet" href="../../css/form_signin_up.css" />
    <link rel="stylesheet" href="../../css/main_n.css">
    <link rel="stylesheet" href="../../css/cart.css">
    <link rel="stylesheet" href="../../font/fontawesome/css/all.min.css">
    <link rel="icon" type="image/png" sizes="16x16" href="./image/favicon.png">
</head>

<body>
    <div class="app">
        <?php
        $id = $_GET['id'];
        //include '../../header_all_product.php';
        require '../../connect.php';
        $sql = "select products.name, products.image, products.price, orders.total_price, order_product.* from order_product
        join products on products.id = order_product.product_id
        join orders on orders.id = order_product.order_id
        where orders.id = '$id'";
        //die($sql);
        $results = mysqli_query($connect, $sql);
        $sum = 0;
        ?>
        <div class="container">
            <main class="main">
                <section class="section">
                    <table class="section-table">
                        <thead class="section-table__thead">
                            <tr>
                                <th></th>
                                <th>Tên sản phẩm</th>
                                <th>Giá tiền</th>
                                <th>Số lượng</th>
                                <th>Tổng tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($results as $each) : ?>
                                <tr>
                                    <td style="background-image: url('../products/images/<?php echo $each['image']; ?>'); width: 90px;" class="img">
                                    </td>
                                    <td><?php echo $each['name']; ?></td>
                                    <td><?php echo number_format($each['price']) . " VND"; ?></td>
                                    <td>
                                        <div class="section-table__counter">
                                            <?php echo $each['quantity']; ?>
                                        </div>
                                    </td>
                                    <td><?php echo number_format($each['price'] * $each['quantity']) . " VND"; ?></td>
                                </tr>
                                <?php
                                $sum += $each['price'] * $each['quantity'];
                                ?>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                    <div class=" section-footer">
                        <a href="view_cart.php" class="button">Cập nhật</a>
                    </div>
                </section>

            </main>
            <h1>Tổng tiền : <?php echo number_format($sum) . ' VNĐ'; ?></h1>
            <?php
            include '../../footer_all_product.php';
            ?>
        </div>
</body>

</html>