<?php

/** Plugin Name: geoproject-book-print 
 * Description: print your geoproject using pagedjs
 * Author: julien taquet
 * Text Domain: geoproject-book-print *
 * Requires at least: 5.6
 * Require PHP: 7.2
 **/


/** 1. create custom post type for css files */

/** 2. get the story ID to generate the page with everything */

/** 2b reorder the content from the project page */

/** 3. generate the page from its parent*/

add_filter( 'template_include', 'pagedjsTemplate' );

function pagedjsTemplate( $template )
{
    if( isset( $_GET['paged']) && 'yes' == $_GET['paged'] )
        $template = plugin_dir_path( __FILE__ ) . 'template.php';

    return $template;
}






function pagedjs_css_custom_post_type()
{
    register_post_type(
        'pagedjs-template',
        array(
            'labels' => array(
                'name' => __('Book Templates'),
                'singular_name' => __('Template'),
                'add_new' => __('Create a new template'),
                'add_new_item' => __('Create a new template'),
                'edit_item' => __('Edit book template'),
            ),
            'exclude_from_search' => true,
            'has_archive' => false,
            'menu_position' => 50,
            'public' => true,
            'supports' => array('title'),
            'menu_icon' => 'dashicons-book-alt',
            'register_meta_box_cb' => 'css_metabox'
        )

    );
}


register_post_meta('projects', 'chosenTemplate', array(
    'type' => 'number'
));

function css_metabox()
{
    add_meta_box('css_metabox_custom_fields', __('Pagedjs template settings'),  'template_metabox_display', 'pagedjs-template');
}


function project_printView()
{
    add_meta_box('project_print_view_template', __('Print Template'), 'printViewDisplay', 'projects');
    add_meta_box('project_print_view_ListAllData', __('Print Order'), 'listAllData', 'projects');
}

// show the existing templates in the project page to choose the output in the list

function printViewDisplay()
{

    global $post;
    $chosenTemplate = get_post_meta($post->ID, 'chosenTemplate', true);
?>

    <label for="chosenTemplate"><?php __('choose your template') ?></label>
    <p>choose the print template for your story</p>


    <?php
    $args = array(
        'post_type' => 'pagedjs-template',
        'posts_per_page' => 10000000,
    );
    $loop = new WP_Query($args);
    if ($loop->have_posts()) { ?>
        <select name="chosenTemplate">

            <?php while ($loop->have_posts()) {
                $loop->the_post(); ?>
                <option value="<?php the_ID(); ?>" <?php if ($chosenTemplate == $post->ID) {
                                                        print " selected=\"selected\" ";
                                                    } ?>><?php the_title(); ?></option>
            <?php }  ?>
        </select>
    <?php
    } else {
        print '<p>' . __('There is no template to use yet') . '</p>';
    } ?>


<?php



}


function listAllData($post)
{


    // $post_id = $post->ID;


    // list all the children of the page

    $args = array(
        'post_type' => array('post', 'geoformat', 'maps', 'capes', 'markers'),
        'meta_key' => 'gp_project',
        'meta_value' => $post->ID,
        'meta_value_type' => 'numeric',
        'posts_per_page' => -1,
        'orderby' => 'paged-order',
        'order' => 'UP'
    );

    $wp_query = new WP_Query();
    $wp_query->query($args); ?>

    <!-- <p>id of the post: <?php print $post->ID; ?></p> -->

    <!-- add link to the preview-->

    <a href="<?php printf(get_permalink($post->ID))  ?>/?paged=yes">Prévisualiser et imprimer!</a>

    <ul>
        <?php if ($wp_query->have_posts()) :  while ($wp_query->have_posts()) : $wp_query->the_post();
                $order = get_post_meta(get_the_ID(), 'paged-order', true);
        ?>
                <?php $maxpost = $wp_query->found_posts ?>
                <li>
                    <?php
                    // $postmetas = get_post_meta(get_the_ID());

                    // foreach ($postmetas as $meta_key => $meta_value) {
                    //     echo $meta_key . ' : ' . $meta_value[0] . '<br/>';
                    // }

                    // ?>
                    <p>
                        <input data-id="<?php printf(get_the_ID()) ?>" name="paged-order<?php printf(get_the_ID()) ?>" type="number" min="1" max="<?php printf($maxpost)?>" <?php if ($order) {print  "value=\"" . $order . "\"";}; ?>>
                        <span class="title"><strong><?php the_title(); ?></strong><span> <span>(<?php printf(get_post_type(get_the_id())); ?>)</span>
                    </p>
                </li>
        <?php endwhile;
        endif; ?>
    </ul>
<?php
}

function update_print_stuff($post_id)
{


    global $post;

    if ($post->post_type == 'projects') {
        // save custom fields data

        if (array_key_exists('chosenTemplate', $_POST)) {
            update_post_meta($post_id, 'chosenTemplate', $_POST['chosenTemplate']);
        }

        $args = array(
            'post_type' => array('post', 'geoformat', 'maps', 'capes', 'markers'),
            'meta_key' => 'gp_project',
            'meta_value' => $post->ID
        );

        $wp_query = new WP_Query();
        $wp_query->query($args);

        if ($wp_query->have_posts()) {
            while ($wp_query->have_posts()) {
                $wp_query->the_post();
                $id_of_the_post = get_the_ID();

                $input_name  = 'paged-order' . $id_of_the_post;
                if (array_key_exists($input_name, $_POST)) {
                    update_post_meta($id_of_the_post, 'paged-order', $_POST[$input_name]);
                }
            }
        }
    }
}







add_action('add_meta_boxes', 'project_printView');
add_action('add_meta_boxes', 'css_metabox');


function template_metabox_display()
{

    global $post;
    $templateCSS = get_post_meta($post->ID, 'templateCSS', true);
?>
    <label for="templateCSS">the code</label>
    <textarea placeholder="my template CSS" name="templateCSS" rows="30" class="widefat"><?php print $templateCSS ?></textarea>
<?php
}




add_action('init', 'pagedjs_css_custom_post_type');


// save the data

function template_save($post_id)

{

    // //check if post is object otherwise you're not in singular post
    // if( !is_object($post_id) ) 
    // return;

    $is_autosave = wp_is_post_autosave($post_id);
    $is_revision = wp_is_post_revision($post_id);

    if ($is_autosave || $is_revision) {
        return;
    }

    $post = get_post($post_id);
    // make sure it’s only appearing on the book layout page

    if ($post->post_type == 'pagedjs-template') {
        // save custom fields data

        if (array_key_exists('templateCSS', $_POST)) {
            update_post_meta($post_id, 'templateCSS', $_POST['templateCSS']);
        }
    }
}



// save the chosen template for each post
// add_action('save_post', 'update_chosen_template');

// update the print order on update and chosen templage
add_action('save_post', 'update_print_stuff');

// save the template itself
add_action('save_post', 'template_save');




