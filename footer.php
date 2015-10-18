		<?php if ( is_page('inicio') || is_front_page() ) { ?>
				<footer class="clearfix">
					<div class="container clearfix">
						<p>XIII Congreso Latinoamericano de Rehabilitación de la Cara y Prótesis Maxilofacial 2016. Todos los derechos reservados.</p>
					</div>
				</footer>
			</div>
			<!--POPUP-->
            <?php global $query_string;
            query_posts( $query_string . '&post_type=expositores' );?>
                <?php if (have_posts()) : while (have_posts()) : the_post();  ?>
                    <div id="cv-<? echo $post->post_name;?>" class="hidden-div bMulti">
                            <span class="button b-close"><span>Cerrar</span></span>
                            <div class="content">
                                <h4><? the_title()?></h4>
                                <?the_content();?>
                            </div>
                        </div>       
                <?php endwhile; endif;?>
            <?php wp_reset_query();?>
            <div id="form-inscripcion" class="hidden-div bForm">
                <span class="button b-close"><span>Cerrar</span></span>
                <div class="content">
                    <?php 
                        $page = get_posts(
                            array(
                                'name'      => 'formulario-de-inscripcion',
                                'post_type' => 'page'
                            )
                        );
                        if ($page){
                            echo '<h3 class="title">'.$page[0]->post_title.'</h3>';
                            echo '<div class="excerpt">'.$page[0]->post_excerpt.'</div>';
                            echo do_shortcode( '[contact-form-7 id="20" title="Formulario de Inscripción"]' );
                        }
                    ?>
                </div>
            </div>
            <!--/POPUP-->
    	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.easing.1.3.js"></script>
		<?php } else { ?>
			<footer style="display:none"></footer>
		<?php } ?>
<?php wp_footer(); ?>
</body>
</html>