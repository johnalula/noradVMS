<div class="ui-main-menu-cont">
	<div class="ui-main-menu-actions">
		&nbsp;
	</div>
</div>

<?php 
	//$user = UserTable::processLogin('admin', 'admin11');
	//echo $user ? 'True':'Fasle';
	//echo $user->username;
	//echo count($user);
	//echo md5('admin11');
	//e020590f0e18cd6053d7ae0e0a507609
	//echo count($activitys); 
?>
<div class="ui-container">
	<div class="ui-list-cont">		
		<div class="ui-main-list-cont">
			<div class="ui-list-header">				
				<h1><img src="<?php echo image_path('icons/details') ?>"><?php echo __('Norad VMS Dashboard')  ?></h1>				
				<div class="clearFix"></div>
			</div><!-- end of ui-list-header -->
			
			<div class="ui-main-list">
				<div class="ui-content-minimize opened" id="ui-collaps-list-box" style="margin-top:8px;">
					<span class="minus-btn" id="minus-button" ><img src="<?php echo image_path('icons/minus') ?>"></span>
					<span class="plus-btn displayNone" id="plus-button"><img src="<?php echo image_path('icons/plus') ?>"></span>
				</div><!-- end of ui-content-minimize -->
			
				<div class="ui-dashboard-container" >	
					<div class="ui-main-content">
						<fieldset class="ui-content-fieldset">
							<legend><img src="<?php echo image_path('icons/details') ?>" ><?php echo ('Dashboard')  ?></legend>
						</fieldset><!-- end of ui-content-fieldset -->
						
						<div class="ui-dashboard-content ui-collapsible-dashboard-box">
							<table>
								<tr>
									<td >
											<div class="ui-dashboard-box" >		
												 <?php include_partial('list', array()) ?>
											</div><!-- end of ui-content-form --> 
									</td>
									 
								</tr>
							</table>
						</div><!-- end of ui-main-form-content -->
					</div><!-- end of ui-main-content -->
				</div><!-- end of ui-main-content-cont -->
			</div><!-- end of ui-main-list -->
		</div> <!-- end of ui-main-list-cont -->
	</div>  <!-- end of ui-list-cont -->
</div> <!-- end of ui-container -->	
			

<div class="ui-container">
	<div class="ui-list-cont">		
		<div class="ui-main-list-cont" >
			<div class="ui-list-header">				
				<h1><img src="<?php echo image_path('new_icons/user_go') ?>"><?php echo __('System user activities')  ?></h1>				
				<div class="clearFix"></div>
			</div><!-- end of ui-list-header -->
			
			<div class="ui-main-content-list"> 
				<div class="ui-main-content-cont" >
					<div class="ui-content-list-box">
						 
						<div class="ui-content-lists ui-activity-list">
							<?php include_partial('activityList', array('activitys' => $activitys)) ?>
						</div><!-- end of ui-content-lists -->
					</div><!-- end of ui-content-list-box -->
				</div><!-- end of ui-main-content-cont --> 
			</div><!-- end of ui-main-content-list --> 
			
			<div class="ui-list-footer">				
				  &nbsp; 
			</div><!-- end of ui-list-header -->
			
			<div class="ui-list-pagination-cont">
				&nbsp;
			</div>
		</div> <!-- end of ui-main-list-cont -->
	</div>  <!-- end of ui-list-cont -->
</div> <!-- end of ui-container -->

<script>


	function createCategory()
	{
		alert('Hello');
		
		return false;
		
	}

</script>
