<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/view//public/public-style.css">
</head>

<body>
    <header>

    </header>

    <main>
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
        }

        ?>
    </main>

    <footer>

    </footer>

</body>

</html>