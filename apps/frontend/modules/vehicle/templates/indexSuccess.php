<div class="ui-main-menu-cont">
	<div class="ui-main-menu-actions">
		<ul>
			<li><a><img src="<?php echo image_path('icons/save_small') ?>"><span class="ui-gray-font">Save</span></a></li>
			<li><a><img src="<?php echo image_path('icons/delete_small') ?>"><span class="ui-gray-font">Cancel</span></a></li>
			<li><a href="#"  onclick="Javascript:refresh();"><img src="<?php echo image_path('icons/refresh_small') ?>">Refresh</a></li>
		</ul>
	</div>
</div>

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
							<?php include_partial('list', array('categorys' => $categorys )) ?>
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
 
