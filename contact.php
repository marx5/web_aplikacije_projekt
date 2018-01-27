<?php 
	print '
	<h1>Contact Form</h1>
	<div id="contact">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2866.788093896911!2d-79.43175338484019!3d44.06708417910926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882acd830aa84a81%3A0xfec5d2d8774120!2sUnbox+Therapy+Headquarters!5e0!3m2!1shr!2shr!4v1509365689190" width=100% height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		<form action="send-contact.php" id="contact_form" name="contact_form" method="POST">
			<label for="fname">First Name *</label>
			<input type="text" id="fname" name="firstname" placeholder="Your name.." required>
			
			<label for="lname">Last Name *</label>
			<input type="text" id="lname" name="lastname" placeholder="Your last natme.." required>
				
			<label for="email">Your E-mail *</label>
			<input type="email" id="email" name="email" placeholder="Your e-mail.." required>

			<label for="country">Country</label>
			<select id="country" name="country">
				<option value="">Please select</option>
				<option value="BE">Belgium</option>
				<option value="HR" selected>Croatia</option>
				<option value="LU">Luxembourg</option>
				<option value="HU">Hungary</option>
			</select>

			<label for="subject">Subject</label>
			<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

			<input type="submit" value="Submit">
		</form>
	</div>';
?>
