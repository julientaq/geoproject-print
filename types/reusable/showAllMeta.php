<?php

# show all the meta tags of a post

	$postmetas = get_post_meta(get_the_ID());

	foreach($postmetas as $meta_key=>$meta_value) {
		echo $meta_key . '  ⇒  ' . $meta_value[0] . '<br/>';
	}

?>