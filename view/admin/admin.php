<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/view//admin/admin-style.css">
</head>

<body>

    <main class="admin__section">
        <!-- Navegation-->
        <div class="admin__navegation">
            <div class="view">
                <a href=""> <img src="/view//img//icons//Watch-Views.svg" alt=""></a>
            </div>
            <div class="crud">
                <a class="crud__option" href=""> <img src="/view//img//icons//House-Pink.svg" alt=""></a>
                <a class="crud__option" href=""> <img src="/view//img//icons//Saller-Pink.svg" alt=""></a>
                <a class="crud__option" href=""> <img src="/view//img//icons//Blog-Pink.svg" alt=""></a>
            </div>
            <form class="logout" action="" method="POST">
                <input type="image" src="/view/img/icons//LogOut-Pink.svg" alt="Submit">
            </form>

        </div>
        <!-- Info-->
        <div class="admin__content">
            <div class="admin__header">
                <a href="/admin/admin" class="admin__logo">
                    <image src="/view/img/icons/Logo-Max-Blue.svg"></image>
                </a>
            </div>
            <h1 class="admin__text">Company Status</h1>
            <div class="admin__status">
                <div class="data">
                    <div class="data__image">
                        <image src="/view/img/icons/House-Pink.svg"></image>
                    </div>
                    <div class="data__content">
                        <h2>Properties</h2>
                        <h2>
                            <?php echo $numProperties ?>
                        </h2>
                    </div>
                </div>
                <div class="data">
                    <div class="data__image">
                        <image src="/view/img/icons/Saller-Pink.svg"></image>
                    </div>
                    <div class="data__content">
                        <h2>Sallers</h2>
                        <h2>
                            <?php echo $numSallers ?>
                        </h2>
                    </div>
                </div>
                <div class="data">
                    <div class="data__image">
                        <image src="/view/img/icons/Blog-Pink.svg"></image>
                    </div>
                    <div class="data__content">
                        <h2>Blogs</h2>
                        <h2>
                            <?php echo $numBlogs ?>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </main>


</body>

</html>