<?php
get_header('page');
?>

<section class="contact-main">
		<div class="contact-map">
			<div class="contact" style="z-index: -1;">
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2895687731!2d-74.26055986835598!3d40.697668402590374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1562582305883!5m2!1sen!2sin" frameborder="0" style="border:0" allowfullscreen>
				</iframe>
				<div class="contact-details">
					<h5>Opening hours</h5>

					<div class="opening-info-day">
					    <span class="opening-left">Monday-Friday</span>
					    <span class="opening-right">10:00 - 18:00</span>
					</div>
					<div class="opening-info-day">
					    <span class="opening-left">Monday-Friday</span>
					    <span class="opening-right">10:00 - 18:00</span>
					</div>
					<div class="opening-info-day">
					    <span class="opening-left">Monday-Friday</span>
					    <span class="opening-right">10:00 - 18:00</span>
					</div>
					<div class="opening-info-day">
					    <span class="opening-left">Monday-Friday</span>
					    <span class="opening-right">10:00 - 18:00</span>
					</div>
					<div class="opening-info-day">
					    <span class="opening-left">Monday-Friday</span>
					    <span class="opening-right">10:00 - 18:00</span>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="contact-main">
		<div class="contact-form">
			<div class="widget">
				<div class="contact-grids">
					<div class="contact-left">
						<div class="sub-grids">
							<span class="fa fa-map-marker"></span>
							<div class="location-info">
								<span>Address</span>
								<p> Dolor sit, #PTH, 55080, 8800 Honey Street</p>
								<p>sed at ipsum, #9436 Apt Pro towers</p>
								<p>United kingdom, UK.</p>
							</div>
						</div>

						<div class="sub-grids">
							<span class="fa fa-envelope-o"></span>
							<div class="email-info">
								<span>Have any Questions?</span>
								<a href="mailto:aptpro@examplemail.com"> aptpro@examplemail.com</a>
							</div>
						</div>

						<div class="sub-grids">
							<span class="fa fa-phone"></span>
							<div class="email-info">
								<span>Phone Number</span>
								<a href="tel:(123) 456-78-90"> (123) 456-78-90</a>
							</div>
						</div>
					</div>
					<div class="contact-right">
						<form action="">
							<div class="input-grids">
								<input type="text" name="" placeholder="Full name" class="contact-input">
								<input type="email" name="" placeholder="Your email" class="contact-input">
								<input type="text" name="" placeholder="Subject" class="contact-input">
								<input type="number" name="" placeholder="Phone number" class="contact-input">
							</div>
							<textarea name="" placeholder="Type your message here" required=""></textarea>
							<input class="btn submit" type="submit" value="Send Message">
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php
    get_footer();
?>