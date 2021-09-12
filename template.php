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
    <?php $paged_css = get_post_meta($post->chosenTemplate, templateCSS, true) ?>
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


  <section class="project">
    <?php include 'types/print-project.php' ?>
  </section>
  <!-- add project page stuff -->
  <?php
  $project_ID = get_the_ID();

  $args = array(
    'post_type'     => array('post', 'project', 'geoformat', 'maps', 'markers', 'capes'),
    'meta_key'   => 'gp_project',
    'meta_value' => $project_ID,
    'meta_value_type'   => 'numeric',
    'posts_per_page' => -1,
    'orderby' => 'paged-order',
    'order' => 'UP'
  );

  $wp_query = new WP_Query();
  $wp_query->query($args); ?>




  <?php if ($wp_query->have_posts()) :  while ($wp_query->have_posts()) : $wp_query->the_post();

      if ($postType = get_post_type($post) === 'geoformat') {
        include 'types/print-geoformat.php';
      } elseif ($postType = get_post_type($post) === 'maps') {
        // include 'types/print-maps.php';
      } elseif ($postType = get_post_type($post) === 'markers') {
        // include 'types/print-markers.php';
      } elseif ($postType = get_post_type($post) === 'capes') {
        // include 'types/print-capes.php';
      }

    endwhile;
  endif; ?>

</body>

</html>