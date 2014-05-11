<?php
/*
Template Name: Home
*/
?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div class="inner">
	<div class="content">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>

		<h2>Who Runs the Event?</h2>
		<div class="row">
			<div class="large-6 columns small-6">
				<div class="organiser">
					<div class="organiser__image">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/lanparty/images/biles.jpeg" />
					</div>
					<span class="organiser__name">Oliver Biles</span>
					<a href="http://twitter.com/OliverBiles" class="organiser__twitter">@OliverBiles</a>
				</div>
			</div>
			<div class="large-6 columns small-6">
				<div class="organiser">
					<div class="organiser__image">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/lanparty/images/henry.png" />
					</div>
					<span class="organiser__name">Henry Garle</span>
					<!-- <a href="http://twitter.com/henrygarle" class="organiser__twitter">@henrygarle</a> -->

				</div>
				
			</div>
		</div>

		<h2>Previous attendees</h2>
		<div class="attendees">
			<?php $names = array('10shinhan', 'Biles', 'BoBaCk', 'Jordeh', 'Nut315', 'Tman', 'George'); 
			sort($names);

			foreach ($names as $name) : ?>
				<div class="attendee"><span class="attendee__name"><?php echo $name; ?></span></div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>