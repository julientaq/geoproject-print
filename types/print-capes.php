<section class="capes">

  <aside class="meta">
    <?php printf('<p>tiles providers:' . get_post_meta(get_the_id(), 'gp_tiles_provider', true) . '</p>'); ?>

  </aside>
  <h2><?php the_title(); ?></h2>
  <article> <?php the_content(); ?></article>

  <?php

  $postmetas = get_post_meta($post->ID);
  foreach ($postmetas as $meta_key => $meta_values) {
    if (strpos($meta_key, 'gp_polyline') === 0 && !empty($meta_key)) {

      foreach ($meta_values as $meta_value) {
        $nbPolyline++;

        $inputName = str_replace('gp_', 'gp-', $meta_key);
        $inputNames[] = str_replace('gp_', '', $meta_key);
        $meta_value = str_replace('"', '', $meta_value);
        $inputValues[] = str_replace('gp_', '', $meta_value);
      }
    }
  }
  if ($nbPolyline != 0) {
    $hasPolyline = true;
    $constantes_list = implode(',', $inputNames);
    $concat_polylines = implode(',', $inputValues);
    $search = array('{', '}', 'lat:', 'lng:');
    $replace = array('[', ']', '', '');

    $concat_polylines = str_replace($search, $replace, $concat_polylines);

    printf('<p>polyline values:' . $concat_polylines . '</p>');
  } ?>
  </div>






</section>