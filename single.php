<?php get_header(); ?>
<div class="row top10">
	<div class="col-md-offset-1 col-md-9 page-post">
			<?php
				$thumb = get_the_post_thumbnail_url();
				if( $thumb):
			?>
					<img src="<?php echo $thumb?>" class="center-block img-responsive"/>
			<?php endif; ?>
			<h1 class="post-title"><?php echo get_the_title(); ?></h1>
			<h6 class="post-info"><em><?php global $post; echo get_the_author($post->author_id);?></em></h6>
		<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
			  the_content();
			endwhile;  
			endif;
		 ?>
	</div>
	<div class="col-md-2 page-post">
	i have a pen, i have an apple
	</div>
</div>
<?php get_footer(); ?>
