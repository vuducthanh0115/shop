<?php
if (!isset($_SESSION['level'])) {
    echo "Bạn cần đăng nhập";
    exit;
}
