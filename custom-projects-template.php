<?php
/*
Template Name: Custom Projects Template
*/
get_header(); ?>

<section id='body_area projects_area' class="heading-m">
    <div class="container">
        <div class="row gy-4">
            <?php
            query_posts('post_type=project&post_status=publish&posts_per_page=-1&order=ASC&paged=' . get_query_var('post'));
            if (have_posts()):
                $i = 1;
                while (have_posts()):
                    the_post();
                    ?>
                    <div class="col-md-4">
                        <div class="card" style="overflow: hidden;">
                            <div class="card-body">
                                <?php the_post_thumbnail('project'); ?>
                                <h2 class="card-title">
                                    <?php the_title(); ?>
                                </h2>
                                <p class="card-text">
                                    <?php the_excerpt(); ?>
                                </p>
                                <button class="btn primary_btn" type="button" data-bs-toggle="modal"
                                    data-bs-target="#Modal-<?php echo $i; ?>">View Project</button>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="Modal-<?php echo $i; ?>" tabindex="-1"
                        aria-labelledby="ModalLabel-<?php echo $i; ?>" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="fs-5 ModalLabel-<?php echo $i; ?>" id="exampleModalLabel">
                                        <?php the_title(); ?>
                                    </h2>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <?php the_post_thumbnail('project'); ?>
                                    <div class="mt-1">
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $i++;
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>