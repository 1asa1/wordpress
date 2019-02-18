<?php get_header(); ?>

	<p>Wordpress!</p>

	<ul>
		<?php if(have_posts()): while(have_posts()):the_post(); ?>
		<li>
			<span><?php echo get_the_date('Y年n月j日'); ?></span><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</li>
		<?php endwhile; endif; ?>
	</ul>

<?php get_footer(); ?>　