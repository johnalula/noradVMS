 
<div class="ui-list-box-container">
	<div class="ui-list-box-layer">		
		<div class="ui-list-box">
			<div class="ui-list-box-header">
				<h1><img src="<?php echo image_path('setting/home') ?>"><?php echo __('College')  ?></h1>
				
				<div class="clearFix"></div>
			</div>
			
			<div class="ui-content-minimize opened" id="collaps-participant" style="margin-top:8px;">
				<span class="minus-btn" id="minus-button" ><img src="<?php echo image_path('icons/minus') ?>"></span>
				<span class="plus-btn displayNone" id="plus-button"><img src="<?php echo image_path('icons/plus') ?>"></span>
			</div> 
			
			<div class="ui-list-box-content" >		
				 
				<fieldset class="ui-content-fieldset">
					<legend><img src="<?php echo image_path('icons/add_medium') ?>" ><?php echo ('New College')  ?></legend>
					<div class="ui-list-form-content collaps-detail-box">
						<table>
							<tr>
								<td rowspan=2>
									<fieldset  style="min-width:330px;">
										<legend><img src="<?php echo image_path('icons/details') ?>" ><?php echo ('Detail') ?></legend>
										<div class="ui-content-form" >		
											 
											 
										</div><!-- end of ui-content-form -->
									</fieldset>
								</td>

							</tr>
						</table>
						
						 
						<div class="ui-action-button-box">
							<button  id="saveData" class="ui-action-button" onclick="Javascript:createCollege();" ><img src="<?php echo image_path('icons/save') ?>" ><?php echo ('Save') ?></button> 
						</div><!-- end of ui-action-box -->
						
					</div><!-- end of ui-list-form-content -->
				
			 
					<div class="ui-tab-container">
						<div id="tabs" class="ui-detail-list-box">
								<ul class="ui-detail" > 
									<li ><a href="#jurisdictionType" ><?php echo ('Existing College') ?></a></li>
									 
								</ul>
								<div class="clearFix"></div>
				 
							<div class="ui-detail-list">
								<div id="jurisdictionType" style="">
									<div class="ui-list-content">
										<div class="list-box-content" id="collaps-detail-box">		
											 													
										</div><!-- end of list-box-content -->
										
										<div class="ui-list-pagination">
											<div class="ui-pagination-box"> 
												<form class="form-horizontal" action="" method="get">
												<div class="paginateValue">
													<ul class="display">
														<input type="hidden" id="employee_pageOffset" name="employee_pageOffset">
														<li class="display_list" id="employee_display">Display: #  
															<select onclick="" name="employee_pagesize" class="selspan" id="employee_pagesize"> 
																<option value="4"  >10</option>
																<option value="30"  >30</option> 
																<option value="50"  >50</option>
																<option value="100"  >100</option>
															</select>
														</li>
														<li></li>
													</ul>
												</div>
											</form> 
												<div class="ui-pagination">
													<ul>	 
														
														<li class="prev_page"><span id="employee_prevPage" class="imag"><a href=""><img src="<?php echo image_path('page-prev') ?>">Prev</a></span>  
														 <span id="employee_disabledPrevPage" class="imag  displayNone"><img src="<?php echo image_path('page-prev-disabled') ?>">Prev</span> </li>
														<li> </li>
														
														
														<li class="next_page"> <span id="employee_nextPage" class="imag"><a href=""><img src="<?php echo image_path('page-next') ?>">Next</a></span> 
														 <span id="employee_disabledNextPage" class="imag  displayNone"><img src="<?php echo image_path('page-next-disabled') ?>">Next</span></li>
														<input type="hidden" id="employee_nextpageOffset" name="employee_nextpageOffset">
														<input type="hidden" id="employee_prevpageOffset" name="employee_prevpageOffset" >
														
											
													</ul>  
												</div><!-- end of ui-pagination -->
												<div class="clearFix"></div>
											</div><!-- end of ui-pagination-box -->
										</div><!-- end of ui-list-pagination -->
									</div><!-- end of ui-list-content -->
								</div><!-- end fo jurisdictionType -->
							</div><!-- end of ui-detail-list --->
					</div>
				 </div>
			 	</fieldset>
			<div class="clearFix"></div>
		</div>
		</div>
	</div>
	<div class="clearFix"></div>
</div>


<div class="modal" id="representativePrompts">
	<div class="ui-modal">
		<div class="ui-modal-header">
			<h1>Eployee Date</h1>
		
		</div>
	<form>   
		<div class="partialFilterBox">
			<div class="filterBox" style="text-align:left;margin-right:20px;">
				  
			 </div>
			 
		</div>
		 <div class="partialBox">
			  
			 <div class="clearFix"></div>
		</div>
		<div class="partialPagination">
		 <table>		
			<tfoot>
					<tr>
						<td colspan=11> 
							<div class="paginationCont">
								<form class="form-horizontal" action="" method="get">
									<div class="paginateValue">
										<ul class="display">
											<input type="hidden" id="representative_pageOffset" name="representative_pageOffset" >
											<li class="display_list" id="representative_display">Display: #  
												<select onclick="" name="representative_pagesize" class="selspan" id="representative_pagesize"> 
													<option value="2"  >10</option>
													<option value="30"  >30</option> 
													<option value="50"  >50</option>
													<option value="100"  >100</option>
												</select>
											</li>
											<li></li>
										</ul>
									</div>
								</form> 
								<div class="paginationLayer">
									<div class="paginatNav">
										<ul>	 
											
											<li class="prev_page"><span id="representative_prevPage" class="imag">
												<a href=""><img src="<?php echo image_path('page-prev') ?>">Prev</a></span>  
												<span id="representative_disabledPrevPage" class="imag displayNone">
												<img src="<?php echo image_path('page-prev-disabled') ?>">Prev</span>
											</li>
											
											<li class="next_page">
												<span id="representative_nextPage" class="imag">
													<a href=""><img src="<?php echo image_path('page-next') ?>">Next</a>
												</span> 
												<span id="representative_disabledNextPage" class="imag displayNone">
													<img src="<?php echo image_path('page-next-disabled') ?>">Next
													</span>
											</li>
												<input type="hidden" id="representative_nextpageOffset" name="representative_nextpageOffset" value="<?php echo $offSet ? $offSet : '0' ?>">
												<input type="hidden" id="representative_prevpageOffset" name="representative_prevpageOffset"  value="<?php echo $offSet ? $offSet : '0' ?>">
										</ul> 
									</div> 
								</div> 
							</div>
						</td>
					</tr>
				</tfoot>
			</table>
		</div>
	</form>
</div>
<div class="clearFix"></div>
</div>

