<div class="col-xs-12 col-sm-6 col-lg-3">
    <article class="card noticia">
        <a href="<?php the_permalink(); ?>" class="thumbnail">
            <?php
                if( has_post_thumbnail() ) {
                    echo odin_thumbnail( 250, 150, get_the_title() );
                } else {
                    the_placeholder_thumbnail();
                }
            ?>
        </a>
        <div class="card-body">
            <a href="<?php the_permalink(); ?>">
                <h4 class="card-title"><?php the_title() ?></h4>
            </a>
            <p><small class="text-muted clock"><?php echo get_the_date(); ?></small></p>
        </div>
    </article>
</div>