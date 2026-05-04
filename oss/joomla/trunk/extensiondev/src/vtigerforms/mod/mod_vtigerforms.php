<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/
defined('_JEXEC') or die('Restricted access');
?>

<script type="text/javascript">
function mod_vtigerforms_submit(submitButton) {
	var form = submitButton.form;

	// Mandatory form field check
	var mandatory = [ ]; //'vt_lastname', 'vt_company', 'vt_email' ];
	for(var index = 0; index < mandatory.length; ++index) {
		var formElement = form[mandatory[index]];
		if(formElement) {
			if(formElement.value == '') {
				formElement.focus();
				return false;
			}
		}
	}

	// Effects
	var fx = {
		'loading': new Fx.Style( 'mod_vtigerforms_loading', 'opacity',{ duration: 1000 } ),
		'success': new Fx.Style( 'mod_vtigerforms_success', 'opacity',{ duration: 2000 } ),
		'fail': new Fx.Style( 'mod_vtigerforms_fail', 'opacity',{ duration: 2500 } )
	};

	var toogle_display = function( e1, e2 ) {
		$(e1).style.display = 'inline';
		if(typeof(e2) != 'undefined') $(e2).style.display = 'none';
	};

	var feedback_success = function() {
		toogle_display('mod_vtigerforms_success','mod_vtigerforms_loading');
		fx.success.start( 1,0 );		
	};

	var feedback_fail = function() {
		toogle_display('mod_vtigerforms_fail','mod_vtigerforms_loading');
		fx.fail.start( 1,0 );
	};
	
	// Mootools handling (Joomla includes by default)
	var formInstance = $(form);
	formInstance.send({
		onRequest : function() {
			toogle_display('mod_vtigerforms_loading');
			submitButton.disabled = true;
		},
		onSuccess : function(response) {
			if(response.indexOf('com_vtigerforms_RESP:SUCCESS') > -1) {
				feedback_success();
				form.reset();
			} else {
				feedback_fail();
			}
			submitButton.disabled = false;
		},
		onFailure : function() {
			feedback_fail();
			submitButton.disabled = false;
		}
	});

	return false;
}
</script>

<style type="text/css">
#mod_vtigerforms_loading, #mod_vtigerforms_success, #mod_vtigerforms_fail {
	display: none;
	padding: 3px;
}
#mod_vtigerforms_loading {
	background-color: #819F70;
	color: white;
}
#mod_vtigerforms_success {
	background-color: gray;
	color: white;
}
#mod_vtigerforms_fail {
	background-color: red;
	color: white;
}

</style>

<?php echo JText::_('Please provide the information') ?>

<!-- NOTE: Prefix the form element name with 'vt_' if it should be posted to vtiger CRM -->
<form method="POST" action="<?php echo JRoute::_('index.php')?>">
	<fieldset class="input" style='border-right: 0; border-left: 0;'>
	<p>
		<label for="vt_lastname"><?php echo JText::_('Your name')?> <font color="red">*</font></label>
		<input name="vt_lastname" type="text" class="inputbox" size="18">
	</p>
	<p>
		<label for="vt_company"><?php echo JText::_('Company')?> <font color="red">*</font></label>
		<input name="vt_company" type="text" class="inputbox" size="18">
	</p>
	<p>
		<label for="vt_email"><?php echo JText::_('Email')?> <font color="red">*</font></label>
		<input name="vt_email" type="text" class="inputbox" size="18">
	</p>

	<input type="hidden" name="option" value="com_vtigerforms" />
	<?php echo JHTML::_( 'form.token' ); ?>

	<input type="submit" onclick="return mod_vtigerforms_submit(this);" class="button" value="<?php echo JText::_('Submit')?>">
	<span id="mod_vtigerforms_loading"><?php echo JText::_('Sending...')?></span>
	<span id="mod_vtigerforms_success"><?php echo JText::_('Thank you')?></span>
	<span id="mod_vtigerforms_fail"><?php echo JText::_('Failed!')?></span>

</form>
