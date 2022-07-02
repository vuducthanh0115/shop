<?php
// if (isset($_SESSION['level']) || $_SESSION['level'] == 1)
if (empty($_SESSION['level'])) {
    echo "Bạn không có quyền truy cập";
    exit;
}
