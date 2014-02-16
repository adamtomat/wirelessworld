<?php
/*
Template Name: Home
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div class="slab slab--blue">
	<div class="inner">
		<div class="intro">
			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; ?>
		</div>
	</div>
	<div class="inner">
		<div class="form-wrapper">
			<?=do_shortcode('[contact-form-7 id="6" title="Contact"]')?>
		</div>
	</div>
</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>