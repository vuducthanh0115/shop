<div class="container">
    <?php
    require '../../connect.php';
    $sql_group = "select * from product_group";
    $result_group = mysqli_query($connect, $sql_group);
    $search = '';
    $page = 1;
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }
    if (isset($_GET['search'])) {
        $search = $_GET['search'];
    }
    $sql_tmp = "select manufacturers.address as manufacturer_address, products.* from products
            join manufacturers on manufacturers.id = products.manufacturer_id
            where products.name like '%$search%'";
    //die($sql_tmp);
    //where name like '%$search%'
    $sql = $sql_tmp;
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = $sql_tmp . " and group_id = '$id'";
    }
    $result_fist = mysqli_query($connect, $sql);
    $result_num = mysqli_num_rows($result_fist);
    $result_num_page = 5;
    $sum_page = ceil($result_num / $result_num_page);
    if ($page > $sum_page) {
        $page = $sum_page;
    }
    $drop = $result_num_page * ($page - 1);
    $sql_fn = $sql . " limit $drop,$result_num_page"; // pagination && search
    $result = mysqli_query($connect, $sql_fn);
    //$result = mysqli_query($connect, $sql);
    ?>
    <div class="grid">
        <div class="grid__row alignment">
            <div class="grid__column-2">
                <nav class="category">
                    <h3 class="category__heading">
                        <i class="category__heading-icon fas fa-list"></i>
                        Loại sản phẩm
                    </h3>
                    <ul class="category-list">
                        <li class="category-item category-item--active">
                            <a href="index.php?name=products" class="category-item__link">
                                <i class="category-item__link-icon fas fa-caret-right"></i>
                                Tất cả
                            </a>
                        </li>
                        <?php foreach ($result_group as $each) : ?>
                            <li class="category-item <?php if (isset($_GET['id'])) {
                                                            $id = $_GET['id'];
                                                            if ($id == $each['id']) {
                                                                echo "category-item--active";
                                                            }
                                                        } ?>">
                                <a href="?page=<?php echo $page; ?>&id=<?php echo $each['id']; ?>&name=products" class="category-item__link category-item__link--tran"><?php echo $each['name'] ?></a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </nav>
            </div>
            <div class="grid__column-10">
                <div class="content-sale">
                    <div class="content-sale-cvn">
                        <span>Sắp xếp theo</span>
                        <div class="content-sale-cvn__price">Giá
                            <i class="content-sale-cvn__price-icon fas fa-chevron-down"></i>
                            <div class="header__navbar-item-caunoi header__navbar-item-caunoi--right"></div>
                            <ul class="content-sale-list">
                                <li class="content-sale-item">
                                    <span class="content-sale-item-inshop">Giá : Thấp đến cao</span>

                                </li>
                                <li class="content-sale-item">
                                    <span class="content-sale-item-inshop">Giá : Cao đến thấp</span>

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="content-sale-controls">
                        <span>1</span>/14
                        <div class="content-sale-controls-page">
                            <div class="content-sale-controls-button content-sale-controls-button--disible"><i class="fas fa-chevron-left"></i></div>
                            <div class="content-sale-controls-decotation"></div>
                            <div class="content-sale-controls-button"><i class="fas fa-chevron-right"></i></div>

                        </div>
                    </div>
                </div>

                <div class="content-produce">
                    <div class="grid__row">
                        <?php foreach ($result as $each) : ?>
                            <a class="grid__column-2-5" href="../products/view_details.php?id=<?php echo $each['id']; ?>" style="text-decoration: none; color: blue;">
                                <div class="content-produce-item">
                                    <div class="content-produce-item__img" style="background-image: url('../products/images/<?php echo $each['image']; ?>');">

                                    </div>
                                    <h4 class="content-produce-item__name"><?php echo $each['name']; ?></h4>
                                    <div class="content-produce-item__price">
                                        <!-- <span class="content-produce-item__price-old">1.000.000đ</span> -->
                                        <span class="content-produce-item__price-current">
                                            <?php $money = $each['price'];
                                            echo number_format("$money");
                                            ?>
                                            VND
                                        </span>
                                    </div>
                                    <div class="content-produce-item__action">
                                        <div class="content-produce-item__like">
                                            <i class="fas fa-heart"></i>
                                        </div>
                                        <div class="content-produce-item__rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="content-produce-item__origin">
                                        <div class="content-produce-item__brand"></div>
                                        <div class="content-produce-item__origin-name">
                                            <?php echo $each['manufacturer_address']; ?>
                                        </div>
                                    </div>
                                    <div class="content-produce-item__favourite">
                                        <i class="fas fa-angle-down"></i>
                                        Yêu thích
                                    </div>
                                    <div class="content-produce-item__sale-off">
                                        <span class="content-produce-item__percent">10%</span>
                                        <div class="content-produce-item__lable">giảm</div>
                                    </div>
                                </div>
                            </a>
                        <?php endforeach ?>
                    </div>
                </div>
                <div class="pagination">
                    <ul class="pagination-list">
                        <li class="pagination-item">
                            <a href="index.php?page=<?php if ($page > 1) {
                                                        $page--;
                                                    }
                                                    echo $page; ?>&name=products" class="pagination-item__link">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                        </li>
                        <?php for ($i = 1; $i <= $sum_page; $i++) { ?>
                            <li class="pagination-item">
                                <a href="index.php?page=<?php
                                                        echo $i;
                                                        ?>&search=<?php
                                                                    echo $search;
                                                                    ?><?php
                                                                        if (isset($_GET['id'])) {
                                                                            $id = $_GET['id'];
                                                                            echo "&id=$id";
                                                                        }
                                                                        ?>&name=products" class="pagination-item__link 
                            <?php $page = 1;
                            if (isset($_GET['page'])) {
                                $page = $_GET['page'];
                            }
                            if ($i == $page) {
                                echo "pagination-item__link--active";
                            } ?>">
                                    <?php echo $i ?>
                                </a>
                            </li>
                        <?php } ?>
                        <li class="pagination-item"><a href="index.php?page=<?php $page == $sum_page ?: $page++;
                                                                            echo $page; ?>&name=products" class="pagination-item__link"><i class="fas fa-chevron-right"></i></a></li>

                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>