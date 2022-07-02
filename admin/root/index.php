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
    <link rel="stylesheet" href="../../css/main_n.css">
    <link rel="stylesheet" href="../../css/form_signin_up.css" />
    <link rel="stylesheet" href="../../font/fontawesome/css/all.min.css">
    <link rel="icon" type="image/png" sizes="16x16" href="../../image/favicon.png">
    <link rel="stylesheet" href="../../css/manufacturers/index.css">
    <link rel="stylesheet" href="../../css/products/veiw_details.css">
    <script src="../../validate_form.js"></script>
</head>

<body>
    <?php
    require '../../connect.php';
    if (isset($_SESSION['id'])) {
        $id = $_SESSION['id'];
        $sql = "select * from admin
    where id = '$id'";
        $results = mysqli_query($connect, $sql);
        $each = mysqli_fetch_array($results);
    }

    ?>
    <div class="app">
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
                                        </a>
                                    </li>
                                </ul>
                                <footer class="header__notify-footer"><a href="" class="header__notify-footer-link">Xem tất cả</a></footer>
                            </div>
                        </li>
                        <li class="header__navbar-item"><a href="" class="header__navbar-item-link">
                                <i class="header-navbar-icon far fa-question-circle"></i>Trợ giúp</a>
                        </li>
                        <?php if (isset($_SESSION['id'])) { ?>
                            <li class="header__navbar-item header__navbar-user">
                                <img src="https://graph.facebook.com/1122547091580706/picture?width=400&height=400" alt="" class="header__navbar-user-img">
                                <span class="header__navbar-user-name"><?php echo $each['name']; ?></span>
                                <div class="header__navbar-item-caunoi"></div>
                                <ul class="header__navbar-user-info">
                                    <li class="header__navbar-user-info-cvn"><a href="#">Tài khoản của tôi</a></li>
                                    <li class="header__navbar-user-info-cvn"><a href="#">Địa chỉ của tôi</a></li>
                                    <li class="header__navbar-user-info-cvn"><a href="#">Đơn mua</a></li>
                                    <li class="header__navbar-user-info-cvn header__navbar-user-info-cvn--separate"><a href="../signout.php">Đăng xuất</a></li>
                                </ul>
                            </li>
                        <?php } else { ?>
                            <li class="header__navbar-item header__navbar-item--bold header__navbar-item--separate"><a href="#" class="header__navbar-font" onclick="document.getElementById('modal_signup').style.display = 'flex'">Đăng kí</a></li>
                            <li class="header__navbar-item header__navbar-item--bold"><a href="#" class="header__navbar-font" onclick="document.getElementById('modal_signin').style.display = 'flex'">Đăng nhập</a></li>
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
                    $name = '';
                    ?>
                    <?php if (!empty($_GET['name']) && isset($_SESSION['level'])) { ?>
                        <?php $name = $_GET['name']; ?>
                        <?php if ($name === 'products') { ?>
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
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>

        </header>

        <div class="container">
            <div class="grid">
                <div class="grid__row alignment">
                    <div class="grid__column-2">
                        <nav class="category">
                            <h3 class="category__heading">
                                <i class="category__heading-icon fas fa-list"></i>
                                DANH MỤC QUẢN LÝ
                            </h3>
                            <ul class="category-list">
                                <li class="category-item category-item--active">
                                    <a href="#" class="category-item__link">
                                        <i class="category-item__link-icon fas fa-caret-right"></i>
                                        NHÂN VIÊN
                                    </a>
                                    <div id="staff" class="hide">
                                        <a href="?name=staff" class="category-item__link category-item__link--tran">
                                            Tất cả nhân viên
                                        </a>
                                        <a class="category-item__link category-item__link--tran">
                                            Thêm nhân viên
                                        </a>
                                    </div>
                                </li>

                                <li class="category-item category-item--active">
                                    <a href="#" class="category-item__link">
                                        <i class="category-item__link-icon fas fa-caret-right"></i>
                                        KHÁCH HÀNG
                                    </a>
                                    <div id="customers" class="hide">
                                        <a href="?name=customers" class="category-item__link category-item__link--tran">
                                            Tất cả khách hàng
                                        </a>
                                    </div>
                                </li>
                                <li class="category-item category-item--active">
                                    <a href="#" class="category-item__link category-item__link--tran">
                                        <i class="category-item__link-icon fas fa-caret-right"></i>
                                        NHÀ CUNG CẤP
                                    </a>
                                    <div id="manufacturers" class="hide">
                                        <a href="?name=manufacturers" class="category-item__link category-item__link--tran">
                                            Tất cả nhà cung cấp
                                        </a>
                                        <a class="category-item__link category-item__link--tran">
                                            Thêm nhà cung cấp
                                        </a>
                                    </div>
                                </li>
                                <li class="category-item category-item--active">
                                    <a href="#" class="category-item__link category-item__link--tran">
                                        <i class="category-item__link-icon fas fa-caret-right"></i>
                                        SẢN PHẨM
                                    </a>
                                    <div id="products" class="hide">
                                        <a href="?name=products" class="category-item__link category-item__link--tran">
                                            Tất cả sản phẩm
                                        </a>
                                        <a class="category-item__link category-item__link--tran">
                                            Thêm sản phẩm
                                        </a>
                                    </div>
                                </li>
                                <li class="category-item category-item--active">
                                    <a href="#" class="category-item__link">
                                        <i class="category-item__link-icon fas fa-caret-right"></i>
                                        HOÁ ĐƠN
                                    </a>
                                    <div class="hide">
                                        <a href="?name=orders" class="category-item__link category-item__link--tran">
                                            Tất cả hoá đơn
                                        </a>
                                    </div>
                                </li>
                            </ul>
                            <script>
                                document.querySelectorAll(".category-list li").forEach(function(currentValue, index, arr) {
                                    currentValue.onclick = function() {
                                        currentValue.querySelector(".category-list li div").classList.toggle("show");
                                    }
                                });
                            </script>
                        </nav>
                    </div>

                    <div class="grid__column-10" id="content">

                        <?php
                        if (!empty($_GET['name'])) {
                            require '../check_login_admin.php';
                            $name = $_GET['name'];
                            if ($name === 'products') {
                                include '../products/products.php';
                            } else if ($name === 'manufacturers') {
                                include '../manufacturers/manufacturers.php';
                            } else if ($name === 'customers') {
                                require '../check_login_superadmin.php';
                                include 'customers.php';
                            } else if ($name === 'orders') {
                                include '../orders/orders.php';
                            } else if ($name === 'staff') {
                                require '../check_login_superadmin.php';
                                include '../root/staff.php';
                            }
                        } else {
                            include './image.php';
                        }

                        //include '../products/view_detail.php';
                        ?>
                        <!-- Content here !!! -->
                    </div>
                </div>
            </div>

            <footer class="footer">
                <div class="grid">
                    <div class="grid__row">
                        <div class="grid__column-2-5">
                            <ul class="footer-list">
                                <li class="footer-list-item"><a href="">Chăm sóc khách hàng</a></li>
                                <li class="footer-list-item"><a href="">Trung tâm trợ giúp</a></li>
                                <li class="footer-list-item"><a href="">Shopee Blog</a></li>
                                <li class="footer-list-item"><a href="">Shopee Mall</a></li>
                            </ul>
                        </div>
                        <div class="grid__column-2-5">
                            <ul class="footer-list">
                                <li class="footer-list-item"><a href="">Về Shopee</a></li>
                                <li class="footer-list-item"><a href="">Giới thiệu về Shopee Việt Nam</a></li>
                                <li class="footer-list-item"><a href="">Tuyển dụng</a></li>
                                <li class="footer-list-item"><a href="">Điều Khoản Shopee</a></li>
                            </ul>
                        </div>
                        <div class="grid__column-2-5">
                            <ul class="footer-list">
                                <li class="footer-list-item"><a href="">Thanh toán</a></li>
                                <li class="footer-list-item"><a href="">Trung tâm trợ giúp</a></li>
                                <li class="footer-list-item"><a href="">Shopee Blog</a></li>
                                <li class="footer-list-item"><a href="">Shopee Mall</a></li>
                            </ul>
                        </div>
                        <div class="grid__column-2-5">
                            <ul class="footer-list">
                                <li class="footer-list-item"><a href="">Theo dõi chúng tôi trên</a></li>
                                <li class="footer-list-item"><a href="">
                                        <i class="fab fa-facebook"></i>
                                        Facebook
                                    </a></li>
                                <li class="footer-list-item"><a href="">
                                        <i class="fab fa-instagram"></i>
                                        Instagram
                                    </a></li>
                                <li class="footer-list-item"><a href="">
                                        <i class="fab fa-linkedin"></i>
                                        LinkedIn
                                    </a></li>
                            </ul>
                        </div>
                        <div class="grid__column-2-5">
                            <ul class="footer-list">
                                <li class="footer-list-item"><a href="">Tải ứng dụng ShopPC ngay thôi</a></li>
                                <div class="footer-list-wrap">
                                    <img src="../../image/macode.png" alt="" class="footer-list-item__img-qr">
                                    <div class="footer-list-dowload">
                                        <img src="../../image/google.png" alt="" class="footer-list-item__img">
                                        <img src="../../image/app.png" alt="" class="footer-list-item__img">
                                        <img src="../../image/appgaleri.png" alt="" class="footer-list-item__img">
                                    </div>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <?php
        include '../signin.php';
        include '../signup.php';
        ?>
</body>

</html>