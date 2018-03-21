<?php /* Template Name: Download */ ?>
<?php get_header(); ?>
<div class="col-md-8 m-5">

<?php if (have_posts()): ?>

    <?php while (have_posts()): the_post(); ?>

        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <?php the_content(); ?>

    <?php endwhile; ?>

<?php endif; ?>

</div>
<?php get_footer(); ?>
