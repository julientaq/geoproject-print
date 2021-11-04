
<section class="post">

    <header>
        <?php $meta_date = get_post_meta( get_the_ID(), 'meta-date', true ); ?>
        <?php $post_date = get_the_date( 'l j F Y' );  ?>
        <p class="date-entry"><?php echo($post_date) ?></p>
        <h2><?php the_title() ?></h2>
        <figure><?php include 'reusable/getThumbnail.php' ?></figure>
    </header>

    <article>
        <?php the_content() ?>
    </article>

    <?php include 'reusable/tags.php' ?>



</section>