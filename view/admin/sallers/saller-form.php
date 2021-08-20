<div class="creation-information container-min">
    <a href="/admin/admin/saller" class=" button-back">Back</a>

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



    <h3>Saller Information</h3>
    <fieldset>
        <div class="input">
            <input type="text" placeholder="Saller Name" name="name" value="<?php echo $saller->getName() ?>">
            <label for="name">Name</label>
            <?php if (array_key_exists("nameError", $errors)) { ?>
                <p class="input-error"><?php echo $errors["nameError"] ?></p>
            <?php } ?>
        </div>
        <div class="input">
            <input type="text" placeholder="Saller Last Name" name="lastName" min="1" value="<?php echo $saller->getLastName() ?>">
            <label for="lastName">Last Name</label>
            <?php if (array_key_exists("lastNameError", $errors)) { ?>
                <p class="input-error"><?php echo $errors["lastNameError"] ?></p>
            <?php } ?>
        </div>
        <div class="input">
            <input type="email" placeholder="Saller E-Mail" name="email" min="1" value="<?php echo $saller->getEmail() ?>">
            <label for="email">E-Mail</label>
            <?php if (array_key_exists("emailError", $errors)) { ?>
                <p class="input-error"><?php echo $errors["emailError"] ?></p>
            <?php } ?>
        </div>
        <div class="input">
            <input type="number" placeholder="Saller Phone Number" name="phoneNumber" min="1" value="<?php echo $saller->getPhoneNumber() ?>">
            <label for="phoneNumber">Phone Number</label>
            <?php if (array_key_exists("phoneNumberError", $errors)) { ?>
                <p class="input-error"><?php echo $errors["phoneNumberError"] ?></p>
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
                    <img class="image-update" src="/view//img//data//sallers/<?php echo $saller->getImage() ?>" alt="">
                </div>
            <?php } ?>
        </div>

    </fieldset>
    <div class="send">
        <input type="submit" class="button button-send" value="<?php echo strtoupper($action) ?>">
    </div>

</form>