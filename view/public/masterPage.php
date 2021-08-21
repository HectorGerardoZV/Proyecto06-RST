<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titlePage ?></title>
    <link rel="stylesheet" href="/view//public/public-style.css">
</head>

<body>

    <?php if ($page == "index") { ?>
        <header class="header__index">
            <div class="header__back ">
                <div class="header__content container-regular">
                    <div class="header__navegation ">
                        <a href="/"><img src="/view//img//icons//Logo-Max.svg" alt=""></a>

                        <nav class="navegation">
                            <a href="/aboutUs">About Us</a>
                            <a href="/properties">Properties</a>
                            <a href="/blogs">Blogs</a>
                            <a href="/contact">Contact</a>
                        </nav>
                    </div>
                    <div class="slogan__pagen">
                        <h1>The best houses and apartments
                            only on this website</h1>
                    </div>
                </div>

            </div>

        </header>
    <?php } else { ?>
        <header class="header__page">
            <div class="header__navegation container-regular">
                <a href="/"><img src="/view//img//icons//Logo-Max.svg" alt=""></a>

                <nav class="navegation">
                    <a href="/aboutUs">About Us</a>
                    <a href="/properties">Properties</a>
                    <a href="/blogs">Blogs</a>
                    <a href="/contact">Contact</a>
                </nav>
            </div>
        </header>
    <?php } ?>


    <main class="main container-regular">
        <?php
        if ($page == "index") {
            include __DIR__ . "/sections/IndexPage.php";
        } else if ($page == "aboutUs") {
            include __DIR__ . "/sections/AboutUsPage.php";
        } else if ($page == "properties") {
            include __DIR__ . "/sections/PropertiesPage.php";
        } else if ($page == "blogs") {
            include __DIR__ . "/sections/BlogPage.php";
        } else if ($page == "contact") {
            include __DIR__ . "/sections/ContactPage.php";
        } else if ($page == "property") {
            include __DIR__ . "/sections/PropertyPage.php";
        } else if ($page == "blog") {
            include __DIR__ . "/sections/EntryBlogPage.php";
        }

        ?>
    </main>

    <footer class="footer">
        <div class="footer__navegation container-regular">

            <nav class="navegation">
                <a href="/aboutUs">About Us</a>
                <a href="/properties">Properties</a>
                <a href="/blogs">Blogs</a>
                <a href="/contact">Contact</a>
            </nav>
            <a href="/"><img src="/view//img//icons//Logo-Max.svg" alt=""></a>

        </div>
    </footer>

</body>

</html>