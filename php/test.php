<?php $style = "reservation_style"; $title = "Catffee: reservation"; include "../php/header.php";
?>
<style>
<?PHP include('../css/reservation_style.css'); ?> 
</style>

<div class="step-content current" data-step="1">
	<div class="fields">
		<p>How would you rate your experience with us?</p>
		<div class="rating">
			<input type="radio" name="rating" id="radio1" value="Very Unsatisfied">
			<label for="radio1">1</label>
			<input type="radio" name="rating" id="radio2" value="Unsatisfied">
			<label for="radio2">2</label>
			<input type="radio" name="rating" id="radio3" value="Neutral">
			<label for="radio3">3</label>
			<input type="radio" name="rating" id="radio4" value="Satisfied">
			<label for="radio4">4</label>
			<input type="radio" name="rating" id="radio5" value="Very Satisfied">
			<label for="radio5">5</label>
		</div>

		<p>Where did you hear about us?</p>
		<div class="group">
			<label for="radio6">
				<input type="radio" name="hear_about_us" id="radio6" value="Search Engine">
				Search Engine
			</label>
			<label for="radio7">
				<input type="radio" name="hear_about_us" id="radio7" value="Newsletter">
				Newsletter
			</label>
			<label for="radio8">
				<input type="radio" name="hear_about_us" id="radio8" value="Advertisements">
				Advertisements
			</label>		
			<label for="radio9">
				<input type="radio" name="hear_about_us" id="radio9" value="Social Media">
				Social Media
			</label>		
		</div>					
	</div>
    <label for="comments">Additional Comments</label>
		<div class="field">
			<textarea id="comments" name="comments" placeholder="Enter your comments ..."></textarea>
		</div>
	</div>
	<div class="buttons">
		<input type="submit" class="btn" name="submit" value="Submit">
	</div>
</div>
   <?php include "../php/footer.php";?>