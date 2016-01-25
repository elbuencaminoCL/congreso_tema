<?php get_header(); ?>
	<div class="main">
        <div class="container">
        	<div class="content">
        		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	        		<div class="row">
	        			<div class="col-xs-12">
	        				<?php include("includes/carousel.php"); ?>
	        			</div>
	        		</div>
	        		<div class="row">
		          		<div class="col-xs-12">
		          			<div class="quienes-somos">
			          			<h3 style="text-transform:uppercase;"><?php the_title();?></h3>
			          			<div class="row">
			          				<div class="col-xs-12">
			          					<div class="textos">
			          						<?php if($post->post_excerpt){
			          							echo '<div class="bajada">'.$post->post_excerpt.'</div>';
			          						} ?>
			          						<?php the_content();?>
			          					</div>
			          				</div>
			          			</div>
		          			</div>
		          		</div>
	        		</div>
	        	<?php endwhile; else: ?>
					<div class="col-xs-12">
			          	<p class="textos">Lo sentimos, el contenido que buscas no se encuentra disponible.</p>
					</div>
				<?php endif; ?>
        	</div>
        </div>
    </div>
<?php get_footer(); ?>