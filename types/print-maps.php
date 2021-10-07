<section class="maps">

<!-- get all the meta  -->


<!-- <p>cette carte appartient au projet 
    <?php printf(get_post_meta(get_the_ID(), 'gp_project', true)) 
    ?></p> -->


<?php // 1. create the map to put the marker on ?>

<header>
    <?php 'reusable/getThumbnail.php' ?>

    <h2> <?php the_title(); ?></h2>

</header>

<div class="content"><?php the_content(); ?></div>

<!-- meta data for the map -->

<div class="map-container" id="map-<?php print(get_the_ID()) ?>" data-map="<?php print(get_the_ID()) ?>" data-zoom="<?php printf(get_post_meta(get_the_ID(), 'gp_tiles_zoom', true)); ?>" data-tiles="<?php printf(get_post_meta(get_the_ID(), 'gp_tiles_provider', true)); ?>">
</div>




<?php



// 2. add a section per marker of the map

//get the map id to get the markers
$map_ID = $post->id;


$argMarkers = array(
    'post_type'     => array('markers'),
    'meta_key'   => 'gp_map',
    'meta_value' => $map_ID,
    'meta_value_type'   => 'numeric',
    'posts_per_page' => -1
);


$wp_queryMarkers = new WP_Query();
$wp_queryMarkers->query($argMarkers);


if ($wp_queryMarkers->have_posts()) :  while ($wp_queryMarkers->have_posts()) : $wp_queryMarkers->the_post();

        // $id = the_ID();
        $gp_lat =  get_post_meta(get_the_ID(), 'gp_lat', true);
        $gp_lng =  get_post_meta(get_the_ID(), 'gp_lng', true);
        $gp_map =  get_post_meta(get_the_ID(), 'gp_map', true);
        $gp_tiles_provider =  get_post_meta(get_the_ID(), 'gp_tiles_provider', true);
        $gp_icon_type =  get_post_meta(get_the_ID(), 'gp_icon_type', true);
        $gp_icon_filename =  get_post_meta(get_the_ID(), 'gp_icon_filename', true);
        $display_image_une = get_post_meta(get_the_ID(), 'display_image_une', true);

        // popup stuff
        $gp_popup_content_order = explode(',', get_post_meta(get_the_ID(), 'gp_popup_content_order', true));
        $gp_popup_text = get_post_meta(get_the_ID(), 'gp_popup_text', true);
        $gp_popup_image = get_post_meta(get_the_ID(), 'gp_popup_image', true);
        $gp_popup_video = get_post_meta(get_the_ID(), 'gp_popup_video', true);
        $gp_popup_audio = get_post_meta(get_the_ID(), 'gp_popup_audio', true);



        //    find the url for the marker icons
        $marker_icon_base_url = ($gp_icon_type == 'default') ? GP_URL_DEFAULT_MARKERS_ICONS : GP_URL_CUSTOM_MARKERS_ICONS;
        $marker_icon_url = $marker_icon_base_url . '/' . $gp_icon_filename;
?>



        <section class="marker" data-map="<?php print($gp_map) ?>" data-lat="<?php print($gp_lat) ?>" data-lng="<?php print($gp_lng) ?>" data-tiles-provider="<?php print($gp_tiles_provider) ?>" data-popup-image="<?php print($gp_popup_image) ?>" data-popup-text="<?php print($gp_popup_text) ?>" data-popup-video="<?php print($gp_popup_video) ?>" data-popup-audio="<?php print($gp_popup_audio) ?>" data-icon="<?php print($marker_icon_url) ?>">


            <header>
                <?php 'reusable/getThumbnail.php' ?>
                <!-- title of the marker -->

                <h2><?php the_title(); ?></h2>

<?php include 'reusable/tags.php' ?>
            </header>

            <div class="map-marker">
            <div    class="map-container markeronly"  
                    id="map-marker-<?php print($gp_map .'-'. get_the_id()) ?>" 
                    data-marker-id="<?php print(get_the_id()) ?>" 
                    data-map="<?php print($gp_map) ?>" 
                    data-zoom="<?php printf(get_post_meta(get_the_ID(), 'gp_tiles_zoom', true)); ?>" 
                    data-lat="<?php print($gp_lat) ?>" 
                    data-lng="<?php print($gp_lng) ?>" 
                    data-tiles="<?php printf(get_post_meta(get_the_ID(), 'gp_tiles_provider', true)); ?>">

            <!-- update to only show one marker -->
            </div>

            <!-- fetch latitude and longitude of the marker -->
            <div class="markerdata">
                <p class="mapid"> <span class="key">which map: </span> <span class="value"><?php print($gp_map) ?></span></p>
                <p class="lat"> <span class="key">latitude</span> <span class="value"><?php print($gp_lat) ?></span></p>
                <p class="lgn"><span class="key">longitude</span><span class="value"><?php print($gp_lng) ?></span></p>
                <p class="tiles"><span class="key">tiles</span><span class="value"><?php print($gp_tiles_provider) ?></span></p>
                <p class="display_image_une"><span class="key">tiles</span><span class="value"><?php print($display_image_une) ?></span></p>
            </div>

            <div class="popup">
                <!-- get the order of the element -->
                <?php foreach ($gp_popup_content_order as $component) {

                    $showComp = ${"gp_popup_" . $component}; ?>

                    <?php if ($component == "audio") { ?>
                        <p><span class="key"><?php print($component) ?></span> <span class="value"><?php print(wp_get_attachment_url($showComp)) ?></span></p>
                    <?php } elseif ($component == "image") { ?>
                        <figure><img src="<?php print(wp_get_attachment_url($showComp, 'large')) ?>" />
                            <figcaption><?php print(wp_get_attachment_url($showComp, 'large')) ?></figcaption>
                        </figure>
                    <?php } else { ?>
                        <p><span class="key"><?php print($component) ?></span> <span class="value"><?php print($showComp) ?></span></p>
                    <?php } ?>


                <?php } ?>
            </div>







            <img class="icon" alt="Marqueur" src="<?php print($marker_icon_url)  ?>">

            <div class="content"><?php the_content() ?></div>
        </section>


<?php
    endwhile;
endif; ?>

<?php
// include 'reusable/showAllMeta.php' 
?>





</section>


<?php
//  _edit_last ⇒ 1

// map meta
// display_image_une ⇒ no
// mapbox_mapbox ⇒ no
// gp_project ⇒ 9
// gp_export ⇒ 1
// gp_tiles_provider ⇒ stamentonerlight
// gp_tiles_zoom ⇒ 14
// alaune_une ⇒ no
// _edit_lock ⇒ 1631887781:1
 

 ?>