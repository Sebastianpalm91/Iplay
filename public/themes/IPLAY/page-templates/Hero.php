<?php /* Template Name: Hero */ ?>
<?php get_header(); ?>
<div class="col-md-12 p-0 m-0">
    <div class="home-container">
        <?php $fields = get_fields();?>
        <div class="hero">
            <div class="hero-text-wrapper">
                <p class="hero-text"> <?php echo $fields['hero_text']; ?> </p>

            </div>
            <div class="hero-text-sub-wrapper">

            <p class="hero-text-sub"> <?php echo $fields['hero_text_sub']; ?> </p>
        </div>

        </div>

        <div class="uniting-sport">
            <p class="uniting-text"> <?php echo $fields['uniting_text'] ?></p>
            <div class="uniting-image">
                <?php //echo $fields['uniting_image']["url"]; ?>
            </div>
        </div>

        <div class="app-tour">
            <p class="app-text"> <?php echo $fields['app_text'] ?></p>
            <div class="app-image">
                <img src="<?php //echo $fields['app_image']["url"]; ?>" alt="">
            </div>
        </div>

        <div class="news-feed">
            <p class="news-text"> <?php echo $fields['news_text'] ?></p>
            <div class="news-image">
                <img src="<?php //echo $fields['news_image']["url"]; ?>" alt="" >
            </div>
        </div>
    </div>
</div>
<?php get_footer();
