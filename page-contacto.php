<?php
/*
Template Name: Contacto
*/
?>
<?php get_header(); ?>
	<div class="cont-formulario clearfix">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<h3><? the_title();?></h3>
			<?php
	            global $post;
	            if ( has_excerpt( $post->ID ) ) {
	                echo '<div class="excerpt">'.get_the_excerpt().'</div>';
	            } 
	        ?>
			<?php the_content();?>
		</div>
	</div>
<?php get_footer(); ?>