<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/header' ) ); ?>

<body class="blue">
	<div id="wrap">
		<nav>
			<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/nav' ) ); ?>
		</nav>

		<section>
			<div class="container">

				
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
				<div id="entry">

					<h1><?php the_title(); ?></h1>
					<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?></time>
					<?php the_content(); ?>

				</div>
				
				<?php endwhile; ?>

				<div id="mark">
					<img src="<?php bloginfo( 'template_url' ); ?>/img/mark.png" class="mark">
				</div>

			</div>

		</section>

	</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/scripts' ) ); ?>

</body>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer' ) ); ?>
