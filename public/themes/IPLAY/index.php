<?php get_header(); ?>
<div class="col-md-12 col-sm-12 col-sm-8 mt-5">
    <main role="main">
        <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <article class="home-feed">
                <header>
                    <h1><?php the_title(); ?></h1>
                </header>
                <?php the_content(); ?>
            </article>
        <?php endwhile; else: ?>
            <article>
                <p>Nothing to see.</p>
            </article>
        <?php endif; ?>
    </main>
</div>

<?php get_footer();
