<div class="properties-layout">
    <?php foreach ($properties as $property) { ?>
        <div class="property__cart">
            <div class="property__content">
                <div class="property__image">
                    <img src="/view//img//data//properties//<?php echo $property->getImage() ?>" alt="">

                </div>
                <h3><?php echo $property->getTitle() ?></h3>
                <p>$<?php echo $property->getPrice() ?></p>
            </div>

            <div class="view">
                <a class="button button-view" href="/property?idProperty=<?php echo $property->getIdProperty()?>">VIEW</a>
            </div>
        </div>

    <?php } ?>
</div>