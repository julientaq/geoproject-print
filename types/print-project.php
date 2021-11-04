<header class="project-header">

  <h1 class="project-title"><?php the_title(); ?></h1>

  <?php include 'reusable/tags.php'  ?>
  
  <?php
  $project_date = get_post_meta(get_the_ID(), 'gp_year', true);
  $project_month = get_post_meta(get_the_ID(), 'gp_month', true);
  $project_day = get_post_meta(get_the_ID(), 'gp_day', true);

  $gp_hide_date = get_post_meta(get_the_ID(), 'gp_hide_date', true);

  if ($project_date != ''  &&  !$gp_hide_date) : ?>

    <p class="project-date">
      <span class="fa fa-clock-o"></span> <span><?php _e('Started on', 'geoformat'); ?> : </span>
      <?php echo $project_day . "-" . $project_month . "-" . $project_date; ?>
    </p>

  <?php endif; ?>

  <?php
  $project_owner = get_post_meta(get_the_ID(), 'gp_owner', true);
  $project_website = get_post_meta(get_the_ID(), 'gp_website', true);

  if ($project_owner != '') : ?>
    <p class="project-owner"><?php echo $project_owner; ?></p>
  <?php endif; ?>

</header>

<figure class="project-cover">
  <?php
  // Has featured Image ?
  if (has_post_thumbnail()) {
    the_post_thumbnail('gp-project-thumb');
  }
  ?>
</figure>

<div class="project-content">
  <?php the_content(); ?>


</div>