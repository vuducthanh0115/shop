<!-- <?php
        session_start();
        ?> -->
<div class="app">
    <?php
    require '../../connect.php';
    $sql = "select customers.name as cus_name,customers.phone_number as cus_phone,customers.address as cus_address, orders.* from orders
    join customers on customers.id = orders.customer_id ";
    $results = mysqli_query($connect, $sql);
    ?>
    <div class="container">
        <main class="main">
            <section class="section">
                <table class="section-table" border="1" width="100%" style="background-color: white;">
                    <thead class="section-table__thead">
                        <h1 style="margin-top: 40px; text-align: center;">
                            Tất cả các hoá đơn
                        </h1>
                        <tr>
                            <th>Mã</th>
                            <th>Thời gian đặt</th>
                            <th>Thông tin người nhận</th>
                            <th>Thông tin người đặt</th>
                            <th>Trạng thái</th>
                            <th>Tổng tiền</th>
                            <th>Xem chi tiết</th>
                            <th>Cập nhật trạng thái</th>
                    </thead>
                    <tbody>
                        <?php foreach ($results as $each) : ?>
                            <tr style="text-align: center;">
                                <td>
                                    <?php echo $each['id']; ?>
                                </td>
                                <td>
                                    <?php echo $each['created_at']; ?>
                                </td>
                                <td>
                                    <?php echo $each['name_receiver']; ?>
                                    <br>
                                    <?php echo $each['phone_receiver']; ?>
                                    <br>
                                    <?php echo $each['address_receiver']; ?>
                                </td>
                                <td>
                                    <?php echo $each['cus_name']; ?>
                                    <br>
                                    <?php echo $each['cus_phone']; ?>
                                    <br>
                                    <?php echo $each['cus_address']; ?>
                                </td>
                                <td>
                                    <?php
                                    switch ($each['status']) {
                                        case '0':
                                            echo "Mới đặt";
                                            break;
                                        case '1':
                                            echo "Đã duyệt";
                                            break;
                                        case '2':
                                            echo "Đã huỷ";
                                            break;
                                        default:
                                            echo "";
                                            break;
                                    }
                                    ?>
                                </td>
                                <td><?php echo number_format($each['total_price']) . " VND"; ?></td>
                                <td>
                                    <a href="../orders/view_details.php?id=<?php echo $each['id'] ?>">Xem</a>
                                </td>
                                <td>
                                    <?php if ($each['status'] == 0) { ?>
                                        <a href="../orders/update.php?id=<?php echo $each['id'] ?>&status=1">Duyệt đơn</a>
                                        <br>
                                        <a href="../orders/update.php?id=<?php echo $each['id'] ?>&status=2">Huỷ đơn</a>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
                <div class=" section-footer">
                    <a href="view_cart.php" class="button">Cập nhật</a>
                </div>
            </section>
        </main>
    </div>