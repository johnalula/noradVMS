<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <link rel="shortcut icon" href="/favicon.ico" />

    <?php include_stylesheets() ?>

<script>
function setFocused()
	{
		document.getElementById("useraccount").focus();

	}   
</script>
</head>
<body id="login-body" onload="setFocused();" >	
	
	<div class="topMenu-cont">
		<div class="">
			<div class="ui-logo-box">
			<div class="ui-logo">
				<img style="" class="logo-img" src="<?php echo image_path('logo') ?>">
			</div>
			<div class="ui-logo-header">
				<span class="ui-title">
					<?php echo __('NORAD VMS') ?>
				</span>
				<br>
				<span class="ui-sub-title">
					<?php echo __('Vehicle Management System') ?>
				</span>	
			</div>
			
			 
		</div>
		</div>
	</div>


	<div class="ui-login-container">
		<?php echo $sf_data->getRaw('sf_content') ?>
	</div>
</body>
</html>
