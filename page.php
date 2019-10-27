<?php get_header(); ?>

<div class="container main-block">
    <div class="row">
        <div class="col">
            <?php if(have_posts()): ?>
                <?php while(have_posts()): the_post(); ?>
                    <?php the_content(); ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
