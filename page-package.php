<?php
/* Template Name: package site */
get_header();?>

<section>

    <div class="container-fluid content">
    
    <div class="row">
					<div class="col-10 mx-auto">
						<h1 class="mb-4 text-center"><?php the_title();?></h1>
                        <div class="row">
                            <div class="col-12 col-lg-6 mt-lg-3">
								<p>
                                    <?php if(have_posts()) : while(have_posts()) : the_post();?>
                                            <?php the_content();?>
                                    <?php endwhile; endif;?>   
								</p>
							</div>
                            <div class="d-none d-lg-block col-lg-6">
                                <?php if(has_post_thumbnail( )):?>
                                    <img src="<?php the_post_thumbnail_url();?>" class="img-fluid">
                                <?php endif;?>
                            </div>
							
						    </div>
						</div>
					</div>
				</div>
			</div>

    

    </div>
</section>

<?php get_footer();?>