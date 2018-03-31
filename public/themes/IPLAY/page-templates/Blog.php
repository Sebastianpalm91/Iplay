<?php /* Template Name: Blog */ ?>
<?php get_header(); ?>
<div class="col-md-8 m-5">
    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <?php $filds = get_fields(); ?>
            <?php the_content(); ?>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<div id="carouselExampleControls" class="carousel slide col-md-8 mx-auto pt-4" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100 screenshot2">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 screenshot2">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 screenshot2">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<?php get_footer(); ?>
