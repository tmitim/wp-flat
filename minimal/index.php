<html <?php language_attributes(); ?>>
<?php include ('header.php'); ?>

<div class="container">
	<?php include ('left.php'); ?>
	<?php include ('sidebar.php'); ?>
	<?php include ('posts.php'); ?>
</div>

<?php wp_footer(); ?>
<?php include_once("analytics.php"); ?>

</body>
</html>
<?php wp_reset_postdata(); ?>

<script>

function hitBlink(){
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = function() { 
        if (xmlHttp.readyState == 4 && xmlHttp.status == 200)
            console.log(xmlHttp.responseText);
    }
    xmlHttp.open("GET", "/blink?title=<?php echo get_the_title(); ?>", true); // true for asynchronous 
    xmlHttp.send(null);
}

function playVideo(x) {
   x.play();
}

function pauseVideo(x) {
   x.pause();
}
</script>

<script>
var XFoo = document.registerElement('side-note');
</script>