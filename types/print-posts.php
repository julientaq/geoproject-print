
<section class="post">

    <header>
        <?php $meta_date = get_post_meta( get_the_ID(), 'meta-date', true ); ?>

        <p class="date-entry"><?php echo($meta_date)?></p>
        <h2><?php the_title() ?></h2>
        <?php include 'reusable/getThumbnail.php' ?>
    </header>

    <article>
        <?php the_content() ?>
    </article>





    <?php include 'reusable/tags.php' ?>



</section>