<header class="project-header">

<h1 class="project-title">
  <div class="iont">
    <ion-icon name="cellular"></ion-icon>
  </div> <?php the_title(); ?>
</h1>

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

  <p class="project-owner">
    <span class="fa fa-user"></span> <span><?php _e('Initiated by', 'geoformat'); ?> : </span>

    <?php if ($project_website != '') : ?>

      <a href="<?php echo $project_website; ?>" target="_blank">
        <?php echo $project_owner; ?>
      </a>

    <?php else : ?>

      <?php echo $project_owner; ?>

    <?php endif; ?>

  </p>

<?php endif; ?>
</header>

<?php
// Has featured Image ?
if (has_post_thumbnail()) {
the_post_thumbnail('gp-project-thumb');
}
?>

<div class="project-content">

<?php the_content();

if (has_tag()) : ?>
  <div id="geotagp">
    <ion-icon name="folder-open"></ion-icon>
    <span><?php echo get_the_category_list(', '); ?></span>
    &nbsp;
    <?php the_tags('<ion-icon name="pricetag"></ion-icon> &nbsp;', ', ', '<br />'); ?>
  </div>
<?php endif; ?>



</div>