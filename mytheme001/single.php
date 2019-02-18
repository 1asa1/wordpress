<?php get_header(); ?>

	<?php if(have_posts()): while(have_posts()):the_post();?>
	<!-- もし何かポストが有った場合 -->

	<section>
		<h2>
			<a href="<?php the_permalink(); ?>">
			<!-- 記事内部のリンク呼び出し -->
				<?php the_title(); ?>
				<!-- 記事のタイトル -->
			</a>
		</h2>
		<p><?php echo get_the_date('Y/n/j');?></p>
		<!-- 投稿日時の表示 -->
	
		<div class="contents_area">
			<?php the_content();?>
			<!-- コンテンツの本文の呼び出し -->
		</div><!-- /.contents_area -->
	
	
		<?php endwhile; endif; ?>
	</section>

<?php get_footer();?>