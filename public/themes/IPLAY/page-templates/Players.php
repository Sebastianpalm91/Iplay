    <?php /* Template Name: Players */ ?>
    <?php get_header(); ?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<div class="top-page-wrapper">
    <div class="top-search-bar">
        <h1><strong>Athletes</strong></h1>
        <form class="search-field" action="/">
          <input type="text" placeholder="Search.." name="search">
          <button></button>
        </form>
    </div>
</div>

<div class="function-bar">

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
