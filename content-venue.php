<?php
/**
 * Template for displaying venue custom post type entries
 */
?>	
<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">

		<h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

		<div class="entry-meta">
			<p>Location: <?php the_field('location'); ?></p>
			<p>Contact: <?php the_field('contact'); ?></p>
			<p>Book Now: <?php the_field('booknow'); ?></p>
		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<div class="entry-content">

		<p><img src="<?php the_field('image'); ?>" alt="Example image of <?php the_title(); ?>"></p>
		<p><?php the_field('description'); ?></p>


	</div><!-- .entry-content -->	
	</article><!-- #post -->

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->
