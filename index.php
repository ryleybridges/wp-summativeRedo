<?php get_header(); ?>
        <div class="container main-block">
            <h1 class="text-center">Goldie Milk Bar & Eatery</h1>
            <div class="row">
                <div class="col">
                    <?php if(have_posts()): ?>
                        <?php while(have_posts()): the_post(); ?>
                            <div class="card mb-3 mt-3">
                                <div class="card-body">

                                    <div class="row">

                                        <?php if(has_post_thumbnail()): ?>
                                                <div class="col-12 text-center mb-3"><?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?></div>
                                        <?php endif; ?>
                                    </div>

                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
<?php get_footer(); ?>
