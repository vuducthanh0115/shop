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
                <?php if (empty($_SESSION['id'])) { ?>
                    <li class="header__navbar-item header__navbar-item--bold header__navbar-item--separate"><a href="#" class="header__navbar-font" onclick="document.getElementById('modal_signup').style.display = 'flex'">Đăng kí</a></li>
                    <li class="header__navbar-item header__navbar-item--bold"><a href="#" class="header__navbar-font" onclick="document.getElementById('modal_signin').style.display = 'flex'">Đăng nhập</a></li>
                <?php } else { ?>
                    <li class="header__navbar-item header__navbar-user">
                        <img src="https://scontent-sin6-3.xx.fbcdn.net/v/t39.30808-6/283141635_756597828664945_1830416502184741954_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=s8_ZY38bzkIAX_K5O0A&_nc_ht=scontent-sin6-3.xx&oh=00_AT9z8mHfFzESJN7SEeyUnmPtPpktp03tnZapZlFy8kmNlg&oe=6291AFF1" alt="" class="header__navbar-user-img">
                        <span class="header__navbar-user-name"><?php echo $_SESSION['name']; ?></span>
                        <div class="header__navbar-item-caunoi"></div>
                        <ul class="header__navbar-user-info">
                            <li class="header__navbar-user-info-cvn"><a href="#">Tài khoản của tôi</a></li>
                            <li class="header__navbar-user-info-cvn"><a href="#">Địa chỉ của tôi</a></li>
                            <li class="header__navbar-user-info-cvn"><a href="#">Đơn mua</a></li>
                            <li class="header__navbar-user-info-cvn header__navbar-user-info-cvn--separate"><a href="process_signout.php">Đăng xuất</a></li>
                        </ul>
                    </li>
                <?php } ?>
            </ul>
        </nav>
        <div class="header-with-search">
            <div class="header__logo">
                <a href="index.php" class="header__logo-tt">
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
                    <?php if (isset($_GET['id'])) { ?>
                        <?php $id = $_GET['id']; ?>
                        <input type="hidden" value=" <?php echo $id; ?>" name="id">
                    <?php } ?>
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
            <div class="header__cart">
                <div class="header__cart-icon">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="header__cart-notice">3</span>
                    <div class="header__cart-nocart">
                        <img src="./asset/img/chưa có sản phẩm.png" alt="" class="header__cart-nocart_img">
                    </div>
                    <div class="header__cart-hascart">
                        <div class="header__cart-hascart-header">Sản phẩm đã thêm</div>
                        <ul class="header__cart-hascart-list">
                            <li class="header__cart-hascart-item">
                                <img src="https://cf.shopee.vn/file/a2b8979038c3c2874832e7f256617637_tn" alt="" class="header__cart-hascart-item-img">
                                <div class="header__cart-hascart-item-hd">

                                    <div class="header__cart-hascart-item-heading">
                                        <h5 class="header__cart-hascart-item-description">Bộ kèm đặc trị vùng mắt</h5>
                                        <div class="header__cart-hascart-item-info">
                                            <span class="header__cart-hascart-item-price">2.000.000đ</span>
                                            <span class="header__cart-hascart-item-n">x</span>
                                            <span class="header__cart-hascart-item-qnt">2</span>
                                        </div>
                                    </div>
                                    <div class="header__cart-hascart-item-body">
                                        <span class="header__cart-hascart-item-type">Phân loại: Bạc</span>
                                        <span class="header__cart-hascart-item-remove">Xóa</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <button href="" class="btn btn-nomal btn--primary header__cart-hascart-item-btn ">Xem giỏ hàng</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

</header>