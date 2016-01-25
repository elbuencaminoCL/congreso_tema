<?php
/*
Template Name: Contacto
*/
?>
<?php get_header(); ?>
	<div class="cont-formulario clearfix">
		<h3><? the_title();?></h3>
		<?php
            global $post;
            if ( has_excerpt( $post->ID ) ) {
                echo '<div class="excerpt">'.get_the_excerpt().'</div>';
            } 
        ?>
		<?php the_content();?>
	</div>
<?php get_footer(); ?>