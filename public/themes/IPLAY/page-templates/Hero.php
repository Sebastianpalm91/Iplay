<?php /* Template Name: Hero */ ?>
<?php get_header(); ?>
<?php //echo $fields['uniting_image']["url"]; ?>
<div class="p-0 m-0 home-backgorund">
    <div class="home-container">
        <?php $fields = get_fields();?>
        <div class="hero">
            <div class="hero-text-wrapper">
                <p class="hero-text"> <?php echo $fields['hero_text']; ?> </p>
            </div>
            <div class="hero-text-sub-wrapper">
                <div class="hero-text-sub-container">

                    <p class="hero-text-sub"> <?php echo $fields['hero_text_sub']; ?></p>
                    <img class="hero-text-sub-apple" alt="">
                    <img class="hero-text-sub-google" alt="">
                </div>
            </div>

        </div>

        <div class="uniting-sport">
            <div class="uniting-text-wrapper">
                <p class="uniting-text-title"> <?php echo $fields['uniting_text_title'] ?></p>
                <p class="uniting-text-content"> <?php echo $fields['uniting_text_content'] ?></p>
            </div>
            <div class="uniting-colors">
                <p class="uniting-color-title">Hello</p>
                <p class="uniting-color-content"> Anodnawoudnwaod</p>
            </div>
        </div>

        <div class="app-tour">
            <p class="app-text"> <?php echo $fields['app_text'] ?></p>
            <div class="app-image">
                <img src="<?php// echo $fields['app_image']["url"]; ?>" alt="">
            </div>
        </div>

    </div>
</div>
<?php get_footer();
