<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="./css/reset_n.css" />
    <link rel="stylesheet" href="./css/grid_n.css" />
    <link rel="stylesheet" href="./css/base_s.css" />
    <link rel="stylesheet" href="./css/styles.css" />
    <link rel="stylesheet" href="./css/form_signin_up.css" />
    <link rel="stylesheet" href="./css/responsive.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="icon" type="image/png" sizes="16x16" href="./image/favicon.png" style="border-radius: 15px;">
    <script src="validate_form.js"></script>
    <title>Shopee PC | Chính Hãng</title>
</head>

<body>
    <div class="main">
        <?php
        include 'header.php';
        include 'menu.php';
        ?>
        <div class="contents pdt-30 pdb-140">
            <div class="grid wide">
                <?php
                include 'slider.php';
                include 'body.php';
                ?>
            </div>
        </div>
        <?php
        include 'footer.php';
        include 'signin.php';
        include 'signup.php';
        include 'forgot_password.php';
        ?>
    </div>
</body>

</html>