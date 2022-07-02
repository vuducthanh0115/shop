<?php
require '../../connect.php';
$sql_ct = "select * from manufacturers limit 5";
$result_ct = mysqli_query($connect, $sql_ct);
$sql_ctn = "select * from manufacturers";
$result_ctn = mysqli_query($connect, $sql_ctn);
$search = '';
if (isset($_GET['search'])) {
    $search = $_GET['search'];
}
?>
<div class="cgt-bar">
    <div class="grid wide">
        <ul class="fl-ver hide-m">
            <?php foreach ($result_ct as $each) : ?>
                <li class="cgt-item"><a href="index.php?page=<?php echo $page; ?>&id=<?php echo $each['id']; ?>&search=<?php echo $search; ?>"><?php echo $each['name']; ?></a></li>
            <?php endforeach ?>
            <li class="cgt-item">
                <a href="index.php">Tất cả</a>
                <div class="cgt-item--trigagle"></div>
                <div class="other-cgt">
                    <div class="row other-cgt__height mg-0">
                        <?php foreach ($result_ctn  as $each) : ?>
                            <div class="cl p-4 pd-0">
                                <div class="cgt-item"><a href="index.php?id=<?php echo $each['id']; ?>"><?php echo $each['name']; ?></a></div>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>