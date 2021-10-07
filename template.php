<?php

/**
 * Custom Pagedjs Template
 * File: template.php
 *
 */
?>


<!-- include data map js  -->

<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">



  <style type="text/css" id="paged-css">
    <?php $paged_css = get_post_meta($post->chosenTemplate, templateCSS, true) ?>
  </style>

  <!-- add the css from the template -->
  <?php echo '<style>' . $paged_css  . '</style>'; ?>




  <!-- leaflet -->

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>


  <?php include 'debug.php' ?>
  <?php include 'pagedjs-interface.php' ?>


  <!-- pagedjs -->
  <!-- <script src="https://unpkg.com/pagedjs@0.2.0/dist/paged.polyfill.js"></script> -->

  <title><?php the_title() ?></title>




</head>

<body>


  <section class="project">
    <!-- print projct first -->
    <?php
    include 'types/print-project.php'
    ?>
  </section>
  <!-- add project page stuff -->
  <?php
  $project_ID = get_the_ID();

  $args = array(
    'post_type' => array('markers', 'post', 'projects', 'geoformats', 'geoformat', 'maps', 'capes'),
    'meta_key' => 'gp_project',
    'meta_value' => $project_ID,
    'meta_value_type'   => 'numeric',
    'posts_per_page' => -1,
    'orderby' => 'paged-order',
    'order' => 'ASC'
  );

  $wp_query = new WP_Query();
  $wp_query->query($args); ?>





  <?php if ($wp_query->have_posts()) :  while ($wp_query->have_posts()) : $wp_query->the_post();

      $postType = get_post_type($post);
      // to find the post type
      // echo ('<p>' . $postType . '</p>');

      // to debug

      // add post et page stuff

      // add shortcode (`[map src="http://localhost:8889/maps/export/12/" width="100%" height="550px"]`)
      // attention à l’id déjà donnée de la map id.


      // echo $postType;
      if ($postType === 'geoformat') {
        include 'types/print-geoformat.php';
      
      } elseif ($postType === 'maps') {
        include 'types/print-maps.php';
        
      } elseif ($postType  === 'post') {
        
        // include 'types/reusable/showAllMeta.php';
        include 'types/print-posts.php';
      } elseif ($postType  === 'capes') {
        // include 'types/reusable/showAllMeta.php';
        include 'types/print-capes.php';
      }

    endwhile;
  endif; ?>

  <?php include 'pagedjs-hooks.php' ?>

</body>

</html>