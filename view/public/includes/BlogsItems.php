<div class="blog-layout">
    <?php foreach ($blogs as $blog) { ?>
        <div class="blog__cart">
            <div class="blog__image">
                <img src="/view//img//data//blogs//<?php echo $blog->getImage() ?>" alt="">
            </div>
            <div class="blog__content">
                <h3><?php echo $blog->getTitle() ?></h3>

                <a href="/blog?idBlog=<?php echo $blog->getIdBlog()?>">View</a>
            </div>
        </div>
    <?php } ?>
</div>