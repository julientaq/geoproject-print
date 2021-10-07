<!-- get image function 
return a url with the attachement
-->
<?php

$thumbnailID = get_post_meta(get_the_id(), '_thumbnail_id', true);
if ($thumbnailID) {
    $image_url = wp_get_attachment_image_url($thumbnailID, "large");
}
?>

<img class="post-intro" src="<?php printf($image_url) ?>" />