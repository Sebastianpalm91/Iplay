<?php /* Template Name: Sports */ ?>
    <?php get_header(); ?>
    <div class="sports-background">

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
    <div class="sportsoniplay-container">
        <div class="iplaysports-text-wrapper">
            <p class="iplaysports-text">Sports on IPLAY</p>
        </div>

        <div class="iplaysports-sub-text-wrapper">
            <p class="iplaysports-sub-text">Avaliable right now:</p>
        </div>

        <div class="sports-icon-avaliable-wrapper">
            <div class="football-container">
                <img class="sport-football-picture" src="<?php echo $fields['sports_icons_football']["url"]; ?>" alt="">
                <div class="football-icon-text"><p>Fotball</p></div>
            </div>

            <div class="handball-container">
                <img class="sport-handball-picture" src="<?php echo $fields['sports_icons_handball']["url"]; ?>" alt="">
                <div class="handball-icon-text"><p>Handball</p></div>
            </div>

            <div class="bandy-container">
                <img class="sport-bandy-picture" src="<?php echo $fields['sports_icons_bandy']["url"]; ?>" alt="">
                <div class="bandy-icon-text"><p>Bandy</p></div>
            </div>

            <div class="basketball-container">
                <img class="sport-basketball-picture" src="<?php echo $fields['sports_icons_basketball']["url"]; ?>" alt="">
                <div class="basketball-icon-text"><p>Basketball</p></div>
            </div>
        </div>

        <div class="coming-soon-text-wrapper">
            <p class="coming-soon-text">Coming soon:</p>
        </div>

        <div class="sports-icon-coming-wrapper">

                    <div class="hockey-container">
                        <img class="sport-hockey-picture" src="<?php echo $fields['sports_icons_hockey']["url"]; ?>" alt="">
                        <div class="hockey-icon-text"><p>Hockey</p></div>
                    </div>
                    <div class="esports-container">
                        <img class="sport-esports-picture" src="<?php echo $fields['sports_icons_e-sports']["url"]; ?>" alt="">
                        <div class="esports-icon-text"><p>E-sports</p></div>
                    </div>

                    <div class="skiing-container">
                        <img class="sport-skiing-picture" src="<?php echo $fields['sports_icons_skiing']["url"]; ?>" alt="">
                        <div class="skiing-icon-text"><p>E-Skiing</p></div>
                    </div>
                    <div class="floorball-container">
                        <img class="sport-floorball-picture" src="<?php echo $fields['sports_icons_floorball']["url"]; ?>" alt="">
                        <div class="floorball-icon-text"><p>Floorball</p></div>
                    </div>

                    <div class="horsesports-container">
                        <img class="sport-horsesports-picture" src="<?php echo $fields['sports_icons_horse-sports']["url"]; ?>" alt="">
                        <div class="horsesports-icon-text"><p>Horse Sports</p></div>
                    </div>
                    <div class="sailing-container">
                        <img class="sport-sailing-picture" src="<?php echo $fields['sports_icons_sailing']["url"]; ?>" alt="">
                        <div class="sailing-icon-text"><p>Sailing</p></div>
                    </div>

        </div>

    </div>



    <?php get_footer(); ?>
</div>
