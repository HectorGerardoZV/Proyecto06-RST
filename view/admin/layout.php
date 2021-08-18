<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titelPage ?></title>
    <link rel="stylesheet" href="/view//admin/layout-style.css">
    <link rel="stylesheet" href="<?php echo $style?>">
</head>

<body>

    <header class="header">
        <div class="header__content">
            <img src="/view/img//icons//Logo-Max-blue.svg" alt="">
            <div class="header__logo">
                <a class="" href="/admin/admin"> <img src="/view/img//icons//Logo-Max.svg" alt=""></a>
                <img src="/view//img//icons//NightMode-Off.svg" alt="">
            </div>
            <form class="logout" action="" method="POST">
                <input type="image" src="/view/img/icons//LogOut-withe.svg" alt="Submit">
            </form>
        </div>
    </header>

    <?php
    if ($page == "property") {
        include __DIR__ . "/properties/property.php";
    }

    ?>
    <footer class="footer">
        <div class="footer__content">
            <img src="/view/img//icons//Logo-Max-blue.svg" alt="">
            <div class="header__logo">
                <a class="" href="/admin/admin"> <img src="/view/img//icons//Logo-Max.svg" alt=""></a>
                <img src="/view//img//icons//NightMode-Off.svg" alt="">
            </div>
        </div>
    </footer>

</body>

</html>