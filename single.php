<?php get_header(); ?>

<main>
    <div class="container">

        <?php if ( have_posts() ) : ?>

            <?php while ( have_posts() ) : the_post(); ?>

                <article class="content-box">

                    <h1><?php the_title(); ?></h1>

                    <div class="post-meta">
                        Dipublikasikan pada <?php echo get_the_date(); ?>
                    </div>

                    <?php if ( has_post_thumbnail() ) : ?>
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail('large'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="content">
                        <?php the_content(); ?>
                    </div>

                </article>

            <?php endwhile; ?>

        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>