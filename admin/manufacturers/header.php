<header>
    <div class="grid wide">
        <nav class="header__nav fl-ver fl-between hide-m">
            <ul class="fl-ver">
                <li><a href="index.php" class="nav-link">Quản lý nhà sản xuất </a></li>
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
                                <!-- <div class="content-text">
                                    <h3>Cơ hội cuối săn mã FreeShip 0Đ</h3>
                                    <p>
                                        Cùng BST deal đồng giá 1k, 9k. Deal từ Điện Tử, Nhà
                                        Cửa, Thời Trang. Mua gì cũng rẻ - Lẹ làng chốt đơn!
                                    </p>
                                </div> -->
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
                <li><a href="#" class="nav-link">Đăng Ký</a></li>
                <li><a href="#" class="nav-link">Đăng Nhập</a></li>
            </ul>
        </nav>
        <div class="header__search fl-ver fl-between hide-m">
            <div class="fl-ver">
                <div class="shopee-logo">
                    <a href="index.php" class="cv">
                        <p class="text-logo">Shop PC</p>
                    </a>
                </div>
            </div>
            <?php
            $search = "";
            if (isset($_GET['search'])) {
                $search = $_GET['search'];
            }

            ?>
            <div class="fl-ver">
                <div class="search-input fl-ver fl-between">
                    <form style="width: 100%;" method="get">
                        <input type="text" placeholder="Tìm kiếm nhà sản xuất ở đây " name="search" value="<?php echo $search ?>" style="width: 87%;" />
                        <input type="hidden" value="<?php if (isset($_GET['id'])) {
                                                        $id = $_GET['id'];
                                                        echo $id;
                                                    }
                                                    ?>" name="id">
                        <button type="submit">
                            <i class="fas fa-search fa-3x"></i>
                        </button>
                    </form>

                </div>
            </div>
        </div>
</header>