<header class="header">
    <div class="grid">
        <nav class="header__navbar">
            <ul class="header__navbar-list">
                <li class="header__navbar-item header__navbar-item--separate">
                    <span>Trang chủ</span>
                </li>
                <li class="header__navbar-item header__navbar-item--net">
                    Kết nối
                    <a href="" class="header__navbar-icon-link">
                        <i class="header-navbar-icon fab fa-facebook"></i>
                    </a>
                    <a href="" class="header__navbar-icon-link">
                        <i class="header-navbar-icon fab fa-instagram"></i>
                    </a>
                </li>
            </ul>
            <ul class="header__navbar-list">
                <li class="header__navbar-item">
                    <a href="" class="header__navbar-item-link"><i class="header-navbar-icon far fa-bell"></i>Thông báo</a>
                    <div class="header__notify">
                        <header class="header__notify-header">
                            <h3>Thông báo mới nhận</h3>
                        </header>
                        <ul class="header__notify-list">
                            <li class="header__notify-item">
                                <a href="" class="header__notify-link">
                                    <div class="hearder__notify-img-container"><img src="https://cf.shopee.vn/file/ab1fbfa8f223e9c16f0dfacc75a75036_tn" alt="" class="header__notify-img"></div>
                                    <div class="header__notify-info">
                                        <span class="header__notify-name">Mỹ phẩm Ohui chính hãng</span>
                                        <span class="header__notify-description">📣Shipper bảo rằng: đơn hàng: của bạn vẫn đang trong quá trình vận chuyển và dự kiến được giao trong 1-2 ngày tới.😊</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <footer class="header__notify-footer"><a href="" class="header__notify-footer-link">Xem tất cả</a></footer>
                    </div>
                </li>
                <li class="header__navbar-item"><a href="" class="header__navbar-item-link">
                        <i class="header-navbar-icon far fa-question-circle"></i>Trợ giúp</a></li>
                <li class="header__navbar-item header__navbar-item--bold header__navbar-item--separate"><a href="" class="header__navbar-font">Đăng kí</a></li>
                <li class="header__navbar-item header__navbar-item--bold"><a href="" class="header__navbar-font">Đăng nhập</a></li>
                <!-- <li class="header__navbar-item header__navbar-user">
       <img src="https://graph.facebook.com/1122547091580706/picture?width=400&height=400" alt="" class="header__navbar-user-img">
       <span class="header__navbar-user-name">Drake Harvey</span>
       <div class="header__navbar-item-caunoi"></div>
       <ul class="header__navbar-user-info">
        <li class="header__navbar-user-info-cvn"><a href="#">Tài khoản của tôi</a></li>
        <li class="header__navbar-user-info-cvn"><a href="#">Địa chỉ của tôi</a></li>
        <li class="header__navbar-user-info-cvn"><a href="#">Đơn mua</a></li>
        <li class="header__navbar-user-info-cvn header__navbar-user-info-cvn--separate"><a href="#">Đăng xuất</a></li>
    </ul>
</li> -->
            </ul>
        </nav>
        <div class="header-with-search">
            <div class="header__logo">
                <a href="../root/index.php" class="header__logo-tt">
                    <p class="text-logo">Shop PC</p>
                </a>
            </div>
            <?php
            $search = '';
            if (isset($_GET['search'])) {
                $search = $_GET['search'];
            }
            ?>
            <form class="header__search">
                <div class="header__search-wrap">
                    <input type="text" class="header__search-input" placeholder="Tìm sản phẩm, thương hiệu, tên shop" value="<?php echo $search ?>" name="search">
                    <input type="hidden" <?php if (isset($_GET['id'])) {
                                                $id = $_GET['id'];
                                                echo "value=$id name='id'";
                                            }
                                            ?>>
                    <ul class="header__search-hitory-list">
                        <header class="header__search-hitory-item_head">Lịch sử tìm kiếm</header>
                        <li class="header__search-hitory-item"><a href="">Laptop Asus</a> </li>
                        <li class="header__search-hitory-item"><a href="">PC gamming</a></li>
                    </ul>
                </div>
                <div class="header__search-selection">
                    <span class="header__search-option">Trong Shop</span>
                    <i class="header__search-icon fas fa-angle-down"></i>
                    <div class="header__navbar-item-caunoi"></div>
                    <ul class="header__search-option-list">
                        <li class="header__search-option-item">
                            <span class="header__search-option-item-inshop">Trong Shop</span>
                            <i class="header__search-option-item-icon fas fa-check"></i>
                        </li>
                    </ul>
                </div>
                <button type="submit" class="header__search-result" style="border-color: blue;">
                    <i class="header__search-result-icon fas fa-search"></i>
                </button>
            </form>
        </div>
    </div>

</header>