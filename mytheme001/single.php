<?php get_header(); ?>

	<?php if(have_posts()): while(have_posts()):the_post();?>
	<!-- もし何かポストが有った場合 -->

	<section>
		<h2>
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</h2>
		<p><?php echo get_the_date('Y/n/j');?></p>
	
		<div class="contents_area">
			<?php the_content();?>
		</div><!-- /.contents_area -->
	
	
		<?php endwhile; endif; ?>
	</section>

<?php get_footer();?>