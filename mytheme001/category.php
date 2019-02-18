<?php get_header(); ?>
<section>
	<?php
		// 変数categoryに、wordpressのカテゴリーを取得して入れる
		$category = get_the_category();
		// 変数cat_name（カテゴリーネーム）に、カテゴリー名を取り出して入れる
		$cat_name = $category[0] -> cat_name;
	?>

	<ul>
		<?php if(have_posts()): while(have_posts()):the_post(); ?>
	
		<li>
			<span class="red">
				<!-- 変数cat_nameに変数を入れておいたおかげでカテゴリー名が表示される -->
				<?php echo $cat_name; ?>
			</span>
			<span>
				<?php echo get_the_date('Y/n/j'); ?>
			</span>
			<a href="<?php the_permalink(); ?>">
				<?php the_title(); ?>
			</a>
		</li>
			
	</ul>
		<?php endwhile; endif; ?>
	
</section>

<?php get_footer();?>