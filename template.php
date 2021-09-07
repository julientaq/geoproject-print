<?php
/**
 * Custom Pagedjs Template
 * File: template.php
 *
 */
?>


<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">

	<style type="text/css" id="paged-css">
			<?php $paged_css = get_post_meta( $post->chosenTemplate, templateCSS, true)?>
		</style>

	<?php
		/* Start the Loop */
		// while ( have_posts() ) :

			echo '<style>' . $paged_css  . '</style>';

		// endwhile; // End of the loop.
		?>


		<script src="https://unpkg.com/pagedjs@0.2.0/dist/paged.polyfill.js"></script>
		

	<title>print preview</title>

</head>

<body>
	<p>testprint</p>
</body>
</html>
