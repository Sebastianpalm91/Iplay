<?php /* Template Name: Athlete */ ?>
<?php get_header(); ?>
    <div class="athlete-background">

    <?php $fields = get_fields(); ?>
    <div class="athlete">
        <div class="athlete-text-wrapper">
            <p class="bread-crumbs">Iplay > Sports</p>
            <h3 class="athlete-text-title"> <?php echo $fields['athlete_text_title']; ?> </h3>
            <div class="athlete-text-content-wrapper">
                <p class="athlete-text-content"> <?php echo $fields['athlete_text_content1']; ?> </p>

            </div>
            <div class="athlete-buy">
                <div class="athlete-text-sub-apple" alt=""></div>
                <div class="athlete-text-sub-google" alt=""></div>
            </div>
            <div class="athlete-image-sub-carousel">
                <img class="athlete-image-badge login-img" data-position="1" src=" <?php echo $fields['athlete_image_badge2']["url"]; ?>" alt="">
                <img class="athlete-image-badge profile-img" data-position="2" src=" <?php echo $fields['athlete_image_badge1']["url"]; ?>" alt="">
                <img class="athlete-image-badge post-img" data-position="3" src=" <?php echo $fields['athlete_image_badge3']["url"]; ?>" alt="">
            </div>
        </div>
        <div class="empty-div">

        </div>
    </div>


    <?php get_footer(); ?>
</div>
