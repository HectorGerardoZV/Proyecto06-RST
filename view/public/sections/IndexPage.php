<section class="index-aboutUs section container-regular">
    <h2>About Us</h2>

    <div class="aboutUs__information">
        <div class="aboutUs__information-item">
            <img src="/view//img//icons//Security.svg" alt="">
            <h3>Security</h3>
            <p>The security we give you
                it's amazing, thanks to our amazing
                software system and our experts
                in finance we give more security than
                competence</p>
        </div>
        <div class="aboutUs__information-item">
            <img src="/view//img//icons//Money.svg" alt="">
            <h3>Price</h3>
            <p>The best prices in the market with an incredible business
                around it, an opportunity never seen before</p>
        </div>
        <div class="aboutUs__information-item">
            <img src="/view//img//icons//Time.svg" alt="">
            <h3>Time</h3>
            <p>The purchase and sale procedures are very fast and above all
                very safe, come and do not waste time</p>
        </div>
    </div>
</section>

<section class="section index-properties container-regular">
    <h2>Properties</h2>

    <?php
    include __DIR__ . "/../includes/PorpertiesItems.php";
    ?>

    <div class="all-properties">
        <a href="/properties" class="button button-viewAll-properties">All</a>
    </div>
</section>


<section class="section index-contact">
    <h2>Contact Us</h2>
    <div class="contact__image">
        <div class="contact__background">
            <div class="contact__information container-regular">
                <p>If you want more information, complete the contact form and our assistant will contact you.</p>
                <a href="/contact" class="button button-contact">Contact</a>

            </div>
        </div>
    </div>
</section>

<section class="section index-blogs container-regular">
    <h2>Our Blog</h2>
    <?php
    include __DIR__ . "/../includes/BlogsItems.php"
    ?>
     <div class="all-blogs">
        <a href="/blogs" class="button button-viewAll-blogs">All</a>
    </div>
</section>