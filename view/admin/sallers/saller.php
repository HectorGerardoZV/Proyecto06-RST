<div class="icon__crud">
    <img src="/view//img//icons//Saller.svg" alt="">
</div>

<div class=" container-min">
    <div class="options">
        <a href="/admin/admin/saller/create" class="button button-create">New</a>
        <form class="searcher" action="" method="POST">
            <input type="text" placeholder="Search Saller" name="pattern">
            <input type="image" src="/view/img/icons//Search.svg" alt="Submit">
        </form>
    </div>

<?php if (array_key_exists("delete", $_GET)) { ?>
        <?php if ($_GET["delete"] == true) { ?>
            <p class="message-true">Removal was successful</p>
        <?php } ?>
    <?php } ?>


    <div class="content">
        <?php foreach ($sallers as $saller) { ?>
            <div class="saller">
                <div class="saller__label">
                    <h3>Image</h3>
                    <h3>Name</h3>
                    <h3>Phone.N</h3>
                    <h3>Action</h3>
                </div>
                <div class="saller__values">
                    <img class="saller__image" src="/view//img//data//sallers//<?php echo $saller->getImage() ?>" alt="">
                    <p class="saller__name"><?php echo $saller->getName() . " ".$saller->getLastName() ?></p>
                    <p class="saller__phone"><?php echo $saller->getPhoneNumber() ?></p>

                    <div class="saller__actions">
                        <a class="button button-update" href="/admin/admin/saller/update?idSaller=<?php echo $saller->getIdSaller()?>">Update</a>
                        <a class="button button-delete" href="/admin/admin/saller/delete?idSaller=<?php echo $saller->getIdSaller()?>">Delete</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

</div>