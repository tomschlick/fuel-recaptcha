<script type="text/javascript">
var RecaptchaOptions = {
	theme : 'clean'
};
</script>
<script type="text/javascript" src="<?php echo $server; ?>/challenge?k=<?php echo $public_key; ?>"></script>

<noscript>
	<iframe src="<?php echo $server; ?>/noscript?k=<?php echo $public_key; ?>" height="300" width="500" frameborder="0"></iframe><br>
	<textarea name="recaptcha_challenge_field" rows="3" cols="40"></textarea>
	<input type="hidden" name="recaptcha_response_field" value="manual_challenge">
</noscript>