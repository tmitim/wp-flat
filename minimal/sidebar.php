<div class="sidebar">

<!--
<img style="background: url('none'); position:relative; left:-10px;" src="<?php get_site_url(); ?>wp-content/themes/blackwhite3/img/profile.png" width=210>
<br>
<div class="boxes">
<span class="postTitle chalkTitle">
recent
</span>
<ul>
<?php wp_get_archives('type=postbypost&limit=2'); ?>
</ul>
</div> -->


<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar(2) ) : ?>
<?php endif; ?>

</div>