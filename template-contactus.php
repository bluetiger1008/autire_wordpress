<?php
/**
 * Template Name: Contact Us Template
 */
?>

<div id="map">
</div>

<section class="contact">
	<div class="container">
		<div class="contact-wrapper">
			<h1>Contact Us</h1>
			<div class="contact-form">
				<h2>Send us a message</h2>
				<div class="columns is-gapless">
					<div class="column is-two-thirds">
						<div class="form">
							<?php 
								$contactForm = get_field('contact_us_form_script');
								echo do_shortcode($contactForm); 
							?>
						</div>
					</div>
					<div class="column">
						<div class="contact-information">
							<h3>Price Kubecka, PLLC</h3>
							<?php
									
							// vars
							$contact_information = get_field('contact_address');	

							if( $contact_information ): ?>
								<p><?php echo $contact_information; ?></p>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>