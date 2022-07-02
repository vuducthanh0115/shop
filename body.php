<div class="pros-mall fl-ver">
    <div class="pros-mall__item fl-ver hide-m">
        <div class="pros-mall__item-img">
            <img src="./image/pros-mall.png " alt=" " />
        </div>

        <div class="pros-mall__item-text">
            <h3>7 ngày miễn phí trả hàng</h3>
            <p>Trả hàng miễn phí trong 7 ngày</p>
        </div>
    </div>
    <div class="pros-mall__item fl-ver hide-m">
        <div class="pros-mall__item-img">
            <img src="./image/pros-mall1.png " alt=" " />
        </div>

        <div class="pros-mall__item-text">
            <h3>Hàng chính hãng 100%</h3>
            <p>Đảm bảo hàng chính hãng hoặc hoàn tiền gấp đôi</p>
        </div>
    </div>
    <div class="pros-mall__item fl-ver hide-m">
        <div class="pros-mall__item-img">
            <img src="./image/pros-mall2.png " alt=" " />
        </div>

        <div class="pros-mall__item-text">
            <h3>Miễn phí vận chuyển</h3>
            <p>Giao hàng miễn phí toàn quốc</p>
        </div>
    </div>
    <div class="pros-mall-m">
        <div class="pros-mall__item-m">
            <div class="pros-mall__item-m-icon">
                <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" class="stardust-icon stardust-icon-tick">
                    <path stroke="none" fill=#d0011b d="m6.5 13.6c-.2 0-.5-.1-.7-.2l-5.5-4.8c-.4-.4-.5-1-.1-1.4s1-.5 1.4-.1l4.7 4 6.8-9.4c.3-.4.9-.5 1.4-.2.4.3.5 1 .2 1.4l-7.4 10.3c-.2.2-.4.4-.7.4 0 0 0 0-.1 0z">
                    </path>
                </svg>
            </div>
            <p>Miễn phí trả hàng</p>
        </div>
    </div>
</div>

<div class="daily-content mgt-30">
    <div class="daily-content__banner--s">
        <a href="#" class="cv"><img class="cv" src="./image/banner--s.png " alt="small banner" /></a>
    </div>
    <div class="daily-content__text noselect">
        <h2>THƯƠNG HIỆU NỔI BẬT TRONG NGÀY</h2>
    </div>
</div>

<div class="daily-brand">
    <div class="daily-content__banner--l">
        <a href=" " class="cv"><img class="cv" src="./image/banner--1.jpg " alt=" " /></a>
    </div>
    <div class="see-more">
        <a href="index_all_product.php">Xem Tất Cả
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <div class="row">
        <?php
        require 'connect.php';
        $sql = "select * from products limit 6";
        $result = mysqli_query($connect, $sql);
        ?>
        <?php foreach ($result as $each) : ?>
            <div class="cl p-2 t-3">
                <div class="product-item">
                    <div class="product-img">
                        <a href="view_details.php?id=<?php echo $each['id']; ?>" class="cv"><img class="cv" src="./admin/products/images/<?php echo $each['image']; ?>" alt=" " /></a>
                        <div class="left-tag">
                            <p>Mall</p>
                        </div>
                        <div class="right-tag">
                            <p>14%</p>
                            <span>Giảm</span>
                        </div>
                    </div>

                    <div class="product-detail">
                        <div class="product-name">
                            <p>
                                <?php echo $each['name']; ?>
                            </p>
                            <div class="product-discount"></div>
                        </div>

                        <div class="product-price--brand">
                            <div>
                                <!-- <div class="old-price">
                                    <span>đ</span>
                                    <p>
                                        <?php $money = $each['price'];
                                        echo number_format("$money");
                                        ?>
                                    </p>
                                </div> -->
                                <div class="new-price">
                                    <span>đ</span>
                                    <p>
                                        <?php $money = $each['price'];
                                        echo number_format("$money");
                                        ?>
                                    </p>
                                </div>
                            </div>
                            <div class="btn-buy">
                                <i class="fas fa-shopping-cart"></i>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="btn-next">
                    <i class="fas fa-chevron-right"></i>
                </div> -->
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>
<?php
require './connect.php';
$sql = "select *from manufacturers";
$result = mysqli_query($connect, $sql);
?>
<div class="favorite-brand">
    <div class="grid wide">
        <div class="see-more see-more--label">
            <p>THƯƠNG HIỆU ƯA CHUỘNG</p>
            <a href="#">Xem Tất Cả
                <i class="fas fa-chevron-right"></i>
            </a>
        </div>
        <div class="brand-logo-container">
            <div class="row">
                <?php foreach ($result as $each) : ?>
                    <div class="cl p-2 t-0 pd-0">
                        <div class="brand-logo brand-logo-boder-top--no">
                            <a href=" " class="cv"><img class="cv" src="<?php echo $each['image']; ?> " alt=" " /></a>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
            <div class="btn-next">
                <i class="fas fa-chevron-right"></i>
            </div>
        </div>
    </div>
</div>