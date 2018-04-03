<?php /* Template Name: Hero */ ?>
<?php get_header(); ?>
<div class="col-md-8 mt-5 mb-5">
    <?php //$fields = get_fields();
            //$fields['hero_text'];
            ?>
    <?php the_field("hero_text"); ?>
    <img src="<?php echo get_field("hero_image")["url"]; ?>" alt="" height="50%" width="50%">
</div>
<?php get_footer();
