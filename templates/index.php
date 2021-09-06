<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">

	<title>print preview</title>
	<?php
		/* Start the Loop */
		while ( have_posts() ) :
			$css = $post->chosenTemplate;

			echo '<style' . get_post_meta($css, templateCSS, true) . '</style>';

		endwhile; // End of the loop.
		?>

		<script src="https://unpkg.com/browse/pagedjs@0.2.0/dist/paged.polyfill.js"></script>
		

</head>

<body>
	
<!-- 

<?php 
$project_ID = get_the_ID();

$args = array( 
    'post_type'   	=> array('post', 'geoformat', 'maps', 'markers', 'capes'),
    'meta_key' 	=> 'gp_project',
    'meta_value' => $project_ID,
    'meta_value_type' 	=> 'numeric',
    'posts_per_page' => -1
);

$wp_query = new WP_Query();
$wp_query->query( $args ); ?>

<?php if ($wp_query->have_posts()) :  while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
    <section>
		<h2><?php the_title(); ?></h2>
		<div>
			<?php the_post() ?>
		</div>
	</section>	
<?php endwhile; endif; ?>



	</div>
</body>
</html>
