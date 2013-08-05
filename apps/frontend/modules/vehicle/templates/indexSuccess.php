<div class="ui-main-menu-cont">
	<div class="ui-main-menu-actions">
		<ul>
			<li><a><img src="<?php echo image_path('icons/save_small') ?>"><span class="ui-gray-font">Save</span></a></li>
			<li><a><img src="<?php echo image_path('icons/delete_small') ?>"><span class="ui-gray-font">Cancel</span></a></li>
			<li><a href="#"  onclick="Javascript:refresh();"><img src="<?php echo image_path('icons/refresh_small') ?>">Refresh</a></li>
		</ul>
	</div>
</div>

<?php  

$ip =  gethostbyname($_SERVER['HTTP_HOST']) ;
$current_date = date('Y-m-d', time());
$time = date('h:i:s A');
$module  = 'Administrator';
$action = SystemLogFileTable::$UPDATE;
$user_id = 1;
//$flag = UserGroupTable::processDelete(9, 0);
//$group = UserGroupTable::processCreate($module, 'admin');
//$group1 = UserGroupTable::processCreate('Finance', 'finance');
//$group5 = UserGroupTable::processCreate('Director', 'director');
//$group6 = UserGroupTable::processCreate('President', 'president');
//$group2 = UserGroupTable::processCreate('Head', 'head');
//$group3 = UserGroupTable::processCreate('Dean', 'dean');
//$group4 = UserGroupTable::processCreate('Mechanic', 'mechanic');

//$flag = SystemLogFileTable::processCreate(1, $module, $action, $time, $current_date, $ip)
//$flag = SystemLogFileTable::processCreate(1, $module, $action, $time, $current_date, $ip)
//$flag = SystemLogFileTable::processCreate(2, $module, $action, $time, $current_date, $ip)
//$flag = SystemLogFileTable::processCreate(2, $module, $action, $time, $current_date, $ip)

?>
<!-- list container -->
 
<div class="ui-container">
	<div class="ui-list-cont">		
		<div class="ui-main-list-cont" >
			<div class="ui-list-header">				
				<h1><img src="<?php echo image_path('icons/list_small') ?>"><?php echo __('Existing Vehicles')  ?></h1>				
				<div class="clearFix"></div>
			</div><!-- end of ui-list-header -->
			
			<div class="ui-main-content-list"> 
				<div class="ui-main-content-cont" >
					<div class="ui-content-list-box">
						<div class="ui-list-filter-cont">
							<?php include_partial('filter') ?>
							<div class="clearFix"></div>
						</div>
						<div class="ui-content-lists">
							<?php include_partial('list', array('vehicles' => $vehicles )) ?>
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
 
