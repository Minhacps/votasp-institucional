<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main div element.
 *
 * @package Odin
 * @since 2.2.0
 */
?>

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col contato d-none d-lg-block col-lg-3 ">
					<h4 class="bold upper">Fale Conosco</h4>                        
					<div class="email">
						<a href="mailto:contato@minhacampinas.org.br">contato@minhacampinas.org.br</a>
					</div>
					<div class="tel">
						<a href="tel:01925152252">(19) 2515-2252</a>
					</div>
				</div>
				<div class="ajude d-flex align-items-center justify-content-center justify-content-lg-start flex-lg-column col-sm-12 col-lg-2">
					<h4 class="bold upper">Ajude o projeto</h4>
					<a href="https://benfeitoria.com/votasp" target="_blank" class="btn btn-primary">Contribua!</a>
				</div>
				<div class="d-flex align-items-center justify-content-center justify-content-lg-start col-sm-12 col-lg-7 realizacao">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-minhacampinas.png" alt="Logo Minha Campinas">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-frontcampinas.png" alt="Logo Front End Campinas">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-institutosp.png" alt="Logo IFSP Campinas">
				</div>
			</div>
		</div>
	</footer>

	<?php wp_footer(); ?>	
    <script>
        jQuery(document).ready(function(){
			var realizadores = jQuery('#colaboradores.slider');

			if( realizadores ) {
				realizadores.bxSlider({
					minSlides: 3,
					maxSlides: 7,
					slideWidth: 150,
					moveSlides: 1,
					hideControlOnEnd: true,
					pager: false,
					auto: true,
				});
			}
        });
	</script>
</body>
</html>
