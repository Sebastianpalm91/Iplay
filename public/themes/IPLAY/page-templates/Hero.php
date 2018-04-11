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
                <!-- 1ST -->
                <img class="uniting-image-athletes" src="<?php echo $fields['uniting_image_athletes']["url"]; ?>" alt="">
                <img class="uniting-image-fans" src="<?php echo $fields['uniting_image_fans']["url"]; ?>" alt="">
                <img class="uniting-image-teams" src="<?php echo $fields['uniting_image_teams']["url"]; ?>" alt="">
                <!-- 2ND -->
                <img class="uniting-image-athletes" src="<?php echo $fields['uniting_image_athletes']["url"]; ?>" alt="">
                <img class="uniting-image-fans" src="<?php echo $fields['uniting_image_fans']["url"]; ?>" alt="">
                <img class="uniting-image-teams" src="<?php echo $fields['uniting_image_teams']["url"]; ?>" alt="">
                <!-- 3RD -->
                <img class="uniting-image-athletes" src="<?php echo $fields['uniting_image_athletes']["url"]; ?>" alt="">
                <img class="uniting-image-fans" src="<?php echo $fields['uniting_image_fans']["url"]; ?>" alt="">
                <img class="uniting-image-teams" src="<?php echo $fields['uniting_image_teams']["url"]; ?>" alt="">
                <!-- 4TH -->
                <img class="uniting-image-athletes" src="<?php echo $fields['uniting_image_athletes']["url"]; ?>" alt="">
                <img class="uniting-image-fans" src="<?php echo $fields['uniting_image_fans']["url"]; ?>" alt="">
                <img class="uniting-image-teams" src="<?php echo $fields['uniting_image_teams']["url"]; ?>" alt="">
            </div>
        </div>

        <div class="app-tour">
            <div class="app-text">
                <h2>The
                     <ul>
                         <li class="list-item">ATHLETES</li>
                         <li class="list-item">FANS</li>
                         <li class="list-item">COACHES</li>
                     </ul>
                  Tour</h2><br>
                <p>Take a tour through the Iplay Sport App <br>
                    and discover some of the top features.
                </p>

            </div>
            <div class="app-image">
                <div class="wrapper">
                    <img class="tour-icon" src="<?php echo $fields['app_image']["url"]; ?>">
                    <div class="text-wrapper">
                        <h3>Chat with your teammates</h3> <br>
                        <p>Connect with your team and <br>
                            chat with your current or <br>
                            previous teammates.</p>
                    </div>
                </div>
                <div class="wrapper">
                    <img class="tour-icon" src="<?php echo $fields['app_image']["url"]; ?>">
                    <div class="text-wrapper">
                        <h3>Own your communication</h3>
                        <p>Connect your social networks to <br>
                            Iplay and maintain all your <br>
                            communication in one place.</p>
                    </div>
                </div>
                <div class="wrapper">
                    <img class="tour-icon" src="<?php echo $fields['app_image']["url"]; ?>">
                    <div class="text-wrapper">
                        <h3>Take controll over your career</h3>
                        <p>Connect with agents, coaches, <br>
                            sponsors or companies that <br>
                            could be your future employers.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php get_footer();
