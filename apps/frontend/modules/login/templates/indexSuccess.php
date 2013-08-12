<?php echo $sf_request->getParameter('module') ?>
<div class="ui-login-box" id="">
	<table class="ui-login-table">
		<tr>
			<td class="ui-login-table-left-td">
				<div class="ui-login-box-cont">
					<div class="ui-login-left-box-top">
						<div class="ui-login-logo-main">
							<img style="" class="ui-logo-img-main" src="<?php echo image_path('property_management') ?>">
						</div>
					</div>
					<div class="ui-login-left-box-bottom">
						<div class="ui-login-logo">
							<table>
								<tr>
									<td>
										<img style="" class="ui-logo-img" src="<?php echo image_path('logo') ?>">
									</td>
									<td>
										<img style="" class="ui-mu-logo-img" src="<?php echo image_path('mulogo-small') ?>">
									</td>
								</tr>
							</table>
							
							
						</div>
					</div>
					<div class="clearFix"></div>
				</div>
			</td>
			<td class="ui-login-table-right" style="border:none;">
				<div class="ui-login-user-box">							 
					<div class="ui-login-user-box-content">       
						<form class="well form-inline ui-form" action="<?php echo url_for('@user_signin'); ?>" method="post">
							 <table class="ui-login-table-content" style="border:none;">
								<thead>
									<th class="ui-login-user-header">User Login</th>
								</thead>
								<tbody>
									<tr>
										<td class="ui-login-table-content-left-td ui-padding">
											<label class="ui-login-label">
												<span class="label-content">User Account</span>
											</label>
										</td>
									<tr>
										<td class="ui-login-table-content-left-td">
											 <span class="input-content"><input type="text" id="user_account" name="user_account" ></span> 
										</td>
									</tr>
									<tr>
										<td class="ui-login-table-content-left-td ui-padding">
											<label class="ui-login-label">
												<span class="label-content">Password</span>
											</label>
										</td>
									</tr>
									<tr>
										<td class="ui-login-table-content-left-td">
											 <span class="input-content"><input type="password" id="password" name="password" ></span> 
										</td>
									</tr>
									<tr>
										<td class="ui-login-table-content-left-td">
											<label class="ui-form-remember"><a href=""> <?php echo __('Forget your password?') ?></a></label>
										</td>
									</tr>
									</tr>
									<tr>
										<td class="ui-login-table-content-left-td">
											<input type="checkbox"> <label class="checkbox ui-form-remember"><?php echo __('Remember?') ?></label>
										</td>
									</tr>
									<tr>
										<td class="ui-login-table-content-left-td">
											<span class="input-content">
												<input style="" class="btn-primary input-width btn-right-margin" id="" type="submit" value="<?php echo __('Login')  ?>  " />
											</span>
										</td>
									</tr>
								</tbody>
							 </table>
						</form>
					</div>
				</div>
			</td>
		</tr>
		 
	</table>
	<div class="clearFix"></div>
</div>

<div class="ui-copyright-box">
	<?php echo __('eGPMS 2012 All Rights Reserved') ?>
</div>
