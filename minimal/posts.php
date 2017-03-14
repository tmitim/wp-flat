<div class="postContainer">

<?php
	if (is_home()){
		$args = array(
			'date_query' => array(
				array(
					'after'     => 'January 1st, 2013',
				),
			),
			'posts_per_page' => -1,
		);
		$query = new WP_Query( $args );
	}
?>
<?php $count = 6 ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>

<div class="postMargin">
<div class="postShadow">

<?php if (has_post_thumbnail()) : ?>
<?php the_post_thumbnail('medium'); ?>
<?php endif; ?>

<div class="post">
	<a href="<?php the_permalink() ?>">
		<span class="postTitle"><strong><?php the_title(); ?></strong></span>
	</a>
	<div class="postInfo">
		<?php the_time('m.d.y') ?> // <?php echo get_the_author(); ?>
	</div>

<div id="post-<?php the_ID(); ?>" class="postContent">

	<?php $count+= 1 ;?>
	<?php the_content(); ?>

	<?php the_tags( '<div class="tags">Tags: ', ', ', '</div>' ); ?>

	<div class="commentHead">
		<p class="commentBlock">
			<?php if (!is_page()) : ?>
				<?php comments_popup_link('0', '1', '%'); ?>
			<?php endif; ?>
		</p>
	</div>
</div>

</div>
</div>
</div>

<div class="commentArea">
	<!-- Closes Post -->
	<?php comments_template(); // Get wp-comments.php template ?>
</div>

<?php endwhile; ?>
<?php else : ?>


<!-- end -->
Not Found

Sorry, but you are looking for something that isn't here.
<!-- Closes Post -->

<?php endif; ?>

<div style="text-align: center">
	<?php posts_nav_link(' &#183; ', 'previous', 'next'); ?>
</div>

</div>
<div style="clear: both;"></div>