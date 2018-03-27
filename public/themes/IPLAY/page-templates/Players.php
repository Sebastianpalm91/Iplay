<?php /* Template Name: Players */ ?>
<?php get_header(); ?>
<div class="col-md-8 m-5">

<?php if (have_posts()): ?>

    <?php while (have_posts()): the_post(); ?>

        <h2><?php the_title(); ?></h2>

        <?php the_content(); ?>

    <?php endwhile; ?>

<?php endif; ?>

</div>
<?php get_footer(); ?>
