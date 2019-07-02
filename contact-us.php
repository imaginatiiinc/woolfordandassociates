


<?php $current_page = 'contact-us'; include 'header.php'; ?>
	<div class="big-picture contact-us" style="height:auto">
		<img style="width:100% ;margin:0 auto; display:block" src="imgs/contact_bg.jpg">
	</div> <!-- end big picture -->
	<div class="main-container home container">
		<div class="main wrapper ">

			<!-- CONTENT HERE   ................................ -->
			<h1>Contact Us</h1>
			<hr>

			<p>
				Woolford & Associates, LLC<br/>
				513-368-2848<br/>
			</p>

			<div>
				<form id="contact_us">
					<input type="text" name="name" placeholder="Name" /><br/>
					<input type="text" name="company" placeholder="Company" /><br/>
					<input type="text" name="email" placeholder="Email Address" /><br/>
					<input type="text" name="phone" placeholder="Phone Number" /><br/>
					<textarea class="comment_box" name="comments" placeholder="Comments"></textarea><br/>
					<button class="send_button" type="button">
						<img src="imgs/send_button.png" width="100%" height="100%" alt="submit" />
					</button>
				</form>
			</div>
			
			<div class="form-errors"></div>
			<div class="form-result"></div>

			<p></p>
		</div> <!-- #main -->

	</div> <!-- #main-container container -->
<?php include 'footer.php' ?>
