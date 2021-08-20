<div class="creation-information container-min">
    <a href="/admin/admin/blog" class=" button-back">Back</a>

    <div class="action__logo">
        <img src="/view//img//icons//Blog.svg" alt="">
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



    <h3>Blog Content</h3>
    <fieldset>
        <div class="input">
            <input type="text" placeholder="Title Blog" name="title" value="<?php echo $blog->getTitle() ?>">
            <label for="title">Title</label>
            <?php if (array_key_exists("titleError", $errors)) { ?>
                <p class="input-error"><?php echo $errors["titleError"] ?></p>
            <?php } ?>
        </div>
        <div class="input">
            <input type="text" placeholder="Creator Blog" name="creator" value="<?php echo $blog->getCreator() ?>">
            <label for="creator">Creator</label>
            <?php if (array_key_exists("creatorError", $errors)) { ?>
                <p class="input-error"><?php echo $errors["creatorError"] ?></p>
            <?php } ?>
        </div>

        <div class="input">
            <input type="number" placeholder="Stars Blog" name="stars" value="<?php echo $blog->getStars() ?>" min="1" max="5">
            <label for="stars">Stars</label>
            <?php if (array_key_exists("starsError", $errors)) { ?>
                <p class="input-error"><?php echo $errors["starsError"] ?></p>
            <?php } ?>
        </div>
        <div class="input">
            <textarea name="content"></textarea>
            <label for="content">Content</label>
            <?php if (array_key_exists("contentError", $errors)) { ?>
                <p class="input-error"><?php echo $errors["contentError"] ?></p>
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