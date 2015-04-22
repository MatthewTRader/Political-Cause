<?php  /* Template Name: Template Faces Page */  get_header(); ?> 

	<main role="main">
		<!-- section -->
		<section>
			<div class="wrapper facesHeader">
			<h2><span id="totalPeople">0</span> people have uploaded their selfie with a total of <span>$</span><span id="totalDebt">0</span> of school debt with an average of <span>$</span><span id="averageDebt">0</span> per person</h2>
            </div>
		<?php if (have_posts()): while (have_posts()) : the_post(); ?>
			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_content(); ?>
				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>
            
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
