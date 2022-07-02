<?php
require 'connect.php';
$sql_group = "select * from product_group limit 4";
$result_group = mysqli_query($connect, $sql_group);
$sql = "select * from product_group";
$result = mysqli_query($connect, $sql);
?>
<div class="cgt-bar">
    <div class="grid wide">
        <ul class="fl-ver hide-m">
            <li class="cgt-item cgt-item--active"><a href="#">Phổ Biến</a></li>
            <?php foreach ($result_group as $each) : ?>
                <li class="cgt-item">
                    <a href="index_all_product.php?id=<?php echo $each['id']; ?>"><?php echo $each['name'] ?></a>
                </li>
            <?php endforeach ?>

            <li class="cgt-item">
                <span>Tất cả</span>
                <div class="cgt-item--trigagle"></div>
                <div class="other-cgt">
                    <div class="row other-cgt__height mg-0">
                        <?php foreach ($result as $each) : ?>
                            <div class="cl p-4 pd-0">
                                <div class="cgt-item"><a href="index_all_product.php?id=<?php echo $each['id']; ?>"><?php echo $each['name'] ?></a></div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>