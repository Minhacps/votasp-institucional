<section class="banner container-fluid">
    <div class="row">
        <?php the_post_thumbnail(); ?>
    </div>
</section>

<section id="noticias">
    <div class="container">
        <div class="row">
            <?php get_posts_loop(); ?>
        </div>
    </div>
</section>

<section id="projeto">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="bold upper">Como Funciona</h2>
                <?php echo get_post_meta( get_the_ID(), '_o_projeto', true ); ?>
            </div>
        </div>

        <div class="como-funciona">
            <div class="row">
                <div class="col-6 col-lg-3">
                    <figure class="passos passo1">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icone-01.svg" alt="">
                    </figure>
                    <p class="bold">Você responde um questionário de (no mínimo) 21 questões.</p>
                </div>
                <div class="col-6 col-lg-3">
                    <figure class="passos passo2">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icone-02.svg" alt="">
                    </figure>
                    <p class="bold">Nós cruzamos as suas respostas com os candidatos cadastrados.</p>
                </div>
                <div class="col-6 col-lg-3">
                    <figure class="passos passo3">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icone-03.svg" alt="">
                    </figure>
                    <p class="bold">Te informamos quem dos candidatos pensa mais parecido com você.</p>
                </div>
                <div class="col-6 col-lg-3">
                    <figure class="passos passo4">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icone-04.svg" alt="">
                    </figure>
                    <p class="bold">Você pode olhar as respostas e perfil de todos eles.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="realizacao" >
    <div class="container">

        <div class="row text-center">
            <div class="col">
                <h2 class="bold upper">Realização</h2>
                <br />
                <?php echo get_post_meta( get_the_ID(), '_realizacao', true ); ?>
            </div>
        </div>
        <?php do_action( 'realizadores_home' ); ?>

    </div>
</section>
