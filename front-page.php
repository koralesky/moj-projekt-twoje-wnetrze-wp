<?php get_header();?>
<div id="fullpage">
	  	<section class="section-welcome section" data-anchor="welcome">
			<div class="container content-welcome">
				<div class="row text-center ">
					<div class="col mx-auto">
						<span class="welcome-text">
							Spotkajmy się i porozmawiajmy zupełnie niezobowiązująco, by
							hasło <h1>„Mój projekt,
							Twoje wnętrze”</h1> stało się rzeczywistością.
						</span>
						<br>
					<a href="#about-me" class="btn action-btn mt-2">ZAPRASZAM</a>
					</div>
					
				</div>
			</div>
		</section>
		  
		<section class="section-about section" data-anchor="about-me">
			<div class="container content">
				<div class="row">
					<div class="col mx-auto">
						<h1 class="mb-4 text-center">O mnie</h1>
						<div class="row">
							<div class="col-12 col-lg-6 mt-lg-3">
								<p>
									Projektuję wnętrza spersonalizowane, dla konkretnych osób z
									  ich wymaganiami funkcjonalnymi, ale także i upodobaniami
									  estetycznymi. Najbardziej cenię w sobie uczciwość i pracowitość,
									  a podstawę mojej pracy stanowi kontakt z Klientem – uważam,
									  że wspólne zrozumienie to 50% sukcesu. W praktyce najlepiej
									  sprawdza się marketing szeptany, więc jeśli czytasz tę ofertę,
									  najprawdopodobniej oznacza ona zadowolonego polecającego.
								</p>
							</div>
							
						</div>
						
					</div>
				</div>
			</div>
		</section>
		  
		  <section class="section-pricing text-center m-0 section" data-anchor="pricing">
			  <div class="row">
			  <div class="col-12 d-lg-none">
				  <div class="filler"></div>
			  </div>
			  <div class="col-12 col-lg-6 p-0">
				<a href="#">
					<div class="basic">
						<div class="content">
							<h1 class="py-3">Pakiet podstawowy</h1>
						</div>
						
					</div>
				</a>
				 </div>
				  <div class="col-12 col-lg-6 p-0">
				<a href="#">
					<div class="extended">
						<div class="content">
							<h1 class="py-3">Pakiet rozszerzony</h1>
						</div>
					</div>
				</a>
				  </div>
				  </div>
		</section>
		
		  <section class="section-projects section" data-anchor="projects">
			  <div class="container content">
				  <div class="row text-center">
			  	<div class="col">
						<h1 class="mb-4 text-center">Projekty</h1>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
						</p>
						<div class="row d-none d-lg-block">
							ASD
						</div>
						<a href="#" class="btn action-btn mt-2">ZOBACZ GALERIĘ</a>
					</div>
					  </div>
			  </div>
		  
		  </section>
		  <section class="section-contact section" data-anchor="contact">
			  <div class="container content">
				  <div class="row text-center">
			  	<div class="col">
						<h1 class="mb-4 text-center">Kontakt ze mną</h1>
						<p>
							Jeśli masz jakieś pytania, wypełnij proszę formularz.
						</p>
						<div class="row">
							<div class="d-none d-lg-block col-lg-9">
								<form id="contact-form1" name="contact-form1" action="mail1.php" method="POST">

									<!--Grid row-->
									<div class="row">
	
										<!--Grid column-->
										<div class="col-md-4">
											<div class="md-form mb-0">
												<input type="text" id="name1" name="name1" class="form-control">
												<label for="name1" class="">Twoje imię</label>
											</div>
										</div>
										<!--Grid column-->
	
										<!--Grid column-->
										<div class="col-md-4">
											<div class="md-form mb-0">
												<input type="text" id="email1" name="email1" class="form-control">
												<label for="email1" class="">Twój e-mail</label>
											</div>
										</div>
										<!--Grid column-->
										<!--Grid column-->
										<div class="col-md-4">
											<div class="md-form mb-0">
												<input type="text" id="phone1" name="phone1" class="form-control">
												<label for="phone1" class="">Twój Telefon</label>
											</div>
										</div>
										<!--Grid column-->
	
									</div>
									<!--Grid row-->
	
									<!--Grid row-->
									<div class="row">
										<div class="col-md-12">
											<div class="md-form mb-0">
												<input type="text" id="subject1" name="subject1" class="form-control">
												<label for="subject1" class="">Temat</label>
											</div>
										</div>
									</div>
									<!--Grid row-->
	
									<!--Grid row-->
									<div class="row">
	
										<!--Grid column-->
										<div class="col-md-12">
											<div class="md-form">
												<textarea type="text" id="message1" name="message1" rows="2" class="form-control md-textarea"></textarea>
												<label for="message1">Twoja Wiadomość</label>
											</div>
										</div>
									</div>
									<div class="zgoda">
										<input type="checkbox" value="1" name="zgoda"> "Przesyłając ten formularz, wyrażasz zgodę na kontakt drogą elektroniczną (e-mail, telefon komórkowy, telefon stacjonarny) przez REMOTE Paweł Małkowski. z siedzibą we Wrocławiu
										ul. Wandy 6/3 zgodnie z ustawą z dnia 18 lipca 2002 r. o świadczeniu usług drogą elektroniczną do momentu jej odwołania. "
									</div>
									<!--Grid row-->
									<div class="row">
										<div class="text-center text-md-left"><a class="btn btn-primary btn-1" onclick="checkContactInput1()">Wyślij</a> </div>
										<div class="text-center text-md-left"><a class="btn btn-primary btn-1" onclick="document.getElementById('contact-form1').reset();">Wyczyść</a> </div>
									</div>
								</form>
							</div>
							<div class="col-12 col-lg-3">
								<div class="row">
									<div class="col text-center mx-auto mt-lg-4">
								<ul class="list-unstyled">
								  <li class=""><a href="tel:+48607226269"><i class="fas fa-phone fa-2x"></i>
									  <p class="contactp">607-226-269</p>
									</a> </li>
								  <li><a
									  href="m&#x61;&#x69;&#108;&#116;&#111;&#x3A;
													  &#x62;&#x69;ur&#x6F;&#64;m&#x6F;jpr&#x6F;j&#101;&#107;&#116;&#x2E;&#99;&#x6F;m&#x2E;p&#108;"><i
										class="fas fa-envelope fa-2x"></i>
									  <p class="contactp">
										&#x62;&#x69;ur&#x6F;&#64;m&#x6F;jpr&#x6F;j&#101;&#107;&#116;&#x2E;&#99;&#x6F;m&#x2E;p&#108; </p>
									</a> </li>
				  <!--				  <li><a href="https://www.facebook.com"><i class="fab fa-facebook-square fa-2x"></i></a></li>-->
								  <li> NIP : 895-193-06-36 </li>
								</ul>
							</div>
						</div>
						
						<a href="#" class="btn action-btn mt-2 d-lg-none">PRZEJDŹ DO FORMULARZA</a>
					</div>
					  </div>
				  
            </div>
				</div>  
				  
			  
			  </div>
			  
			 <footer id="footer" class="footer">
                <div class="footer-top">
                    <div class="container"> </div>
                </div>
                <div class="container py-2 text-center">
                    <div class="copyright"> © Copyright <strong>Mój Projekt Twoje Wnętrze.</strong> Wszystkie prawa zastrzeżone. </div>
                    <div class="credits"> Designed by <strong>REMOTE</strong> &amp; <strong>KORALESKY DESIGN</strong> </div>
                </div>
            </footer>
  
				  
	
       
		  
		  </section>
		  
	  </div>

      <?php get_footer();?>