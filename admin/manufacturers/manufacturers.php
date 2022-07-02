<div class="main">
    <?php
    $search = '';
    $page = 1;
    if (isset($_GET['search'])) {
        $search = $_GET['search'];
    }
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }
    require '../../connect.php';
    $sql_tmp = "select * from manufacturers
            where name like '%$search%'";
    $sql = $sql_tmp;
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = $sql_tmp . " and id = '$id'";
    } else {
    }
    $result_fist = mysqli_query($connect, $sql);
    $result_num = mysqli_num_rows($result_fist);
    $result_num_page = 3;
    $sum_page = ceil($result_num / $result_num_page);
    $drop = $result_num_page * ($page - 1);
    $sql_fn = $sql . "limit $drop,$result_num_page"; // pagination && search
    $result = mysqli_query($connect, $sql_fn);
    ?>

    <div class="contents pdt-30 pdb-140">
        <div class="grid wide">
            <?php foreach ($result as $each) : ?>
                <div id="sun">
                    <div id="flame">
                        <div id="water">
                            <div id="water1">
                                <img id="water1img" src="<?php echo $each['image']; ?>">
                            </div>
                            <div id="water2">
                                <p id="water2p">Tên hãng : <?php echo $each['name']; ?></p>
                                <p id="water2p2">Mã :<?php echo $each['id']; ?></p>
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
                        <div id="thunder">
                            <a id="thunderbtn1" href="form_insert.php" title="Thêm" target="_blank"><i class="fa-solid fa-circle-plus fa-3x"></i></a>
                            <a id="thunderbtn1" href="form_update.php?id=<?php echo $each['id'] ?>" title="Sửa"><i class="fa-solid fa-pen fa-3x"></i></i></a>
                            <a id="thunderbtn1" href="process_delete.php?id=<?php echo $each['id'] ?>" title="Xoá"></i><i class="fa-solid fa-delete-left fa-3x"></i></a>
                            <a id="thunderbtn1" href="view_detail.php?id=<?php echo $each['id'] ?>" title="Xem chi tiết"><i class="fa-solid fa-circle-info fa-3x"></i></a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
        <div class="pagination fl-ver fl-between mgt-40 hide-m">
            <div class="pagination-item">
                <a href=" "><i class="fas fa-chevron-left"></i></a>
            </div>
            <?php
            for ($i = 1; $i <= $sum_page; $i++) { ?>
                <div class="pagination-item <?php if ($page == $i) {
                                                echo "pagination-item--active";
                                            } ?>">
                    <a href="?search=<?php
                                        echo $search;
                                        ?>&name=manufacturers&page=<?php
                                                                    echo $i;
                                                                    ?><?php
                                                                        if (isset($_GET['id'])) {
                                                                            $id = $_GET['id'];
                                                                            echo "&id=$id";
                                                                        } ?>">
                        <?php echo $i; ?>
                    </a>
                </div>
            <?php } ?>
            <div class="pagination-item">
                <a href=" "><i class="fas fa-chevron-right"></i></a>
            </div>
        </div>
    </div>
</div>