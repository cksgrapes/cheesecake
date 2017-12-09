<?php get_header(); ?>
<h1>ななせとマシロの愛の練習日記</h1>

<?php while ( have_posts() ) : the_post(); ?>

    固定ページ

    <div class="post">
        <h2><?php the_title(); ?></h2>
        <div class="post_body">
            <?php //echo get_the_content(); ?>
            <?php the_excerpt(); ?>
        </div>
    </div>

<?php endwhile; ?>


<?php get_footer(); ?>
