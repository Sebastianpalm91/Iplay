  <?php wp_footer(); ?>
</div>
<div class="footer-container col-md-12 col-md-8">
    <div class="footer-menu">
            <?php
            $pages = get_pages(array('sort_column' => 'menu_order'));;
            foreach ( $pages as $page ) {
                $option = '<div class="skew mx-auto"><a class="nav-link nav-color skew2" href="' .
                get_page_link( $page->ID ) .
                '">' .
                $page->post_title .
                '</a></div>';
                echo $option;
            }
            ?>
    </div>
</div>
</div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
