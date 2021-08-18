<div class="icon__crud">
    <img src="/view//img//icons//House.svg" alt="">
</div>

<div class=" container-min">
    <div class="options">
        <a href="" class="button button-create">New</a>
        <form class="searcher" action="" method="POST">
            <input type="text" placeholder="Search Property">
            <input type="image" src="/view/img/icons//Search.svg" alt="Submit">
        </form>
    </div>

    <?php
    if($_GET){
       echo "<pre>";
       var_dump($_GET);
       echo "</pre>";
    }
    
    ?>
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
                    <img class="property__image" src="/view//img//data//properties//<?php echo$property->getImage()?>" alt="">
                    <p class="property__title"><?php echo $property->getTitle() ?></p>
                    <p class="property__price">$<?php echo $property->getPrice() ?></p>

                    <div class="property__actions">
                        <a class="action__update" href="/admin/admin/property?idProperty=<?php echo $property->getIdProperty()?>">Update</a>
                        <form class="" action="" method="POST">
                            <input type="hidden" name="idProperty" value=<?php echo $property->getIdProperty()?>>
                            <input class="action__delete" type="submit" value="Delete">
                        </form>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

</div>