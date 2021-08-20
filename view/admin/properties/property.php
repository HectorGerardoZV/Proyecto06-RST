<div class="icon__crud">
    <img src="/view//img//icons//House.svg" alt="">
</div>

<div class=" container-min">
    <div class="options">
        <a href="/admin/admin/property/create" class="button button-create">New</a>
        <form class="searcher" action="" method="POST">
            <input type="text" placeholder="Search Property">
            <input type="image" src="/view/img/icons//Search.svg" alt="Submit">
        </form>
    </div>

    <?php if (array_key_exists("delete", $_GET)) { ?>
        <?php if ($_GET["delete"] == true) { ?>
            <p class="message-true">Removal was successful</p>
        <?php } ?>
    <?php } ?>


    <div class="content">
        <?php foreach ($properties as $property) { ?>
            <div class="property">
                <div class="property__label">
                    <h3>Image</h3>
                    <h3>Title</h3>
                    <h3>Price</h3>
                    <h3>Action</h3>
                </div>
                <div class="property__values">
                    <img class="property__image" src="/view//img//data//properties//<?php echo $property->getImage() ?>" alt="">
                    <p class="property__title"><?php echo $property->getTitle() ?></p>
                    <p class="property__price">$<?php echo $property->getPrice() ?></p>

                    <div class="property__actions">
                        <a class="button button-update" href="/admin/admin/property/update?idProperty=<?php echo $property->getIdProperty() ?>">Update</a>
                        <form class=""  method="POST">
                            <input type="hidden" name="idProperty" value=<?php echo $property->getIdProperty() ?>>
                            <input class="button button-delete" type="submit" value="Delete">
                        </form>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

</div>