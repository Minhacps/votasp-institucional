<li class="colaboradores-item">
    <?php the_post_thumbnail( [100, 100] ); ?>
    <p><?php the_title(); ?></p>
    <span><?php echo get_post_meta( get_the_ID(), '_colaborou_com', true ); ?></span>
</li>