
<div class="loginBox">
	<div class="login-cont">
		<div class="login-header">
			<div><img src="<?php echo image_path('mulogo');?>" height="40" width="40"></div>
			<span class="login-title">MU-momonaPAS</span><br>
			<span class="sub-login-title">Property Administration System</span>
		</div> 
	</div>

	 <?php if ($sf_user->getFlash('login_failure', false) == true): ?>
		<div class="loginError">
			<div class="alert alert-error">
				<a class="close" data-dismiss="alert">&times;</a>
				Either your <strong>password</strong> or <strong>username</strong> was wrong, please try again!
			</div>
		</div>
	<?php endif; ?>

	 <?php if ($sf_user->getFlash('login_failure.locked', false) == true): ?>
		<div class="loginError">
			<div class="alert alert-error">
				<a class="close" data-dismiss="alert">&times;</a>
				This User is <strong>Locked</strong>, you can not use momonaPAS eLibrary anymore!
			</div>
		</div>
	<?php endif; ?>

	 <?php if ($sf_user->getFlash('login_failure.activation', false) == true): ?>
		<div class="loginError">
			<div class="alert alert-error">
				<a class="close" data-dismiss="alert">&times;</a>
				 This user is not <strong>Activated</strong>, you can not use momonaPAS eLibrary anymore!
			</div>
		</div>
	<?php endif; ?>

   <div class="loginForm">       
		<form class="well form-inline" action="<?php echo url_for('@signin'); ?>" method="post">
			<input type="text" class="span2 roundBox" id="username" name="username" >
			<input type="password" class="span2 roundBox" id="password" name="password" placeholder="Password">

			<input class="btn" type="submit" value="<?php echo 'Login';?>" />
			<label class="checkbox">
				<input type="checkbox"> Remember?
			</label>
		</form>
	</div>
</div>
