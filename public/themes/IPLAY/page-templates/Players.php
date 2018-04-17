    <?php /* Template Name: Players */ ?>
    <?php get_header(); ?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<div class="top-page-wrapper">
    <div class="top-search-bar">
        <h1><strong>Athletes</strong></h1>
    </div>
</div>
    <form class="search-field" action="/">
        <input type="text" placeholder="Search.." name="search">
        <button></button>
    </form>

<div class="function-bar">
    <div class="athlete-sport-wrapper">
            <div class="athlete-sport1">
                <div class="athlete-sport1-picture"></div>
                <div class="athlete-sport-text1"><p>Fotball</p></div>
            </div>
            <div class="sport2">
                <div class="athlete-sport2-picture"></div>
                <div class="athlete-sport-text1"><p>Handball</p></div>
            </div>
            <div class="sport3">
                <div class="athlete-sport3-picture"></div>
                <div class="athlete-sport-text1"><p>Basketball</p></div>
            </div>
            <div class="sport4">
                <div class="athlete-sport4-picture"></div>
                <div class="athlete-sport-text1"><p>Bandy</p></div>
            </div>
            <div class="male-female">
                <div class="male"></div>
                <div class="female"></div>
            </div>

            <div class="age-slide">
                <div class="slider"></div>
            </div>

            <div class="nationality-wrapper">
                <input class="navigation-content" placeholder="Nationality"></input>
            </div>
            <div class="apply-button-wrapper">
                <div class="apply-button"><p>Apply filters</p></div>
            </div>
    </div>

</div>


        <div class="filter-sort">
            <div class="filter-applied">
                <p>Filters applied:</p>
                <div class="desktop-handball"></div>
                <div class="desktop-age"></div>
                	<div class="dropdown-menu">
                        <div class="dropdown">
                            <button class="dropbtn">Sorting by:</button>
                            <div class="dropdown-content">
                                <a href="#">Popularity</a>
                                <a href="#">Age</a>
                                <a href="#">Gender</a>
                                <a href="#">Sport</a>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="filter">
                <div class="text">
                    <p></p>
                </div>
            </div>
            <div class="sort">
                <div class="text">
                    <p></p>
                </div>
            </div>
        </div>

        <div class="filter-buttons">
            <div class="handball"></div>
            <div class="age"></div>
        </div>

    <div class="players-wrapper">
        <div class="desktop-wrapper">
            <div class="portrait12">
                <div class="player1"></div>
                <a href="bella" class="player2">
                </a>
                <!-- <div class="player2"></div> -->
            </div>
            <div class="players-portraits">
                <div class="portrait34">
                    <div class="player3"></div>
                    <div class="player4"></div>
                </div>
        </div>
        </div>
</div>
    <div class="desktop-wrapper">
        <div class="players-portraits">
            <div class="portrait56">
                <div class="player5"></div>
                <div class="player6"></div>
            </div>
        </div>
        <div class="players-portraits">
            <div class="portrait78">
                <div class="player7"></div>
                <div class="player8"></div>
            </div>
        </div>
    </div>
    <div class="players-wrapper">
        <div class="desktop-wrapper">
            <div class="portrait12">
                <div class="player1"></div>
                <div class="player2"></div>
            </div>
            <div class="players-portraits">
                <div class="portrait34">
                    <div class="player3"></div>
                    <div class="player4"></div>
                </div>
        </div>
        </div>
</div>
    <div class="desktop-wrapper">
        <div class="players-portraits">
            <div class="portrait56">
                <div class="player5"></div>
                <div class="player6"></div>
            </div>
        </div>
        <div class="players-portraits">
            <div class="portrait78">
                <div class="player7"></div>
                <div class="player8" style="margin-bottom: 120px;"></div>
            </div>
        </div>
    </div>

    <?php get_footer();
