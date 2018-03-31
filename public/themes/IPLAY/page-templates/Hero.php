<?php /* Template Name: Hero */ ?>
<?php get_header(); ?>
<div class="col-md-8 mt-5 mb-5">

    <?php
        $fields = get_fields();
            die(var_dump($fields));
        echo $fields['hero_text'];
    ?>

</div>
<?php get_footer(); ?>
