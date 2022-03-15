<?php get_header(); ?>

<h2>인덱스페이지</h2>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<? the_content(); ?>

	<?php endwhile;
else : ?>
	<p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php get_footer(); ?>