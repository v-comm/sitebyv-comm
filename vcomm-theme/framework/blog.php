<!-- ..................................... -->
<!-- página 05 -->
<!-- ..................................... -->
<div class="hero is-fullheight">
    <div class="hero-body">
        <div class="container has-text-centered">
            <h1 class="title is-1 white">Blog</h1>

            <!-- query -->
            <?php 
            $the_query = new WP_Query( array(
                'category_name' => 'sem-categoria',
                'posts_per_page' => 12,
                'post_type' => 'post',
            )); 
            ?>

            <!-- query-content -->
            <?php if ( $the_query->have_posts() ) : ?>
            <ul class="thumbs">
                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                <li>
                    <a href="<?php the_permalink(); ?>">
                        <div class="thumb" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>
                    </a>
                    <p>&nbsp;</p>
                    <h1 class="title is-5 color1"><?php the_title(); ?></h1>
                    <div>
                        <a href="<?php the_permalink(); ?>" class="button is-rounded is-outlined is-color">saiba mais</a>
                    </div>
                    <p>&nbsp;</p>
                </li>
                <?php endwhile; ?>
            </ul>

            <!-- query-close -->
            <?php wp_reset_postdata(); ?>
            <?php else : ?>
            <p><?php __('Em breve :)'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>