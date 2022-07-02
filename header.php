<header>
    <div class="grid wide">
        <nav class="header__nav fl-ver fl-between hide-m">
            <ul class="fl-ver">
                <li><a href="#" class="nav-link">Trang chủ </a></li>
                <li class="fl-ver">
                    <a href="#" class="nav-link">Kết nối</a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </li>
            </ul>
            <ul class="fl-ver">
                <li>
                    <a href="#" class="nav-link"><i class="far fa-bell"></i>Thông Báo</a>
                    <div class="nav-noti pop-up--noti--empty">
                        <div class="pop-up-top--content">
                            <p>Thông Báo Mới Nhận</p>
                        </div>
                        <div class="pop-up-center--empty fl-cen fl-col">
                            <img src="./image/noti--empty.png" class="empty-img" />
                            <p class="empty-text">Đăng nhập để xem Thông báo</p>
                        </div>
                        <div class="pop-up-center--content">
                            <div class="content-item">
                                <div class="content-img">
                                    <img src="./image/noti.jpg" />
                                </div>
                                <div class="content-text">
                                    <h3>Cơ hội cuối săn mã FreeShip 0Đ</h3>
                                    <p>
                                        Cùng BST deal đồng giá 1k, 9k. Deal từ Điện Tử, Nhà
                                        Cửa, Thời Trang. Mua gì cũng rẻ - Lẹ làng chốt đơn!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="pop-up-bottom--empty">
                            <div class="empty-text empty-text--half">Đăng ký</div>

                            <div class="empty-text empty-text--half">Đăng nhập</div>
                        </div>
                        <div class="pop-up-bottom--content">Xem tất cả</div>
                    </div>
                </li>
                <li>
                    <a href="#" class="nav-link"><i class="far fa-question-circle"></i> Hỗ Trợ</a>
                </li>
                <?php if (empty($_SESSION['id'])) { ?>
                    <li><a href="#" class="nav-link" onclick="document.getElementById('modal_signup').style.display = 'flex'">Đăng Ký</a></li>
                    <li><a href="#" class="nav-link" onclick="document.getElementById('modal_signin').style.display = 'flex'">Đăng Nhập</a></li>
                <?php } else { ?>
                    <li class="header__navbar-item header__navbar-user">
                        <img src="image/noti--empty.png" alt="" class="header__navbar-user-img">
                        <span class="header__navbar-user-name"><?php echo $_SESSION['name']; ?></span>
                        <ul class="header__navbar-user-menu">
                            <li class="header__navbar-user-item">
                                <a href="">Tài Khoản của tôi</a>
                            </li>
                            <li class="header__navbar-user-item">
                                <a href="">Địa chỉ của tôi</a>
                            </li>
                            <li class="header__navbar-user-item">
                                <a href="">Đơn mua </a>
                            </li>
                            <li class="header__navbar-user-item header__navbar-user-item--separate ">
                                <a href="process_signout.php">Đăng xuất</a>
                            </li>
                        </ul>
                    </li>
                <?php } ?>
            </ul>
        </nav>
        <div class="header__search fl-ver fl-between hide-m">
            <div class="fl-ver">
                <div class="shopee-logo">
                    <a href="#" class="cv">
                        <p class="text-logo">Shop PC</p>
                    </a>
                </div>
            </div>
            <div class="fl-ver">
                <div class="search-input fl-ver fl-between">
                    <input type="text" placeholder="Tìm kiếm sản phẩm ở đây " />
                    <button type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
                <div class="cart">
                    <?php if (empty($_SESSION['id'])) { ?>
                        <i class="fas fa-shopping-cart" onclick="document.getElementById('modal_signin').style.display = 'flex'"></i>
                    <?php } else { ?>
                        <a href="view_cart.php"><i class="fas fa-shopping-cart"></i></a>
                    <?php } ?>
                    <div class="cart-list pop-up--cart--empty">
                        <div class="pop-up-top--content">
                            <p>Sản Phẩm Mới Thêm</p>
                        </div>
                        <div class="pop-up-center--content">
                            <div class="content-item">
                                <div class="content-img">
                                    <img src="./image/cart-item.jpg " />
                                </div>
                                <div class="content-text">
                                    Gói 100 tăm bông chất lượng cao đa năng tiện dụng
                                </div>
                                <div class="content-sub-text">₫8.500</div>
                            </div>
                        </div>
                        <div class="pop-up-bottom--content">
                            <div class="content-text">6 Thêm Hàng Vào Giỏ</div>
                            <button type="button ">Xem Giỏ Hàng</button>
                        </div>
                        <div class="pop-up-center--empty">
                            <img src="./image/cart--empty.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
</header>