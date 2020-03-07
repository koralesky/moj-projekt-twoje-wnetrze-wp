<?php 
/* Template name: Projekty */
get_header();?>


<div class="projects-site">
<div class="container content">
<h1 class="text-center mb-5"><?php the_title();?></h1>
<div class="row mt-5 mx-1">
<?php 

$posts = get_posts(array(
	'posts_per_page'	=> -1,
  'post_type'			=> 'post',
  'cat' => 2
));

if( $posts ): ?>
	

		
	<?php foreach( $posts as $post ): 
		
		setup_postdata( $post );
		
		?>
        <div class="card col-12 col-md-4 mr-4 mb-4">
		
            
                <a class="" href="<?php the_permalink(); ?>">
                <div class="row mb-4">
                  <div class="col-12 px-0">
                    <img src="<?php the_post_thumbnail_url();?>" class="img-fluid" alt="">
                  </div>

                    </div>
                    <div class="row">
                    <div class="col text-center">
                            <h3 class="mb-4"><?php the_title();?></h3>
                        </div>
                    </div>
              </a>
            
      
    
    </div>
    
	
	<?php endforeach; ?>
	

	
	<?php wp_reset_postdata(); ?>

<?php endif; ?>

</div>

</div>

  </div>


<?php get_footer();?>