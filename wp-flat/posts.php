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
<?php $count = rand(0,32) ?>
<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>



<div class="postTitleBlock 
<?php 
if ($count % 5 == 0){
	echo "postTitleTopBlock0";
} else if ($count % 5 == 1){
	echo "postTitleTopBlock1";
}else if ($count % 5 == 2){
	echo "postTitleTopBlock2";
}else if ($count % 5 == 3){
	echo "postTitleTopBlock3";
} else echo "postTitleTopBlock4";
?>
">

<div style="float:right; padding-right: 10px; padding-top: 3px; color: #d4d4d4; font-size: 8px;"><?php the_time('m.d.y') ?></div><a href="<?php the_permalink() ?>">
<span class="postTitle"><strong><?php the_title(); ?></strong></span>
</a>
</div>
<div class="postContent
<?php 
if ($count % 5 == 0){
	echo "postTitleBotBlock0";
} else if ($count % 5 == 1){
	echo "postTitleBotBlock1";
}else if ($count % 5 == 2){
	echo "postTitleBotBlock2";
}else if ($count % 5 == 3){
	echo "postTitleBotBlock3";
} else echo "postTitleBotBlock4";
?>

">
<?php $count+= 1 ;?>
<?php the_content(); ?><br>
<div style="text-align: right"><div class="postHead">
<!-- <?php the_author(); ?> / <?php the_tags(' / ', ', ', ''); ?> -->

<p class="commentBlock">
	<?php comments_popup_link('0', '1', '%'); ?>
</p>
</div></div>
</div>

<div class="commentArea">

<!-- Closes Post -->
<?php comments_template(); // Get wp-comments.php template ?>

</div>
<!-- <div class="bottomshadow"></div> -->

<br><br><br>



<?php endwhile; ?>
<?php else : ?>


<!-- end -->




Not Found

Sorry, but you are looking for something that isn't here.
<!-- Closes Post -->

<?php endif; ?>
<h2 class="postTitle">
<div style="text-align:left; font-size: 14px;">

<div style="text-align: center";>
<?php posts_nav_link(' &#183; ', 'previous', 'next'); ?></div>
</div>
</h2>

<br><br><br>
</div>
<div style="clear: both;"></div>