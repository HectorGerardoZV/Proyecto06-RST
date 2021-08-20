<div class="icon__crud">
    <img src="/view//img//icons//Blog.svg" alt="">
</div>

<div class=" container-min">
    <div class="options">
        <a href="/admin/admin/blog/create" class="button button-create">New</a>
        <form class="searcher" action="" method="POST">
            <input type="text" placeholder="Search Blog" name="pattern">
            <input type="image" src="/view/img/icons//Search.svg" alt="Submit">
        </form>
    </div>

    <?php if (array_key_exists("delete", $_GET)) { ?>
        <?php if ($_GET["delete"] == true) { ?>
            <p class="message-true">Removal was successful</p>
        <?php } ?>
    <?php } ?>


    <div class="content">
        <?php foreach ($blogs as $blog) { ?>
            <div class="blog">
                <div class="blog__label">
                    <h3>Image</h3>
                    <h3>Title</h3>
                    <h3>By</h3>
                    <h3>Action</h3>
                </div>
                <div class="blog__values">
                    <img class="blog__image" src="/view//img//data//blogs//<?php echo $blog->getImage() ?>" alt="">
                    <p class="blog__title"><?php echo $blog->getTitle()?></p>
                    <p class="blog__by"><?php echo $blog->getCreator() ?></p>

                    <div class="blog__actions">
                        <a class="button button-update" href="/admin/admin/blog/update?idBlog=<?php echo $blog->getIdBlog() ?>">Update</a>
                        <a class="button button-delete" href="/admin/admin/blog/delete?idBlog=<?php echo $blog->getIdBlog() ?>">Delete</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

</div>