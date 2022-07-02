<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="../../css/reset_n.css" />
    <link rel="stylesheet" href="../../css/grid_n.css" />
    <link rel="stylesheet" href="../../css/base_s.css" />
    <link rel="stylesheet" href="../../css/styles.css" />
    <link rel="stylesheet" href="../../font/fontawesome-free-6.1.1-web/css/all.min.css">
    <!-- <link rel="stylesheet" href="./css/responsive.css" /> -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="icon" type="image/png" sizes="16x16" href="./image/favicon.png">
    <link rel="stylesheet" href="../../css/manufacturers/index.css">
    <title>Shopee PC | Chính Hãng</title>
</head>

<body>
    <div class="main">
        <?php
        include './header.php';
        require '../../connect.php';
        ?>
        <?php if (isset($_GET['id'])) { ?>
            <?php
            $id = $_GET['id'];
            $sql = "select * from manufacturers
            where id = '$id'";
            $result = mysqli_query($connect, $sql);
            $number_row = mysqli_num_rows($result);
            ?>
            <?php if ($number_row === 1) { ?>
                <?php $sql = "select * from manufacturers
                where id = '$id'";
                $result = mysqli_query($connect, $sql);
                $each = mysqli_fetch_array($result); ?>
                <div class="contents pdt-30 pdb-140">
                    <div class="grid wide">
                        <div id="sun">
                            <div id="flame" style="height: 300px;">
                                <div id="water" style="width: 70%;">
                                    <div id="water1">
                                        <img id="water1img" src="<?php echo $each['image']; ?>">
                                    </div>
                                    <div id="water2">
                                        <p id="water2p"><b>Tên hãng : </b> <?php echo $each['name']; ?></p>
                                        <p id="water2p2"><b>Mã : </b><?php echo $each['id']; ?></p>
                                        <p id="water2p2"><?php echo nl2br($each['about']); ?></p>
                                    </div>
                                </div>
                                <div id="beast">
                                    <div id="beast1">
                                        <div id="beast1sub1">
                                            <p>Số điện thoại : <?php echo $each['phone_number']; ?></p>
                                        </div>
                                    </div>
                                    <div id="beast2">
                                        <div id="beast2sub1">
                                            <p>Địa chỉ</p>
                                        </div>
                                    </div>
                                    <div id="beast3">
                                        <p><?php echo $each['address']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <div style="width:100%; height: 500px;">
                    <p style="text-align: center; margin: 250px; color: black; font-size: 50px;"><?php echo "Không có hãng nào cả"; ?></p>
                </div>

            <?php } ?>

        <?php } ?>



        <?php include './footer.php'; ?>
    </div>
</body>

</html>