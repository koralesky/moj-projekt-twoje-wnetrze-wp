<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>
<body <?php body_class( );?>>

<header>
		<nav class="navbar navbar-expand-lg navbar-dark navigation fixed-top">
  <a class="navbar-brand" href="<?php echo get_home_url();?>"><img src="<?php echo get_template_directory_uri(  ) . '/assets/logo.png';?>" alt="logo"></a>
  <button class="navbar-toggler navbar-toggler-right collapsed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span> </span>
      <span> </span>
      <span> </span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav ml-auto" id="menu">
  <?php if(is_front_page()):?>
    
      <li class="nav-item">
        <a class="nav-link" href="#welcome" data-menuanchor="welcome">Strona Główna</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about-me" data-menuanchor="about-me">O mnie</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#pricing" data-menuanchor="pricing">Cennik</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#projects" data-menuanchor="projects">Projekty</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#contact" data-menuanchor="contact">Kontakt</a>
      </li>
    
  </div>
  <?php elseif(is_single( )):?>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo get_home_url( );?>">Strona Główna</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo get_home_url( ) . '/projekty';?>"> Projekty</a>
    </li>

    <?php elseif(!is_front_page() & is_page_template('page-package.php')):?>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo get_home_url( );?>">Strona Główna</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo get_home_url( ) . '/#pricing';?>">Cennik</a>
    </li>
      <?php if(is_page(7)):?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo get_home_url( ) . '/pakiet-rozszerzony';?>">Pakiet rozszerzony</a>
        </li>
      <?php else:?>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo get_home_url( ) . '/pakiet-podstawowy';?>">Pakiet podstawowy</a>
        </li>
      <?php endif;?>

  <?php elseif(!is_front_page()):?>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo get_home_url( );?>">Strona Główna</a>
    </li>


  
  <?php endif;?>
  
  </ul>
</nav>  
	</header>
    <main>
