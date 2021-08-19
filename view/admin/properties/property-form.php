<div class="creation-information container-min">
    <a href="/admin/admin/property" class=" button-back">Back</a>

    <div class="action__logo">
        <img src="/view//img//icons//Logo-Min-Blue.svg" alt="">
        <h2><?php echo $crudAction ?></h2>
    </div>
</div>


<form action="" method="POST" class="container-min form" enctype="multipart/form-data">
    <?php if (array_key_exists("creation", $_GET)) { ?>
        <?php if ($_GET["creation"] == true) { ?>
            <p class="message-true">The creation was successful</p>
        <?php } else { ?>
            <p class="message-flase">The creation was failed</p>
        <?php } ?>
    <?php } ?>

    <?php if (array_key_exists("update", $_GET)) { ?>
        <?php if ($_GET["update"] == true) { ?>
            <p class="message-true">The update was successful</p>
        <?php } else { ?>
            <p class="message-flase">The update was failed</p>
        <?php } ?>
    <?php } ?>



    <h3>House Information</h3>
    <fieldset>
        <div class="input">
            <input type="text" placeholder="House Title" name="title" value="<?php echo $property->getTitle() ?>">
            <label for="title">Title</label>
            <?php if (array_key_exists("titleError", $errors)) { ?>
                <p class="input-error"><?php echo $errors["titleError"] ?></p>
            <?php } ?>
        </div>
        <div class="input">
            <input type="number" placeholder="House Price" name="price" min="1" value="<?php echo $property->getPrice() ?>">
            <label for="price">Price</label>
            <?php if (array_key_exists("priceError", $errors)) { ?>
                <p class="input-error"><?php echo $errors["priceError"] ?></p>
            <?php } ?>
        </div>
        <div class="input">
            <input type="file" name="image">
            <label for="image">Image</label>
            <?php if (array_key_exists("imageError", $errors)) { ?>
                <p class="input-error"><?php echo $errors["imageError"] ?></p>
            <?php } ?>

            <?php if ($action == "update") { ?>
                <div class="flex-image-update">
                    <img class="image-update" src="/view//img//data//properties//<?php echo $property->getImage() ?>" alt="">

                </div>
            <?php } ?>
        </div>
        <div class="input">
            <textarea name="description"><?php echo $property->getDescription() ?></textarea>
            <label for="description">Description</label>
            <?php if (array_key_exists("descriptionError", $errors)) { ?>
                <p class="input-error"><?php echo $errors["descriptionError"] ?></p>
            <?php } ?>
        </div>

    </fieldset>
    <h3>About the property</h3>
    <fieldset>
        <div class="property-about">
            <div class="input">
                <input type="number" name="parking" min="1" value="<?php echo $property->getParking() ?>">
                <label for="parking">parking</label>
                <?php if (array_key_exists("parkingError", $errors)) { ?>
                    <p class="input-error"><?php echo $errors["parkingError"] ?></p>
                <?php } ?>
            </div>
            <div class="input">
                <input type="number" name="rooms" min="1" value="<?php echo $property->getRooms() ?>">
                <label for="rooms">Rooms</label>
                <?php if (array_key_exists("roomsError", $errors)) { ?>
                    <p class="input-error"><?php echo $errors["roomsError"] ?></p>
                <?php } ?>
            </div>
            <div class="input">
                <input type="number" name="bethrooms" min="1" value="<?php echo $property->getBethRooms() ?>">
                <label for="bethrooms">BethRooms</label>
                <?php if (array_key_exists("bethRoomsError", $errors)) { ?>
                    <p class="input-error"><?php echo $errors["bethRoomsError"] ?></p>
                <?php } ?>
            </div>
            <div class="input">
                <input type="number" name="stars" min="1" value="<?php echo $property->getStars() ?>">
                <label for="stars">Stars</label>
                <?php if (array_key_exists("starsError", $errors)) { ?>
                    <p class="input-error"><?php echo $errors["starsError"] ?></p>
                <?php } ?>
            </div>

        </div>
        <div class="input">
            <select name="idSaller">
                <option value="" disabled selected>--Select--</option>
                <?php foreach ($sallers as $saller) {   ?>
                    <option <?php echo intval($property->getIdSaller()) === intval($saller->getIdSaller()) ? 'selected' : '' ?> value="<?php echo $saller->getIdSaller() ?>"><?php echo $saller->getName() . " " . $saller->getLastName() ?></option>
                <?php }   ?>
            </select>
            <label for="">Saller</label>
            <?php if (array_key_exists("idSaller", $errors)) { ?>
                <p class="input-error"><?php echo $errors["idSaller"] ?></p>
            <?php } ?>
        </div>


    </fieldset>
    <div class="send">
        <input type="submit" class="button button-send" value="<?php echo strtoupper($action) ?>">
    </div>
</form>