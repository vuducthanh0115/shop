<?php
$token = $_GET['token'];
require 'connect.php';
$sql = "select * from forgot_password
where token = '$token'";
$results = mysqli_query($connect, $sql);
$number_rows = mysqli_num_rows($results);
if ($number_rows !== 1) {
    header('location:index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/form_signin_up.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" />
    <title>Thay đổi mật khẩu</title>
</head>

<body>

    <div class="modal" style="display: flex;">
        <div class="modal__overplay"> </div>
        <div class="modal__body">
            <form class="auth-form" action="process_change_psw.php" method="POST">
                <input type="hidden" name="token" value="<?php echo $token; ?>">
                <div class="auth-form__container">
                    <div class="auth-form__header">
                        <h1 class="auth-form__heading" style="font-size: 20px; font-family: Roboto;">
                            Thay đổi mật khẩu
                        </h1>
                    </div>

                    <div class="auth-form__form">
                        <div class="auth-form__group">
                            <input type="text" class="auth-form__input" placeholder="Nhập mật khẩu" name="psw" style="font-size: 15px; font-family: Roboto;">
                        </div>
                        <div class="auth-form__group">
                            <input type="text" class="auth-form__input" placeholder="Nhập lại khẩu" name="re_psw" style="font-size: 15px; font-family: Roboto;">
                        </div>
                    </div>

                    <div class="auth-form__aside">
                        <div class="auth-form__help">
                            <a href="" class="auth-form__help-link auth-form__help-forgot" style="font-size: 15px; font-family: Roboto;">
                                Cần trợ giúp?

                            </a>
                        </div>
                    </div>
                    <div class="auth-form__controls" style="margin-bottom: 15px;">
                        <button type="submit" class="btn btn--primary " style="font-size: 15px; font-family: Roboto;">
                            THAY ĐỔI
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>