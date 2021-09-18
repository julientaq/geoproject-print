<?php







// 1. create the map to put the marker on

?>
<section class="map">

    <header>
        <h1> <?php the_title(); ?></h1>

    </header>

    <div class="content"><?php the_content(); ?></div>

    <!-- meta data for the map -->

    <!-- <p><span class="key">gp_tiles_provider</span> <span class="value"><?php printf(get_post_meta(get_the_ID(), 'gp_tiles_provider', true)); ?></span></p> -->
    <!-- <p><span class="key">gp_tiles_zoom</span> <span class="value"><?php printf(get_post_meta(get_the_ID(), 'gp_tiles_zoom', true)); ?><</span></p> -->

    <div class="map-container" id="map-<?php print(get_the_ID()) ?>" 
        data-mapID="<?php print(get_the_ID()) ?>" 
        data-zoom="<?php printf(get_post_meta(get_the_ID(), 'gp_tiles_zoom', true)); ?>"
        data-tiles="<?php printf(get_post_meta(get_the_ID(), 'gp_tiles_provider', true)); ?>">
    </div>

    <script>

// get all the maps
// var map = L.map('map-<?php print(get_the_ID()) ?>').setView([51.505, -0.09], 13);
// L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
//     attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
//     maxZoom: 18,
//     id: 'mapbox/streets-v11',
//     tileSize: 512,
//     zoomOffset: -1,
//     accessToken: 'your.mapbox.access.token'
// }).addTo(map);


  </script>

</section>


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

// $map_ID = $post->id;


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


        // popup stuff
        $gp_popup_content_order = explode(',', get_post_meta(get_the_ID(), 'gp_popup_content_order', true));
        $gp_popup_text = get_post_meta(get_the_ID(), 'gp_popup_text', true);
        $gp_popup_image = get_post_meta(get_the_ID(), 'gp_popup_image', true);
        $gp_popup_video = get_post_meta(get_the_ID(), 'gp_popup_video', true);
        $gp_popup_audio = get_post_meta(get_the_ID(), 'gp_popup_audio', true);



?>
        <section class="marker">
            <!-- title of the marker -->
            <h2><?php the_title(); ?></h2>

            <!-- fetch latitude and longitude of the marker -->
            <div class="markerdata">
                <p class="mapid"> <span class="key">which map: </span> <span class="value"><?php print($gp_map) ?></span></p>
                <p class="latitude"> <span class="key">latitude</span> <span class="value"><?php print($gp_lat) ?></span></p>
                <p class="longitude"><span class="key">longitude</span><span class="value"><?php print($gp_lng) ?></span></p>
                <p class="tiles"><span class="key">tiles</span><span class="value"><?php print($gp_tiles_provider) ?></span></p>
            </div>
            <div class="popup">
                <!-- get the order of the element -->
                <?php foreach ($gp_popup_content_order as $component) {

                    $showComp = ${"gp_popup_" . $component}; ?>

                    <?php if ($component == "audio") { ?>
                        <p><span class="key"><?php print($component) ?></span> <span class="value"><?php print(wp_get_attachment_url($showComp)) ?></span></p>
                    <?php } elseif ($component == "image") { ?>
                        <figure><img src="<?php print(wp_get_attachment_url($showComp, 'large')) ?>" />
                            <caption><?php print(wp_get_attachment_url($showComp, 'large')) ?></caption>
                        </figure>
                    <?php } else { ?>
                        <p><span class="key"><?php print($component) ?></span> <span class="value"><?php print($showComp) ?></span></p>
                    <?php } ?>


                <?php } ?>
            </div>



            <!--  TO DO: add the icon to the map -->


            <?php
            //    create the marker icon
            $marker_icon_base_url = ($gp_icon_type == 'default') ?
                GP_URL_DEFAULT_MARKERS_ICONS : GP_URL_CUSTOM_MARKERS_ICONS;

            $marker_icon_url = $marker_icon_base_url . '/' . $gp_icon_filename;
            ?>

            <img class="icon" alt="Marqueur" src="<?php print($marker_icon_url)  ?>">

            <div class="content"><?php the_content() ?></div>

        </section>

<?php
    endwhile;
endif; ?>