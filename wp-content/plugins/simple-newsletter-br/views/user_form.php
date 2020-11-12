<div class="newsletter-box" data-showon='<?php echo get_option('simplenewsletter_showon'); ?>'>
	<?php $formID = uniqid('form_simplenewsletter-'); ?>
	<span><i class="ion-ios-paperplane-outline"></i></span>
	<strong>Get the best from Hundop <br/> each day to your inbox.</strong>
	<form method='POST' id='submit_simplenewsletter' class='<?php echo $formID ?>' style="z-index:999; position:relative;">
		<?php 
		if(get_option('simplenewsletter_showname') == 0)
		{
			?>
			<fieldset class='simplenewsleter-field simplenewsleter-field-name'>
				<input name='simplenewsletter[name]' type='text' placeholder='<?php echo __("Name", 'simple-newsletter-br') ?>'/>
			</fieldset>
			<?php 
		} ?>
		<fieldset class='class="form-group"' style="width:100% ; text-align:center">
			<input name='simplenewsletter[email]' type='email' placeholder='<?php echo __("Email", 'simple-newsletter-br') ?>' class="form-control" />
		</fieldset>
		<input type="submit" value="<?php echo __("SIGN ME UP", 'simple-newsletter-br') ?>" class='btn btn-primary btn-block'
         style="height:40px; width:100% !important; font-size:15px; margin:20px 0px; align:center;"/>
		
	</form>
	 <a class="spam-link" href="#" title="">No Spam, Only high-quality content</a>
	<div class="simplenewsletter_spinner" style="display:none;">
		<img src="<?php echo plugins_url('../images/loading_spinner.gif', __FILE__) ?>" style="margin-left:45%;">
	</div>
	
	<script>
	initSimpleNewsletter('.<?php echo $formID; ?>');
</script>

</div>				
												
