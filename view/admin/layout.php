<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titelPage ?></title>
    <link rel="stylesheet" href="/view//admin/layout-style.css">
    <link rel="stylesheet" href="<?php echo $style ?>">
</head>

<body>

    <header class="header">
        <div class="header__content">
            <div class="admin__logo">
            <a href="/admin/admin"><img class="" src="/view//img//icons//Admin-Logo-Withe.svg" alt=""></a>

            </div>

            <div class="header__logo">
                <a class="" href="/admin/admin"> <img src="/view/img//icons//Logo-Max.svg" alt=""></a>
                <img src="/view//img//icons//NightMode-Off.svg" alt="">
            </div>
            <a class="logout" href="/logout"><img src="/view/img/icons//LogOut-withe.svg" alt=""></a>
        </div>
    </header>

    <?php
    if ($page == "property") {
        if ($action == "dashboard") {
            include __DIR__ . "/properties/property.php";
        } else if ($action == "create" || $action == "update") {
            include __DIR__ . "/properties/property-form.php";
        }
    } else if ($page == "saller") {
        if ($action == "dashboard") {
            include __DIR__ . "/sallers/saller.php";
        } else if ($action == "create" || $action == "update") {
            include __DIR__ . "/sallers/saller-form.php";
        }
    } else if ($page == "blog") {
        if ($action == "dashboard") {
            include __DIR__ . "/blogs/blog.php";
        } else if ($action == "create" || $action == "update") {
            include __DIR__ . "/blogs/blog-form.php";
        }
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