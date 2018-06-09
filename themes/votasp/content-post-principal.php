<div class="col">
    <article class="row card noticia noticia-principal">
        <a href="<?php the_permalink(); ?>" class="col-sm-12 col-md-6 thumbnail">
            <?php
                if( has_post_thumbnail() ) {
                    echo odin_thumbnail( 500, 300, get_the_title() );
                } else {
                    the_placeholder_thumbnail();
                }
            ?>
        </a>
        <div class="col-sm-12 col-md-6 card-body">
            <a href="<?php the_permalink(); ?>">
                <h4 class="card-title"><?php the_title() ?></h4>
            </a>
            <a href="<?php the_permalink(); ?>">
                <p class="card-text"><?php echo wp_trim_words( get_the_content(), 25 ); ?></p>
            </a>
            <p><small class="text-muted clock"><?php the_date(); ?></small></p>
        </div>
    </article>
</div>