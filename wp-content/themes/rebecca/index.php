<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file 
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


			<?php if ( have_posts() ): ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="post">
					<h2><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<?php the_post_thumbnail( 'thumbnail' ); ?>

					<?php the_excerpt(); ?>
					<a class="readmore" href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark">Read More</a>
				</div>
			<?php endwhile; ?>


			<?php else: ?>
			<h2>No posts to display</h2>
			<?php endif; ?>


			</div>
		</section>

	</div>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/scripts' ) ); ?>

</body>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer' ) ); ?>