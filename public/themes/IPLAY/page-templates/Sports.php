<?php /* Template Name: Sports */ ?>
<div class="sports-background">
    <?php get_header(); ?>

    <?php $fields = get_fields(); ?>
    <div class="sports">
        <div class="sports-text-wrapper">
            <p class="bread-crumbs">Iplay > Sports</p>
            <h3 class="sports-text-title"> <?php echo $fields['sports_title']; ?> </h3>
            <div class="sports-text-content-wrapper">

                <p class="sports-text-content"> <?php echo $fields['sports_content']; ?> </p>
                <p class="sports-text-content"> <?php echo $fields['sports_content2']; ?> </p>
                <p class="sports-text-content3"> <?php echo $fields['sports_content3']; ?> </p>
            </div>
            <div class="sports-buy">
                <div class="sports-text-sub-apple" alt=""></div>
                <div class="sports-text-sub-google" alt=""></div>
            </div>
            <div class="sports-image-sub-carousel">
                <img class="sports-image-badge login-img" data-position="1" src=" <?php echo $fields['sports_image_badge2']["url"]; ?>" alt="">
                <img class="sports-image-badge profile-img" data-position="2" src=" <?php echo $fields['sports_image_badge1']["url"]; ?>" alt="">
                <img class="sports-image-badge post-img" data-position="3" src=" <?php echo $fields['sports_image_badge3']["url"]; ?>" alt="">
            </div>
        </div>
    </div>


    <?php get_footer(); ?>
</div>
