<section class="section container-regular">
    <div class="blog">
        <h2><?php echo $blog->getTitle() ?></h2>
        <img class="blog__image-single" src="/view//img//data//blogs//<?php echo $blog->getImage() ?>" alt="">
        <div class="stars">
            <?php
            $stars = intval($blog->getStars());
            $stars = 5 - $stars;
            for ($i = 0; $i < 5 - $stars; $i++) { ?>
                <img src="/view//img//icons//Star.svg" alt="">
            <?php } ?>
            <?php for ($i = 0; $i < $stars; $i++) { ?>
                <img src="/view//img//icons//Star-void.svg" alt="">
            <?php } ?>
        </div>
        <p>By: <?php echo $blog->getCreator() ?></p>

        <h3 class="">Instructions</h3>
        <div class="instructions__content">
            <p><?php echo $blog->getContent() ?></p>
        </div>
    </div>


</section>