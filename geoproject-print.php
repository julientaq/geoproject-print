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

if (!defined('ABSPATH')) {
    exit;
}


function pagedjs_css_custom_post_type()
{
    register_post_type(
        'pagedjs-template',
        array(
            'labels' => array(
                'name' => __('Book Templates'),
                'singular_name' => __('Template'),
                'add_new' => __('Create new template'),
                'add_new_item' => __('Create new template'),
                'edit_item' => __('Edit template'),
            ),
            'exclude_from_search' => true,
            'has_archive' => false,
            'menu_position' => 50,
            'public' => true,
            'supports' => array('title'),
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
    add_meta_box('project_print_view_template', __('Print View'), 'printViewDisplay', 'projects');
}

// show the existing templates in the project page to choose the output in the list

function printViewDisplay($post_id)
{

    global $post;
    $chosenTemplate = get_post_meta($post->ID, 'chosenTemplate', true);
?>

    <label for="chosenTemplate">name of your template</label>
    <p>choose the print template for your story</p>



    <?php
    $args = array(
        'post_type' => 'pagedjs-template',
        'posts_per_page' => 10000000,
    );
    $loop = new WP_Query($args);
    if ($loop->have_posts()) {



    ?>
        <select name="chosenTemplate" id="">

            <?php
            while ($loop->have_posts()) {
                $loop->the_post(); ?>


                <option value="<?php the_ID(); ?>" <?php
                                                    if ($chosenTemplate == $post->ID) {
                                                        print "selected=\"selected\"";
                                                    }
                                                    ?>><?php the_title(); ?></option>
        <?php
            }
        } else {
            print '<p>' . __('There is no template to use yet') . '</p>';
        }

        ?>
        </select>

        <!-- <input type="text" name="chosenTemplate" placeholder="my template name" class="widefat" value="<?php print $chosenTemplate ?>" required> -->





    <?php

}

add_action('add_meta_boxes', 'project_printView');
// update_post_meta($post_id, 'templateName', $_POST['templateName']);
add_action('save_post', 'update_chosen_template');


function update_chosen_template($post_id)
{

    global $post;

    $is_autosave = wp_is_post_autosave($post_id);
    $is_revision = wp_is_post_revision($post_id);



    if ($is_autosave || $is_revision) {
        return;
    }

    $post = get_post($post_id);
    // make sure it’s only appearing on the book layout page

    if ($post->post_type == 'projects') {
        // save custom fields data
        if (array_key_exists('chosenTemplate', $_POST)) {
            update_post_meta($post_id, 'chosenTemplate', $_POST['chosenTemplate']);
        }
    }
}



add_action('add_meta_boxes', 'css_metabox');


function template_metabox_display()
{

    global $post;
    // $templateName = get_post_meta( $post->ID,'templateName', true);
    $templateCSS = get_post_meta($post->ID, 'templateCSS', true);
    ?>
        <!-- <label for="templateName">name of your template</label>
        <input type="text" name="templateName" placeholder="my template name" class="widefat" value="<?php print $templateName ?>" required>
        <br/><br/> -->
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
        if (array_key_exists('templateName', $_POST)) {
            update_post_meta($post_id, 'templateName', $_POST['templateName']);
        }

        if (array_key_exists('templateCSS', $_POST)) {
            update_post_meta($post_id, 'templateCSS', $_POST['templateCSS']);
        }
    }
}

add_action('save_post', 'template_save')







    ?>