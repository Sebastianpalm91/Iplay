<?php /* Template Name: Hero */ ?>
<?php get_header(); ?>
<?php //echo $fields['uniting_image']["url"]; ?>
<div class="p-0 m-0 home-backgorund">
    <div class="home-container">
        <?php $fields = get_fields();?>
        <div class="hero">
            <div class="hero-text-wrapper">
                <p class="hero-text"> <?php echo $fields['hero_text']; ?> </p>
                <div class="hero-buy">
                    <div class="hero-text-sub-apple" alt=""></div>
                    <div class="hero-text-sub-google" alt=""></div>
                </div>
            </div>
            <div class="hero-text-sub-wrapper">
            <div class="hero-text-sub-wrapper2">
                <div class="hero-image-sub-carousel">
                    <img class="hero-image-badge login-img" data-position="1" src=" <?php echo $fields['hero_image_badge2']["url"]; ?>" alt="">
                    <img class="hero-image-badge profile-img" data-position="2" src=" <?php echo $fields['hero_image_badge1']["url"]; ?>" alt="">
                    <img class="hero-image-badge post-img" data-position="3" src=" <?php echo $fields['hero_image_badge3']["url"]; ?>" alt="">
                </div>
                <div class="hero-text-sub-container">
                    <p class="hero-text-sub"> <?php echo $fields['hero_text_sub']; ?></p>
                    <div class="hero-buy">
                        <div class="hero-text-sub-apple" alt=""></div>
                        <div class="hero-text-sub-google" alt=""></div>
                    </div>
                </div>

            </div>
            </div>

        </div>

        <div class="uniting-sport">
            <div class="uniting-text-wrapper">
                <p class="uniting-text-title"> <?php echo $fields['uniting_text_title'] ?></p>
                <p class="uniting-text-content"> <?php echo $fields['uniting_text_content'] ?></p>
            </div>
            <div class="uniting-user-icons">
                <img class="uniting-image-athletes" src="<?php echo $fields['uniting_image_athletes']["url"]; ?>" alt="">
                <img class="uniting-image-fans" src="<?php echo $fields['uniting_image_fans']["url"]; ?>" alt="">
                <img class="uniting-image-teams" src="<?php echo $fields['uniting_image_teams']["url"]; ?>" alt="">
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
