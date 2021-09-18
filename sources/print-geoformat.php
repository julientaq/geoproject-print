<?php 
	$gp_options = get_option( 'gp_options' );
 $nextpage = $gp_options['nextp'];
 $shadow = get_post_meta( get_the_ID(), 'shadow', true );
 $bar_site = get_post_meta( get_the_ID(), 'bar-title-site', true );
 $meta_font = get_post_meta( get_the_ID(), 'meta-font', true ); 
 $meta_date = get_post_meta( get_the_ID(), 'meta-date', true ); 
 $meta_font_title = get_post_meta( get_the_ID(), 'meta-font_title', true );
 $sec_title_align = get_post_meta( get_the_ID(), 'section_title_align', true ); 
 $section_un = get_post_meta( get_the_ID(), '_wp_editor_section_1', true );
 $section_deux = get_post_meta( get_the_ID(), '_wp_editor_section_2', true ); 
 $section_trois = get_post_meta( get_the_ID(), '_wp_editor_section_3', true ); 
 $section_quatre = get_post_meta( get_the_ID(), '_wp_editor_section_4', true ); 
 $section_cinq = get_post_meta( get_the_ID(), '_wp_editor_section_5', true ); 
 $section_six = get_post_meta( get_the_ID(), '_wp_editor_section_6', true ); 
 $section_sept = get_post_meta( get_the_ID(), '_wp_editor_section_7', true ); 
 $section_img_1 = get_post_meta( get_the_ID(), 'meta-image_1', true ); 
 $section_img_2 = get_post_meta( get_the_ID(), 'meta-image_2', true ); 
 $section_img_3 = get_post_meta( get_the_ID(), 'meta-image_3', true ); 
 $section_img_4 = get_post_meta( get_the_ID(), 'meta-image_4', true ); 
 $section_img_5 = get_post_meta( get_the_ID(), 'meta-image_5', true ); 
 $section_img_6 = get_post_meta( get_the_ID(), 'meta-image_6', true ); 
 $section_img_7 = get_post_meta( get_the_ID(), 'meta-image_7', true ); 
 $section1_caption = get_post_meta( get_the_ID(), 'section1_caption', true ); 
 $section2_caption = get_post_meta( get_the_ID(), 'section2_caption', true ); 
 $section3_caption = get_post_meta( get_the_ID(), 'section3_caption', true ); 
 $section4_caption = get_post_meta( get_the_ID(), 'section4_caption', true ); 
 $section5_caption = get_post_meta( get_the_ID(), 'section5_caption', true ); 
 $section6_caption = get_post_meta( get_the_ID(), 'section6_caption', true ); 
 $section7_caption = get_post_meta( get_the_ID(), 'section7_caption', true ); 
 $meta_video = get_post_meta( get_the_ID(), 'meta-video',true );
 $section_video_1 = get_post_meta( get_the_ID(), 'meta-video_1', true ); 
 $section_video_2 = get_post_meta( get_the_ID(), 'meta-video_2', true );  
 $section_video_3 = get_post_meta( get_the_ID(), 'meta-video_3', true ); 
 $section_video_4 = get_post_meta( get_the_ID(), 'meta-video_4', true ); 
 $section_video_5 = get_post_meta( get_the_ID(), 'meta-video_5', true ); 
 $section_video_6 = get_post_meta( get_the_ID(), 'meta-video_6', true ); 
 $section_video_7 = get_post_meta( get_the_ID(), 'meta-video_7', true );
 $meta_map_1 = get_post_meta( get_the_ID(), 'meta-map_1',true );
 $meta_map_2 = get_post_meta( get_the_ID(), 'meta-map_2',true );
 $meta_map_3 = get_post_meta( get_the_ID(), 'meta-map_3',true );
 $meta_map_4 = get_post_meta( get_the_ID(), 'meta-map_4',true );
 $meta_map_5 = get_post_meta( get_the_ID(), 'meta-map_5',true );
 $meta_map_6 = get_post_meta( get_the_ID(), 'meta-map_6',true );
 $meta_map_7 = get_post_meta( get_the_ID(), 'meta-map_7',true );
 $section_title_un = get_post_meta( get_the_ID(), 'meta-title_1', true ); 
 $section_title_deux = get_post_meta( get_the_ID(), 'meta-title_2', true ); 
 $section_title_trois = get_post_meta( get_the_ID(), 'meta-title_3', true ); 
 $section_title_quatre = get_post_meta( get_the_ID(), 'meta-title_4', true ); 
 $section_title_cinq = get_post_meta( get_the_ID(), 'meta-title_5', true ); 
 $section_title_six = get_post_meta( get_the_ID(), 'meta-title_6', true ); 
 $section_title_sept = get_post_meta( get_the_ID(), 'meta-title_7', true ); 
 $top_title = get_post_meta( get_the_ID(), 'section_title_color', true ); 
 $sec1_title = get_post_meta( get_the_ID(), 'section1_title_color', true ); 
 $sec1_title_align = get_post_meta( get_the_ID(), 'section1_title_align', true ); 
 $sec2_title = get_post_meta( get_the_ID(), 'section2_title_color', true ); 
 $sec2_title_align = get_post_meta( get_the_ID(), 'section2_title_align', true ); 
 $sec3_title = get_post_meta( get_the_ID(), 'section3_title_color', true ); 
 $sec3_title_align = get_post_meta( get_the_ID(), 'section3_title_align', true ); 
 $sec4_title = get_post_meta( get_the_ID(), 'section4_title_color', true ); 
 $sec4_title_align = get_post_meta( get_the_ID(), 'section4_title_align', true ); 
 $sec5_title = get_post_meta( get_the_ID(), 'section5_title_color', true ); 
 $sec5_title_align = get_post_meta( get_the_ID(), 'section5_title_align', true ); 
 $sec6_title = get_post_meta( get_the_ID(), 'section6_title_color', true ); 
 $sec6_title_align = get_post_meta( get_the_ID(), 'section6_title_align', true ); 
 $sec7_title = get_post_meta( get_the_ID(), 'section7_title_color', true ); 
 $sec7_title_align = get_post_meta( get_the_ID(), 'section7_title_align', true );
 $meta_auteur = get_post_meta( get_the_ID(), 'meta-auteur', true ); 
 $load_auteur = get_post_meta( get_the_ID(), 'load-auteur', true ); 
 $meta_loader_animate = get_post_meta( get_the_ID(), 'meta-loader-animate', true ); 
 $meta_trigger = get_post_meta( get_the_ID(), 'meta-trigger', true ); 
 $trigger_text = get_post_meta( get_the_ID(), 'trigger-text', true ); 
 $meta_bar = get_post_meta( get_the_ID(), 'meta-bar', true ); 
 $meta_photos = get_post_meta( get_the_ID(), 'meta-photos', true ); 
 $meta_top = get_post_meta( get_the_ID(), 'meta-image', true ); 
 $meta_font_size = get_post_meta( get_the_ID(), 'meta-font-size', true ); 
 $meta_col = get_post_meta( get_the_ID(), 'meta-col', true ); 
 $small = "col-lg-6 col-md-6 col-sm-12"; 
 $medium = "col-lg-7 col-md-7 col-sm-12"; 
 $large = "col-lg-8 col-md-8 col-sm-12"; 
 $subline = get_post_meta( get_the_ID(), 'meta-subline', true ); 
 $chapo = get_post_meta( get_the_ID(), '_wp_editor_chapo', true ); 
 $txt = get_post_meta( get_the_ID(), '_wp_editor_text', true ); 
 $meta_color = get_post_meta( get_the_ID(), 'meta-color', true ); 
 $meta_text_color = get_post_meta( get_the_ID(), 'meta-text-color', true ); 
 $bar_sup = get_post_meta( get_the_ID(), 'bar-sup', true );
 $bar_title = get_post_meta( get_the_ID(), 'bar-title', true ); 
 $top_bar = get_post_meta( get_the_ID(), 'top-bar', true ); 
 $reseaux = get_post_meta( get_the_ID(), 'reseaux', true ); 
 $burger = get_post_meta( get_the_ID(), 'burger', true ); 
 $meta_quote = get_post_meta( get_the_ID(), 'quote-design', true );
 $meta_quote_design = get_post_meta( get_the_ID(), 'quote', true ); 
 $intro = get_post_meta( get_the_ID(), 'meta-animate', true )
?>

	<section>
	<header class="header">	
		<div class="bg-img"> 
		<?php if( !empty( $meta_top ) ) { ?>	
		</div>
			<div class="title title_home col-md-10 col-sm-10">	
				<h1><span class="bloc_title_top"><?php the_title(); ?></span></h1>
			</div> 
		<?php } 
			elseif(!((get_post_meta($post->ID, 'meta-video', TRUE))=='')) { 
				$meta_video = get_post_meta( get_the_ID(), 'meta-video',true );
				if( !empty( $meta_video ) ) : echo html_entity_decode($meta_video); 
				endif; 
			} elseif(!((get_post_meta($post->ID, 'meta-map', TRUE))=='')) {  
				$meta_map = html_entity_decode(get_post_meta( get_the_ID(), 'meta-map',true ));
				$meta_map = str_replace('export','home', $meta_map);
					if( !empty( $meta_map ) ) {
					echo do_shortcode($meta_map); 
			} ?>
		</div>
			<div class="title_bg_une col-lg-12">
				<h1><span class="bloc_title_top"><?php the_title(); ?></span></h1>
			</div> <?php } else { ?>
			<div class="title <?php if ($meta_col == "select-two") { echo $large; } elseif ($meta_col == "select-three") { echo $small; } else { echo $medium; } ?>">	
				<h1><span class="bloc_title_top"><?php the_title(); ?></span></h1>
			</div>
		</div> <?php }	if ( $intro == 'select-three' ) { ?>
			<div class="bg-img"></div> <?php } ?>
	</header>
	
	<div class="clear"> </div>
		
		<button class="trigger"><?php if ( $meta_trigger == 'select-three' || $meta_trigger == 'select-four' ) { ?>
			<span class="ion ion-ios-arrow-down"></span><?php } 
			elseif ( $meta_trigger == 'select-two' || $meta_trigger == 'select-five' ) {  ?>
			<span class="ion ion-md-arrow-dropdown"></span> <?php } 
			elseif ( $meta_trigger == 'select-one' ) { ?>
			<span><?php echo $trigger_text; ?></span> <?php } 
			elseif ( $meta_trigger == 'select-six' ) { ?>
			<span class="ion ion-md-arrow-down"></span>
			<?php } ?>
		</button>			
</div>
<?php //Content

if ( ! post_password_required() ) { ?>
<article class="content <?php if ($meta_col == "select-two") { echo $large; } elseif ($meta_col == "select-three") { echo $small; } else { echo $medium; } ?> intro" >
	<h1 id="topscroll"><?php the_title(); ?></h1> <?php if( !empty( $meta_auteur ) ) : ?>
	<div id="author">
		<strong><?php echo $meta_auteur; ?></strong>
	</div>	<?php endif; if( !empty( $meta_photos ) ) : ?> 
	<div id="photos"> 
		<?php _e('Photos: ', 'geoformat'); ?> <strong><?php echo $meta_photos; ?> </strong> 
	</div> <?php endif;  
	
	if (!empty ($meta_date) ) : 
		if ($meta_date == "select-one") : ?>
		<div id="date">
			<?php the_time(__('j F Y','geoformat')); ?>
		</div>	
		<?php endif; 
	endif;
	if( !empty( $subline ) ) : ?> 		
	<div class="subline"> 
		<?php echo $subline; ?> 
	</div> <?php endif; if( !empty( $chapo ) ) : ?> 		
	<div id="chapo"> 
		<?php echo apply_filters('the_content', $chapo); ?> 
	</div> <?php endif; if( !empty( $txt ) ) : ?> 
	<div class="intro_text" >
		<?php echo apply_filters('the_content', $txt); ?> 
	</div> <?php endif; 
	
//Section 1 

if( empty( $section_img_1 ) && empty( $section_video_1 ) && !empty($section_title_un) && empty( $meta_map_1 ) ) { ?>
	<div class="clear"></div>
	<div class="nav_anchor"></div>
	<div id="section_un" class="section_no_img"></div>

		<h2 id="first_title"> <?php echo $section_title_un; ?></h2>

<?php } elseif ( !empty( $section_img_1 ) ) { ?> 
</article>		

	<div id="section_un" class="chapitre">
		<?php if( !empty( $section_title_un ) ) : ?>
			<div class="section_title" id="sec1_title">
				<h1><span id="bloc_title_1"><?php echo $section_title_un; ?></span></h1>
			</div> 
		<?php endif; ?> 
	</div>
	<?php if( !empty( $section1_caption ) ) : ?> 
		<div class="caption_img_slf"> 
			<?php echo $section1_caption; ?> 
		</div> 
	<?php endif; ?>
	<article class="content <?php if ($meta_col == "select-two") { echo $large; } elseif ($meta_col == "select-three") { echo $small; } else { echo $medium; } ?>" > 
<?php } elseif( !empty( $section_video_1 ) ) { ?>
</article>
		
		<div class="chapitre video" id="section_un">	
			<div class="bg_container">
				<?php echo html_entity_decode($section_video_1); ?>
			</div>
		</div> 
	<?php if( !empty( $section1_caption ) ) : ?> 
		<div class="caption_img_slf"> 
			<?php echo $section1_caption; ?> 
		</div> 
	<?php endif; ?>
	<article class="content <?php if ($meta_col == "select-two") { echo $large; } elseif ($meta_col == "select-three") { echo $small; } else { echo $medium; } ?>" > 
		<?php if( !empty( $section_title_un ) ) : ?>
			<h1 class="title-map"><?php echo $section_title_un; ?></h1>
		<?php endif; ?> 
<?php } elseif( !empty( $meta_map_1 ) ) { ?>
	</article>
	<div class="chapitre map">	
		<?php 
			$meta_map_1 = html_entity_decode($meta_map_1);	
			echo do_shortcode($meta_map_1); ?>
	</div>
	<?php if( !empty( $section1_caption ) ) : ?> 
		<div class="caption_img_slf"> 
			<?php echo $section1_caption; ?> 
		</div> 
	<?php endif; ?>
	<article class="content <?php if ($meta_col == "select-two") { echo $large; } elseif ($meta_col == "select-three") { echo $small; } else { echo $medium; } ?>" > 

		<?php if( !empty( $section_title_un ) ) : ?>
			<h1 class="title-map"><?php echo $section_title_un; ?></h1>
		<?php endif; ?> 
<?php } 
	
	if( !empty( $section_un ) ) : ?> 
		<section class="first"> 
			<?php echo apply_filters('the_content', $section_un); ?>
		</section>
	<div class="clear"> </div>
<?php endif; 


//Section 2 

if( empty( $section_img_2 ) && empty( $section_video_2 ) && !empty($section_title_deux) && empty( $meta_map_2 ) ) { ?>
	<div class="clear"></div>
	<div class="nav_anchor"></div>
	<div id="section_deux" class="section_no_img"></div>

		<h1 id="first_title"> <?php echo $section_title_deux; ?></h1>

<?php } elseif ( !empty( $section_img_2 ) ) { ?> 
</article>		

	<div id="section_deux" class="chapitre">
		<?php if( !empty( $section_title_deux ) ) : ?>
			<div class="section_title" id="sec2_title">
				<h1><span id="bloc_title_2"><?php echo $section_title_deux; ?></span></h1>
			</div> 
		<?php endif; ?> 
	</div>
	<?php if( !empty( $section2_caption ) ) : ?> 
		<div class="caption_img_slf"> 
			<?php echo $section2_caption; ?> 
		</div> 
	<?php endif; ?>
	<article class="content <?php if ($meta_col == "select-two") { echo $large; } elseif ($meta_col == "select-three") { echo $small; } else { echo $medium; } ?>" > 
<?php } elseif( !empty( $section_video_2 ) ) { ?>
</article>
		
		<div class="chapitre video" id="section_deux">	
			<div class="bg_container">
				<?php echo html_entity_decode($section_video_2); ?>
			</div>
		</div> 
	<?php if( !empty( $section2_caption ) ) : ?> 
		<div class="caption_img_slf"> 
			<?php echo $section2_caption; ?> 
		</div> 
	<?php endif; ?>
	<article class="content <?php if ($meta_col == "select-two") { echo $large; } elseif ($meta_col == "select-three") { echo $small; } else { echo $medium; } ?>" > 
		<?php if( !empty( $section_title_deux ) ) : ?>
			<h1 class="title-map"><?php echo $section_title_deux; ?></h1>
		<?php endif; ?> 
<?php } elseif( !empty( $meta_map_2 ) ) { ?>
	</article>
	<div class="chapitre map">	
		<?php 
			$meta_map_2 = html_entity_decode($meta_map_2);	
			echo do_shortcode($meta_map_2); ?>
	</div>
	<?php if( !empty( $section2_caption ) ) : ?> 
		<div class="caption_img_slf"> 
			<?php echo $section2_caption; ?> 
		</div> 
	<?php endif; ?>
	<article class="content <?php if ($meta_col == "select-two") { echo $large; } elseif ($meta_col == "select-three") { echo $small; } else { echo $medium; } ?>" > 

		<?php if( !empty( $section_title_deux ) ) : ?>
			<h1 class="title-map"><?php echo $section_title_deux; ?></h1>
		<?php endif; ?> 
<?php } 
	
	if( !empty( $section_deux ) ) : ?> 
		<section class="first"> 
			<?php echo apply_filters('the_content', $section_deux); ?>
		</section>
	<div class="clear"> </div>
<?php endif; 

//Section 3 

if( empty( $section_img_3 ) && empty( $section_video_3 ) && !empty($section_title_trois) && empty( $meta_map_3 ) ) { ?>
	<div class="clear"></div>
	<div class="nav_anchor"></div>
	<div id="section_trois" class="section_no_img"></div>

		<h1 id="first_title"> <?php echo $section_title_trois; ?></h1>

<?php } elseif ( !empty( $section_img_3 ) ) { ?> 
</article>		

	<div id="section_trois" class="chapitre">
		<?php if( !empty( $section_title_trois ) ) : ?>
			<div class="section_title" id="sec3_title">
				<h1><span id="bloc_title_3"><?php echo $section_title_trois; ?></span></h1>
			</div> 
		<?php endif; ?> 
	</div>
	<?php if( !empty( $section3_caption ) ) : ?> 
		<div class="caption_img_slf"> 
			<?php echo $section3_caption; ?> 
		</div> 
	<?php endif; ?>
	<article class="content <?php if ($meta_col == "select-two") { echo $large; } elseif ($meta_col == "select-three") { echo $small; } else { echo $medium; } ?>" > 
<?php } elseif( !empty( $section_video_3 ) ) { ?>
</article>
		
		<div class="chapitre video" id="section_trois">	
			<div class="bg_container">
				<?php echo html_entity_decode($section_video_3); ?>
			</div>
		</div> 
	<?php if( !empty( $section3_caption ) ) : ?> 
		<div class="caption_img_slf"> 
			<?php echo $section3_caption; ?> 
		</div> 
	<?php endif; ?>
	<article class="content <?php if ($meta_col == "select-two") { echo $large; } elseif ($meta_col == "select-three") { echo $small; } else { echo $medium; } ?>" > 
		<?php if( !empty( $section_title_trois ) ) : ?>
			<h1 class="title-map"><?php echo $section_title_trois; ?></h1>
		<?php endif; ?> 
<?php } elseif( !empty( $meta_map_3 ) ) { ?>
	</article>
	<div class="chapitre map">	
		<?php 
			$meta_map_3 = html_entity_decode($meta_map_3);	
			echo do_shortcode($meta_map_3); ?>
	</div>
	<?php if( !empty( $section3_caption ) ) : ?> 
		<div class="caption_img_slf"> 
			<?php echo $section3_caption; ?> 
		</div> 
	<?php endif; ?>
	<article class="content <?php if ($meta_col == "select-two") { echo $large; } elseif ($meta_col == "select-three") { echo $small; } else { echo $medium; } ?>" > 

		<?php if( !empty( $section_title_trois ) ) : ?>
			<h1 class="title-map"><?php echo $section_title_trois; ?></h1>
		<?php endif; ?> 
<?php } 
	
	if( !empty( $section_trois ) ) : ?> 
		<section class="first"> 
			<?php echo apply_filters('the_content', $section_trois); ?>
		</section>
	<div class="clear"> </div>
<?php endif; 

//Section 4 

if( empty( $section_img_4 ) && empty( $section_video_4 ) && !empty($section_title_quatre) && empty( $meta_map_4 ) ) { ?>
	<div class="clear"></div>
	<div class="nav_anchor"></div>
	<div id="section_quatre" class="section_no_img"></div>

		<h1 id="first_title"> <?php echo $section_title_quatre; ?></h1>

<?php } elseif ( !empty( $section_img_4 ) ) { ?> 
</article>		

	<div id="section_quatre" class="chapitre">
		<?php if( !empty( $section_title_quatre ) ) : ?>
			<div class="section_title" id="sec4_title">
				<h1><span id="bloc_title_4"><?php echo $section_title_quatre; ?></span></h1>
			</div> 
		<?php endif; ?> 
	</div>
	<?php if( !empty( $section4_caption ) ) : ?> 
		<div class="caption_img_slf"> 
			<?php echo $section4_caption; ?> 
		</div> 
	<?php endif; ?>
	<article class="content <?php if ($meta_col == "select-two") { echo $large; } elseif ($meta_col == "select-three") { echo $small; } else { echo $medium; } ?>" > 
<?php } elseif( !empty( $section_video_4 ) ) { ?>
</article>
		
		<div class="chapitre video" id="section_quatre">	
			<div class="bg_container">
				<?php echo html_entity_decode($section_video_4); ?>
			</div>
		</div> 
	<?php if( !empty( $section4_caption ) ) : ?> 
		<div class="caption_img_slf"> 
			<?php echo $section4_caption; ?> 
		</div> 
	<?php endif; ?>
	<article class="content <?php if ($meta_col == "select-two") { echo $large; } elseif ($meta_col == "select-three") { echo $small; } else { echo $medium; } ?>" > 
		<?php if( !empty( $section_title_quatre ) ) : ?>
			<h1 class="title-map"><?php echo $section_title_quatre; ?></h1>
		<?php endif; ?> 
<?php } elseif( !empty( $meta_map_4 ) ) { ?>
	</article>
	<div class="chapitre map">	
		<?php 
			$meta_map_4 = html_entity_decode($meta_map_4);	
			echo do_shortcode($meta_map_4); ?>
	</div>
	<?php if( !empty( $section4_caption ) ) : ?> 
		<div class="caption_img_slf"> 
			<?php echo $section4_caption; ?> 
		</div> 
	<?php endif; ?>
	<article class="content <?php if ($meta_col == "select-two") { echo $large; } elseif ($meta_col == "select-three") { echo $small; } else { echo $medium; } ?>" > 

		<?php if( !empty( $section_title_quatre ) ) : ?>
			<h1 class="title-map"><?php echo $section_title_quatre; ?></h1>
		<?php endif; ?> 
<?php } 
	
	if( !empty( $section_quatre ) ) : ?> 
		<section class="first"> 
			<?php echo apply_filters('the_content', $section_quatre); ?>
		</section>
	<div class="clear"> </div>
<?php endif; 

//Section 5 

if( empty( $section_img_5 ) && empty( $section_video_5 ) && !empty($section_title_cinq) && empty( $meta_map_5 ) ) { ?>
	<div class="clear"></div>
	<div class="nav_anchor"></div>
	<div id="section_cinq" class="section_no_img"></div>

		<h1 id="first_title"> <?php echo $section_title_cinq; ?></h1>

<?php } elseif ( !empty( $section_img_5 ) ) { ?> 
</article>		

	<div id="section_cinq" class="chapitre">
		<?php if( !empty( $section_title_cinq ) ) : ?>
			<div class="section_title" id="sec5_title">
				<h1><span id="bloc_title_5"><?php echo $section_title_cinq; ?></span></h1>
			</div> 
		<?php endif; ?> 
	</div>
	<?php if( !empty( $section5_caption ) ) : ?> 
		<div class="caption_img_slf"> 
			<?php echo $section5_caption; ?> 
		</div> 
	<?php endif; ?>
	<article class="content <?php if ($meta_col == "select-two") { echo $large; } elseif ($meta_col == "select-three") { echo $small; } else { echo $medium; } ?>" > 
<?php } elseif( !empty( $section_video_5 ) ) { ?>
</article>
		
		<div class="chapitre video" id="section_cinq">	
			<div class="bg_container">
				<?php echo html_entity_decode($section_video_5); ?>
			</div>
		</div> 
	<?php if( !empty( $section5_caption ) ) : ?> 
		<div class="caption_img_slf"> 
			<?php echo $section5_caption; ?> 
		</div> 
	<?php endif; ?>
	<article class="content <?php if ($meta_col == "select-two") { echo $large; } elseif ($meta_col == "select-three") { echo $small; } else { echo $medium; } ?>" > 
		<?php if( !empty( $section_title_cinq ) ) : ?>
			<h1 class="title-map"><?php echo $section_title_cinq; ?></h1>
		<?php endif; ?> 
<?php } elseif( !empty( $meta_map_5 ) ) { ?>
	</article>
	<div class="chapitre map">	
		<?php 
			$meta_map_5 = html_entity_decode($meta_map_5);	
			echo do_shortcode($meta_map_5); ?>
	</div>
	<?php if( !empty( $section5_caption ) ) : ?> 
		<div class="caption_img_slf"> 
			<?php echo $section5_caption; ?> 
		</div> 
	<?php endif; ?>
	<article class="content <?php if ($meta_col == "select-two") { echo $large; } elseif ($meta_col == "select-three") { echo $small; } else { echo $medium; } ?>" > 

		<?php if( !empty( $section_title_cinq ) ) : ?>
			<h1 class="title-map"><?php echo $section_title_cinq; ?></h1>
		<?php endif; ?> 
<?php } 
	
	if( !empty( $section_cinq ) ) : ?> 
		<section class="first"> 
			<?php echo apply_filters('the_content', $section_cinq); ?>
		</section>
	<div class="clear"> </div>
<?php endif; 

//Section 6 

if( empty( $section_img_6 ) && empty( $section_video_6 ) && !empty($section_title_six) && empty( $meta_map_6 ) ) { ?>
	<div class="clear"></div>
	<div class="nav_anchor"></div>
	<div id="section_six" class="section_no_img"></div>

		<h1 id="first_title"> <?php echo $section_title_six; ?></h1>

<?php } elseif ( !empty( $section_img_6 ) ) { ?> 
</article>		

	<div id="section_six" class="chapitre">
		<?php if( !empty( $section_title_six ) ) : ?>
			<div class="section_title" id="sec6_title">
				<h1><span id="bloc_title_6"><?php echo $section_title_six; ?></span></h1>
			</div> 
		<?php endif; ?> 
	</div>
	<?php if( !empty( $section6_caption ) ) : ?> 
		<div class="caption_img_slf"> 
			<?php echo $section6_caption; ?> 
		</div> 
	<?php endif; ?>
	<article class="content <?php if ($meta_col == "select-two") { echo $large; } elseif ($meta_col == "select-three") { echo $small; } else { echo $medium; } ?>" > 
<?php } elseif( !empty( $section_video_6 ) ) { ?>
</article>
		
		<div class="chapitre video" id="section_six">	
			<div class="bg_container">
				<?php echo html_entity_decode($section_video_6); ?>
			</div>
		</div> 
	<?php if( !empty( $section6_caption ) ) : ?> 
		<div class="caption_img_slf"> 
			<?php echo $section6_caption; ?> 
		</div> 
	<?php endif; ?>
	<article class="content <?php if ($meta_col == "select-two") { echo $large; } elseif ($meta_col == "select-three") { echo $small; } else { echo $medium; } ?>" > 
		<?php if( !empty( $section_title_six ) ) : ?>
			<h1 class="title-map"><?php echo $section_title_six; ?></h1>
		<?php endif; ?> 
<?php } elseif( !empty( $meta_map_6 ) ) { ?>
	</article>
	<div class="chapitre map">	
		<?php 
			$meta_map_6 = html_entity_decode($meta_map_6);	
			echo do_shortcode($meta_map_6); ?>
	</div>
	<?php if( !empty( $section6_caption ) ) : ?> 
		<div class="caption_img_slf"> 
			<?php echo $section6_caption; ?> 
		</div> 
	<?php endif; ?>
	<article class="content <?php if ($meta_col == "select-two") { echo $large; } elseif ($meta_col == "select-three") { echo $small; } else { echo $medium; } ?>" > 

		<?php if( !empty( $section_title_six ) ) : ?>
			<h1 class="title-map"><?php echo $section_title_six; ?></h1>
		<?php endif; ?> 
<?php } 
	
	if( !empty( $section_six ) ) : ?> 
		<section class="first"> 
			<?php echo apply_filters('the_content', $section_six); ?>
		</section>
	<div class="clear"> </div>
<?php endif; 

//Section 7 

if( empty( $section_img_7 ) && empty( $section_video_7 ) && !empty($section_title_sept) && empty( $meta_map_7 ) ) { ?>
	<div class="clear"></div>
	<div class="nav_anchor"></div>
	<div id="section_sept" class="section_no_img"></div>

		<h1 id="first_title"> <?php echo $section_title_sept; ?></h1>

<?php } elseif ( !empty( $section_img_7 ) ) { ?> 
</article>		

	<div id="section_sept" class="chapitre">
		<?php if( !empty( $section_title_sept ) ) : ?>
			<div class="section_title" id="sec7_title">
				<h1><span id="bloc_title_7"><?php echo $section_title_sept; ?></span></h1>
			</div> 
		<?php endif; ?> 
	</div>
	<?php if( !empty( $section7_caption ) ) : ?> 
		<div class="caption_img_slf"> 
			<?php echo $section7_caption; ?> 
		</div> 
	<?php endif; ?>
	<article class="content <?php if ($meta_col == "select-two") { echo $large; } elseif ($meta_col == "select-three") { echo $small; } else { echo $medium; } ?>" > 
<?php } elseif( !empty( $section_video_7 ) ) { ?>
</article>
		
		<div class="chapitre video" id="section_sept">	
			<div class="bg_container">
				<?php echo html_entity_decode($section_video_7); ?>
			</div>
		</div> 
	<?php if( !empty( $section7_caption ) ) : ?> 
		<div class="caption_img_slf"> 
			<?php echo $section7_caption; ?> 
		</div> 
	<?php endif; ?>
	<article class="content <?php if ($meta_col == "select-two") { echo $large; } elseif ($meta_col == "select-three") { echo $small; } else { echo $medium; } ?>" > 
		<?php if( !empty( $section_title_sept ) ) : ?>
			<h1 class="title-map"><?php echo $section_title_sept; ?></h1>
		<?php endif; ?> 
<?php } elseif( !empty( $meta_map_7 ) ) { ?>
	</article>
	<div class="chapitre map">	
		<?php 
			$meta_map_7 = html_entity_decode($meta_map_7);	
			echo do_shortcode($meta_map_7); ?>
	</div>
	<?php if( !empty( $section7_caption ) ) : ?> 
		<div class="caption_img_slf"> 
			<?php echo $section7_caption; ?> 
		</div> 
	<?php endif; ?>
	<article class="content <?php if ($meta_col == "select-two") { echo $large; } elseif ($meta_col == "select-three") { echo $small; } else { echo $medium; } ?>" > 

		<?php if( !empty( $section_title_sept ) ) : ?>
			<h1 class="title-map"><?php echo $section_title_sept; ?></h1>
		<?php endif; ?> 
<?php } 
	
	if( !empty( $section_sept ) ) : ?> 
		<section class="first"> 
			<?php echo apply_filters('the_content', $section_sept); ?>
		</section>
	<div class="clear"> </div>
<?php endif; 

if( !empty( $nextpage ) ) { ?>
	<div id="nextpage"> <?php 	
		$prev_post = get_previous_post();
			if($prev_post) { ?>
			<span class="prevlf"> <span class="lf">	<?php				
			   $prev_title = strip_tags(str_replace('"', '', $prev_post->post_title)); ?>
			   <span class="ion ion-ios-arrow-back"></span>
			  <?php echo "\t" . '<a rel="prev" href="' . get_permalink($prev_post->ID) . '" title="' . $prev_title. '" class=" ">' .  $prev_title . '</a>' . "\n";
			?> </span> </span> <?php
			}

		$next_post = get_next_post();
			if($next_post) {  ?>
			<span class="nextlf"> <span class="lf">	<?php
			   $next_title = strip_tags(str_replace('"', '', $next_post->post_title));
			   echo "\t" . '<a rel="next" href="' . get_permalink($next_post->ID) . '" title="' . $next_title. '" class=" ">' .  $next_title . '</a> <span class="ion ion-ios-arrow-forward"></span>' . "\n";
			?> </span> </span> <?php
			} ?>
	</div>
	<div class="clear"></div>
 <?php }?> 