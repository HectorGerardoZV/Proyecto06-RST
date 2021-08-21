<section class="section container-regular">
    <div class="property">
        <h2><?php echo $property->getTitle() ?></h2>
        <img class="property__image-single" src="/view//img//data//properties//<?php echo $property->getImage() ?>" alt="">

        <div class="stars">
            <?php
            $stars = intval($property->getStars());
            $stars = 5 - $stars;
            for ($i = 0; $i < 5 - $stars; $i++) { ?>
                <img src="/view//img//icons//Star.svg" alt="">
            <?php } ?>
            <?php for ($i = 0; $i < $stars; $i++) { ?>
                <img src="/view//img//icons//Star-void.svg" alt="">
            <?php } ?>
        </div>

        <p class="property__price">$<?php echo $property->getPrice() ?></p>
        <div class="icons container-min">
            <div class="icon">
                <img src="/view//img//icons//Parking-C.svg" alt="">
                <p><?php echo $property->getParking() ?></p>
            </div>
            <div class="icon">
                <img src="/view//img//icons//Room-C.svg" alt="">
                <p><?php echo $property->getRooms()?></p>
            </div>
            <div class="icon">
                <img src="/view//img//icons//WC-C.svg" alt="">
                <p><?php echo $property->getBethRooms()?></p>
            </div>

        </div>
        <p class="property__description"><?php echo $property->getDescription() ?></p>


    </div>

    <div class="saller container-min">
        <div class="saller__image">
            <img src="/view//img//data//sallers//<?php echo $saller->getImage() ?>" alt="">
        </div>
        <div class="saller__information">
            <h3>Property manager</h3>
            <p><?php echo $saller->getName() . " " . $saller->getLastName() ?></p>
            <p><?php echo $saller->getEmail() ?></p>
            <p><?php echo $saller->getPhoneNumber() ?></p>

        </div>
    </div>
</section>