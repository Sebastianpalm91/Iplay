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
            <p class="uniting-text-title"> <?php echo $fields['uniting_text_title']; ?></p>
            <p class="uniting-text-subtitle"> <?php echo $fields['uniting_text_subtitle']; ?></p>
            <p class="uniting-text-content"> <?php echo $fields['uniting_text_content']; ?></p>
        </div>
        <div class="uniting-user-icons">
            <!-- 1ST -->
            <img class="uniting-image-athletes" src="<?php echo $fields['uniting_image_athletes']["url"]; ?>" alt="">
            <img class="uniting-image-fans" src="<?php echo $fields['uniting_image_fans']["url"]; ?>" alt="">
            <img class="uniting-image-coaches" src="<?php echo $fields['uniting_image_coaches']["url"]; ?>" alt="">
            <!-- 2ND -->
            <img class="uniting-image-teams" src="<?php echo $fields['uniting_image_teams']["url"]; ?>" alt="">
            <img class="uniting-image-clubs" src="<?php echo $fields['uniting_image_clubs']["url"]; ?>" alt="">
            <img class="uniting-image-referees" src="<?php echo $fields['uniting_image_referees']["url"]; ?>" alt="">
            <!-- 3RD -->
            <img class="uniting-image-agents" src="<?php echo $fields['uniting_image_agents']["url"]; ?>" alt="">
            <img class="uniting-image-staff" src="<?php echo $fields['uniting_image_staff']["url"]; ?>" alt="">
            <img class="uniting-image-sponsors" src="<?php echo $fields['uniting_image_sponsors']["url"]; ?>" alt="">
            <!-- 4TH -->
            <img class="uniting-image-media" src="<?php echo $fields['uniting_image_media']["url"]; ?>" alt="">
            <img class="uniting-image-institutes" src="<?php echo $fields['uniting_image_institutes']["url"]; ?>" alt="">
            <img class="uniting-image-companies" src="<?php echo $fields['uniting_image_companies']["url"]; ?>" alt="">
        </div>
    </div>



    <div class="app-tour">
        <div class="app-text">
            <div class="app-text-container">
            <h2 class="tour-title-the">The</h2>
                 <ul>
                     <div class="skew">
                         <li data-key="athletes" class="list-item">ATHLETES</li>
                     </div>
                         <ul>
                             <div class="skew-fans">
                             <li data-key="fans" class="list-item">FANS</li>
                         </div>
                         <div class="skew-coaches">

                             <li data-key="coaches" class="list-item">COACHES</li>
                         </div>

                         </ul>
                 </ul>
                 <h2 class="tour-title-tour">tour</h2>

            </div>
              <br>
            <p>Take a tour through the Iplay Sport App <br>
                and discover some of the top features.
            </p>

        </div>
        <!-- ATHLETES -->
        <div class="app-image app-image--active" data-key="athletes">
            <div class="wrapper">
                <img class="tour-icon" src="<?php echo $fields['app_image_athletes_1']["url"]; ?>">
                <div class="text-wrapper">
                    <h3>Chat with your teammates</h3> <br>
                    <p>Connect with your team and <br>
                        chat with your current or <br>
                        previous teammates.</p>
                </div>
            </div>
            <div class="wrapper">
                <img class="tour-icon" src="<?php echo $fields['app_image_athletes_2']["url"]; ?>">
                <div class="text-wrapper">
                    <h3>Own your communication</h3>
                    <p>Connect your social networks to <br>
                        Iplay and maintain all your <br>
                        communication in one place.</p>
                </div>
            </div>
            <div class="wrapper">
                <img class="tour-icon" src="<?php echo $fields['app_image_athletes_3']["url"]; ?>">
                <div class="text-wrapper">
                    <h3>Take controll over your career</h3>
                    <p>Connect with agents, coaches, <br>
                        sponsors or companies that <br>
                        could be your future employers.</p>
                </div>
            </div>
        </div>
        <!-- FANS -->
        <div class="app-image" data-key="fans">
            <div class="wrapper">
                <img class="tour-icon" src="<?php echo $fields['app_image_fans_1']["url"]; ?>">
                <div class="text-wrapper">
                    <h3>test</h3> <br>
                    <p>Connect with your team and <br>
                        chat with your current or <br>
                        previous teammates.</p>
                </div>
            </div>
            <div class="wrapper">
                <img class="tour-icon" src="<?php echo $fields['app_image_fans_2']["url"]; ?>">
                <div class="text-wrapper">
                    <h3>test</h3>
                    <p>Connect your social networks to <br>
                        Iplay and maintain all your <br>
                        communication in one place.</p>
                </div>
            </div>
            <div class="wrapper">
                <img class="tour-icon" src="<?php echo $fields['app_image_fans_3']["url"]; ?>">
                <div class="text-wrapper">
                    <h3>test</h3>
                    <p>Connect with agents, coaches, <br>
                        sponsors or companies that <br>
                        could be your future employers.</p>
                </div>
            </div>
        </div>
        <div class="app-image" data-key="coaches">
            <div class="wrapper">
                <img class="tour-icon" src="<?php echo $fields['app_image_coaches_1']["url"]; ?>">
                <div class="text-wrapper">
                    <h3>kebab</h3> <br>
                    <p>Connect with your team and <br>
                        chat with your current or <br>
                        previous teammates.</p>
                </div>
            </div>
            <div class="wrapper">
                <img class="tour-icon" src="<?php echo $fields['app_image_coaches_2']["url"]; ?>">
                <div class="text-wrapper">
                    <h3>kebab</h3>
                    <p>Connect your social networks to <br>
                        Iplay and maintain all your <br>
                        communication in one place.</p>
                </div>
            </div>
            <div class="wrapper">
                <img class="tour-icon" src="<?php echo $fields['app_image_coaches_3']["url"]; ?>">
                <div class="text-wrapper">
                    <h3>kebab</h3>
                    <p>Connect with agents, coaches, <br>
                        sponsors or companies that <br>
                        could be your future employers.</p>
                </div>
            </div>
        </div>
        <div class="uniting-buy">
            <div class="uniting-text-sub-apple" alt=""></div>
            <div class="uniting-text-sub-google" alt=""></div>
        </div>
    </div>

    <div class="sportsoniplay">
        <div class="sportscontainer">
            <p class="hero-text"> Sports on IPLAY </p>
        </div>

        <div class="avaliable-now">
            <p><strong>Avaliable right now:</strong></p>
        </div>

        <div class="sportsiconwrapper">
            <div class="sport12-wrap">
                <div class="sport1">
                    <div class="sport1-picture"></div>
                    <div class="sport-text1"><p>Fotball</p></div>
                </div>
                <div class="sport2">
                    <div class="sport2-picture"></div>
                    <div class="sport-text1"><p>Handball</p></div>
                </div>
            </div>
            <div class="sport34-wrap">
                <div class="sport3">
                    <div class="sport3-picture"></div>
                    <div class="sport-text1"><p>Basketball</p></div>
                </div>
                <div class="sport4">
                    <div class="sport4-picture"></div>
                    <div class="sport-text1"><p>Bandy</p></div>
                </div>
            </div>
        </div>

        <div class="coming-soon">
            <p><strong>Coming soon:</strong></p>

        <div class="coming-sports-wrapper">
                <div class="sport56-wrap">
                    <div class="sport5">
                        <div class="sport5-picture"></div>
                        <div class="sport-text"><p>Hockey</p></div>
                    </div>
                    <div class="sport6">
                        <div class="sport6-picture"></div>
                        <div class="sport-text"><p>E-sports</p></div>
                    </div>
                </div>
                <div class="sport78-wrap">
                    <div class="sport7">
                        <div class="sport7-picture"></div>
                        <div class="sport-text"><p>E-Skiing</p></div>
                    </div>
                    <div class="sport8">
                        <div class="sport8-picture"></div>
                        <div class="sport-text"><p>Floorball</p></div>
                    </div>
                </div>
                <div class="sport910-wrap">
                    <div class="sport9">
                        <div class="sport9-picture"></div>
                        <div class="sport-text"><p>Horse Sports</p></div>
                    </div>
                    <div class="sport10">
                        <div class="sport10-picture"></div>
                        <div class="sport-text"><p>Sailing</p></div>
                    </div>
                </div>
        </div>
    </div>


    </div>
</div>
<?php get_footer();
