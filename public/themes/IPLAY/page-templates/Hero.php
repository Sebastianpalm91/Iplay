<?php /* Template Name: Hero */ ?>
<?php get_header(); ?>
<div class="col-md-8 col-md-12 mt-5 mb-5">
    <?php $fields = get_fields();?>
    <div class="hero">
        <p> <?php echo $fields['hero_text']; ?> </p>
        <img src="<?php echo $fields['hero_image']["url"]; ?>" alt="" height="50%" width="50%">
    </div>

    <div class="uniting-sport">
        <p> <?php echo $fields['uniting_text'] ?></p>
        <img src="<?php echo $fields['uniting_image']["url"]; ?>" alt="" height="50%" width="50%">
    </div>

    <div class="app-tour">
        <p> <?php echo $fields['app_text'] ?></p>
        <img src="<?php echo $fields['app_image']["url"]; ?>" alt="" height="50%" width="50%">
    </div>

    <div class="news-feed">
        <p> <?php echo $fields['news_text'] ?></p>
        <img src="<?php echo $fields['news_image']["url"]; ?>" alt="" height="50%" width="50%">
    </div>

</div>
<?php get_footer();
