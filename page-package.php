<?php
/* Template Name: package site */
get_header();?>

<section class="package-page">

    <div class="container-fluid content">
    
        <div class="row">
        
        <?php if(have_rows('cennik')):?>
            <?php while(have_rows('cennik')):the_row();
                $opis_cennika = get_sub_field('opis_cennika');
                $cena_1 = get_sub_field('cena_1');
                $cena_2 = get_sub_field('cena_2');
                $cena_3 = get_sub_field('cena_3');
                $cena_4 = get_sub_field('cena_4');
                ;?>
            <?php endwhile;?>
        <?php endif;?>
        
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
                            <div class="col-12 ">
                                    <div class="row">
                                        <div class="col-12 col-lg">
                                            <div class="price-element">
                                                <p><?php echo $opis_cennika;?></p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg">
                                            <div class="price-element">
                                                <p><?php echo $cena_1;?></p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg">
                                            <div class="price-element">
                                                <p><?php echo $cena_2;?></p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg">
                                            <div class="price-element">
                                                <p><?php echo $cena_3;?></p>
                                            </div>
                                        </div>
                                        <div class="col-6 col-lg">
                                            <div class="price-element">
                                                <p><?php echo $cena_4;?></p>
                                            </div>
                                        </div>
                                    </div>
                            </div>
						</div>
                        
					</div>
				</div>
			</div>

            
    

    </div>

</section>

<?php get_footer();?>