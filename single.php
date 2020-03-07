<?php get_header()?>


    <section class="single-project">
        <div class="conainer-fluid content">
        <div class="row">
					<div class="col-10 mx-auto">
        <h1 class="mb-4 text-center"><?php the_title();?></h1>
            <div class="row">
                
                <?php if(have_posts()) : while(have_posts()) : the_post();?>
                        <?php the_content();?>
                <?php endwhile; endif;?> 
            
            </div>
        </div>
        </div>
        </div>
    </section>


<?php get_footer()?>