<div class="creation-information container-min">
    <a href="/admin/admin/property" class=" button-back">Back</a>

    <div class="action__logo">
        <img src="/view//img//icons//Logo-Min-Blue.svg" alt="">
        <h2><?php echo $crudAction ?></h2>
    </div>
</div>


<form action="" method="POST" class="container-min form">

    <h3>House Information</h3>
    <fieldset>
        <div class="input">
            <input type="text" placeholder="House Title" name="title">
            <label for="title">Title</label>
            <?php if (!empty($errors)) { ?>
                <p class="input-error"><?php echo $errors["titleError"] ?></p>
            <?php } ?>
        </div>
        <div class="input">
            <input type="number" placeholder="House Price" name="price" min= "1">
            <label for="price">Price</label>
            <?php if (!empty($errors)) { ?>
                <p class="input-error"><?php echo $errors["priceError"] ?></p>
            <?php } ?>
        </div>
        <div class="input">
            <input type="file" name="image">
            <label for="image">Image</label>
            <?php if (!empty($errors)) { ?>
                <p class="input-error"><?php echo $errors["imageError"] ?></p>
            <?php } ?>
        </div>
        <div class="input">
            <textarea name="description"></textarea>
            <label for="description">Description</label>
            <?php if (!empty($errors)) { ?>
                <p class="input-error"><?php echo $errors["descriptionError"] ?></p>
            <?php } ?>
        </div>

    </fieldset>
    <h3>About the property</h3>
    <fieldset>
        <div class="property-about">
            <div class="input">
                <input type="number" name="parking" min="1">
                <label for="parking">parking</label>
                <?php if (!empty($errors)) { ?>
                    <p class="input-error"><?php echo $errors["titleError"] ?></p>
                <?php } ?>
            </div>
            <div class="input">
                <input type="number" name="parking" min="1">
                <label for="parking">parking</label>
                <?php if (!empty($errors)) { ?>
                    <p class="input-error"><?php echo $errors["titleError"] ?></p>
                <?php } ?>
            </div>
            <div class="input">
                <input type="number" name="parking" min="1">
                <label for="parking">parking</label>
                <?php if (!empty($errors)) { ?>
                    <p class="input-error"><?php echo $errors["titleError"] ?></p>
                <?php } ?>
            </div>
            <div class="input">
                <input type="number" name="parking" min="1">
                <label for="parking">parking</label>
                <?php if (!empty($errors)) { ?>
                    <p class="input-error"><?php echo $errors["titleError"] ?></p>
                <?php } ?>
            </div>
        </div>



    </fieldset>

</form>