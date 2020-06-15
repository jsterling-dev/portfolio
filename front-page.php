<?php get_header(); ?>
	
	<main id="primary" class="site-main">
		
			<div id="wrapper">

				<section id="front-intro">

					<img class ="polaroid" src="<?php bloginfo('template_url');?>/images/jarrod_profile2.jpg" alt="Jarrod">
					<h1><span class="j">J</span>arrod<span class="s">S</span>terling</h1>
					<p class="tagline">I am a UX Designer & Front-end Developer from Vancouver, Canada.</p>
					<p class="about">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam semper non metus in condimentum. Proin mattis erat eu odio ultrices laoreet. Fusce a commodo magna, ut eleifend nisi. Suspendisse tempor luctus libero vitae tincidunt.</p>
					<p class="about">Proin mattis erat eu odio ultrices laoreet. Fusce a commodo magna, ut eleifend nisi. Suspendisse tempor luctus libero vitae tincidunt. In laoreet sapien eu dui faucibus tempor. Cras finibus luctus tortor, non gravida velit lacinia non. <a class ="learn-more" href="about">Learn More</a></p>
					
					<ul class ="contact-links">
						<li><a href="https://linkedin.com/in/jsterlingdev" target="_blank">LinkedIn</a></li>
						<li><a href="https://github.com/jsterling-dev" target="_blank">GitHub</a></li>
						<li><a href="mailto:js@jarrodsterling.com" target="_blank">Email</a></li>
					</ul>

				</section>

				<section class="front-work">
					<div id="work"></div>
					<h2 id="work-h2">Work</h2>
					<a href="sunrise"><img class ="sunrise" src="<?php bloginfo('template_url');?>/images/sunrise_framed.jpg" alt="Sunrise Brewery"></a>

					<a href="seatosky"><img class ="seatosky" src="<?php bloginfo('template_url');?>/images/sunrise_framed.jpg" alt="Sea To Sky Rapids"></a>

					<a href="portfolio"><img class ="portfolio" src="<?php bloginfo('template_url');?>/images/sunrise_framed.jpg" alt="Portfolio"></a>

				</section>

			</div> <!--end wrapper-->
	</main>
	
<?php
get_footer();