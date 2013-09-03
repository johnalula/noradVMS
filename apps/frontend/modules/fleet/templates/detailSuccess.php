<div class="ui-container-box">
	<div class="ui-main-menu-cont">
		<div class="ui-main-menu-actions">
			<ul>
				<li><a href="<?php echo url_for('dashboard/index') ?>"><img src="<?php echo image_path('new_icons/control_panel_medium') ?>">Dashboard</a></li>
				<li><a href="#"><img src="<?php echo image_path('icons/refresh_small') ?>">Refresh</a></li>
			</ul>
			
			<span class="ui-page-navigator">
				<ul>
					<li><a href="<?php echo url_for('fleet/index') ?>"><img src="<?php echo image_path('new_icons/back') ?>">Back to list</a></li>
				</ul>
			</span>
			<div class="clearFix"></div>
		</div>
	</div>

	<?php 
	
		//$flag = FleetServiceTaskTable::processCreateItem (3, '395daec3b8a1b4f36d10e8d68a19fc4f', 'Lab Material', 1, 2, 'For research');
		
		//$exclusion = array();
			//$orders = FleetOrderTable::processSelection ( 3, 'fe2897a498fcd4055e7297fdd53f9868', true, $is_returned, $status, $keyword, 0, 10);
		
			//foreach($orders as $order)
			//{
				$no_of_passengers = $order->noOfPassengers;
				$order_id = $order->id;
				$passengers = FleetServiceTaskTable::processTaskPassengerSelection (3, 'fe2897a498fcd4055e7297fdd53f9868', 2, $keyword, 0, 100) ;
				$pass = count($passengers);
				//if($pass >= $no_of_passengers )
					//echo $order->id;
					echo $pass;
					//echo $pass;
				  
					 
			//}
			//echo count($exclusion);
			
			$x = FleetOrderTable::processCandidateVehicles ( $task_id, $token_id, true, $is_returned, $exclusion, 0, 10);
			 
			//foreach($orders as $order)
			//{
		 
				//$d = $m+$v;
				//echo  $order->vehicleTokenID.',';
				//echo  $order->vehicleID.',';
				//$vehicle->setCurrentMileage(2);
				//$vehicle->traveled_km = 2;
				//$vehicle->save();
				//$vehicle->processDeparture();	
				
		//	}
	?>
	<div id="ui-display-error-cont" class="ui-error-data displayNone"> 
		<div class="ui-error-box btn-danger">
			<div class="ui-error-list">
				<?php echo 'Category already existed!' ?>
				<span class="ui-error-close">X</span>
			</div>			
		</div> 
	</div>

	<div id="ui-display-success-cont" class="ui-success-data displayNone"> 
		<div class="ui-success-box btn-danger">
			<div class="ui-success-list">
				<?php echo 'Category successfuly saved!' ?>
				<span class="ui-success-close">X</span>
			</div>			
		</div> 
	</div>

	<div id="ui-display-delete-cont" class="ui-success-data displayNone"> 
		<div class="ui-success-box btn-danger">
			<div class="ui-success-list">
				<?php echo 'Category successfuly deleted!' ?>
				<span class="ui-success-close">X</span>
			</div>			
		</div> 
	</div>
	<div class="ui-container">
		<div class="ui-list-cont">		
			<div class="ui-main-list-cont">
				<div class="ui-list-header">				
					<h1><img src="<?php echo image_path('new_icons/car') ?>"><?php echo __('Fleet Order')  ?></h1>			
					<div class="ui-form-content-minimize opened" id="ui-form-collaps-list-box" style="margin-top:0px;float:right;">	
						<span id="ui-up-arrow" class="ui-minimize-arrow "><img src="<?php echo image_path('new_icons/arrow_up') ?>"></span>		
						<span id="ui-down-arrow" class="ui-minimize-arrow displayNone"><img src="<?php echo image_path('new_icons/arrow_down') ?>"></span>	
					</div>	
					<div class="clearFix"></div>
				</div><!-- end of ui-list-header -->
				
				<div class="ui-main-list">
					<div class="ui-content-minimize opened" id="ui-collaps-list-box" style="margin-top:8px;">
						<span class="minus-btn" id="minus-button" ><img src="<?php echo image_path('icons/minus') ?>"></span>
						<span class="plus-btn displayNone" id="plus-button"><img src="<?php echo image_path('icons/plus') ?>"></span>
					</div><!-- end of ui-content-minimize -->
				
					<div class="ui-main-content-cont" >	
						<div class="ui-main-content">
							<fieldset class="ui-content-fieldset">
								<legend><img style="width:16px;height:16px;" src="<?php echo image_path('new_icons/fleet_manage') ?>" ><?php echo ('Fleet Order')  ?></legend>
							</fieldset><!-- end of ui-content-fieldset -->
							
							<div class="ui-main-form-content ui-collapsible-list-box">
								<table>
									<tr>
										<td >
											<fieldset  style="">
												<legend class="ui-form-legend"><img src="<?php echo image_path('icons/details') ?>" ><?php echo ('Detail') ?></legend>
												<div class="ui-main-form" >		
													 <?php include_partial('detailList', array('task' => $task)) ?>
												</div><!-- end of ui-content-form -->
											</fieldset>
										</td>
										 
									</tr>						 
								</table>
								
								 
							</div><!-- end of ui-main-form-content -->
						</div><!-- end of ui-main-content -->
					</div><!-- end of ui-main-content-cont -->
				</div>
			</div> <!-- end of ui-main-list-cont -->
		</div>  <!-- end of ui-list-cont -->
	</div> <!-- end of ui-container -->


	<div class="ui-container">
		<div class="ui-list-cont">		
			<div class="ui-main-list-cont" >
				<div class="ui-list-header">				
					<h1><img src="<?php echo image_path('icons/list_small') ?>"><?php echo __('Fleet Order Vehicles')  ?></h1>
					<div class="ui-form-content-minimize closed" id="ui-grid-collaps-list-box" style="margin-top:0px;float:right;">	
						<span id="ui-grid-up-arrow" class="ui-minimize-arrow "><img src="<?php echo image_path('new_icons/arrow_up') ?>"></span>		
						<span id="ui-grid-down-arrow" class="ui-minimize-arrow displayNone"><img src="<?php echo image_path('new_icons/arrow_down') ?>"></span>	
					</div>	
					<div class="clearFix"></div>
				</div><!-- end of ui-list-header -->
				
				<div class="ui-main-content-list ui-grid-content-container-box"> 
					<div class="ui-main-content-cont" >
						<div class="ui-content-list-box">
							 
							<div class="ui-content-lists">
								<?php include_partial('vehicleList', array('vehicles' => $vehicles)) ?>
							</div><!-- end of ui-content-lists -->
						</div><!-- end of ui-content-list-box -->
					</div><!-- end of ui-main-content-cont --> 
				</div><!-- end of ui-main-content-list --> 
				
				 
			</div> <!-- end of ui-main-list-cont -->
		</div>  <!-- end of ui-list-cont -->
	</div> <!-- end of ui-container -->
	 
	<!-- list container --> 
 
	<div class="ui-container">
		<div class="ui-list-cont">		
			<div class="ui-main-list-cont" >
				<div class="ui-list-header">				
					<h1><img src="<?php echo image_path('icons/list_small') ?>"><?php echo __('Attachments & Participants')  ?></h1>	
					<div class="ui-list-content-minimize opened" id="ui-list-collaps-list-box" style="margin-top:0px;float:right;">	
						<span id="ui-list-up-arrow" class="ui-minimize-arrow "><img src="<?php echo image_path('new_icons/arrow_up') ?>"></span>		
						<span id="ui-list-down-arrow" class="ui-minimize-arrow displayNone"><img src="<?php echo image_path('new_icons/arrow_down') ?>"></span>	
					</div>				
					<div class="clearFix"></div>
				</div><!-- end of ui-list-header -->
				
				<div class="ui-content-container-box">
					<div class="ui-main-content-list"> 
						<div class="ui-main-content-cont" >
							<div class="ui-content-list-box"> 
								<div class="ui-tab-main-cont">
								<div class="ui-tab-container-box" style="">
									<div id="tabs" class="ui-tab-detail-list-box">
											<ul class="ui-tab-list" > 
												<li ><a href="#ui-tab-one" data-toggle="tab"><?php echo ('Passengers') ?></a></li> 
												<li><a href="#ui-tab-two" class="active" data-toggle="tab"><?php echo ('Participant') ?></a></li>
												<li ><a href="#ui-tab-three" data-toggle="tab"><?php echo ('Item Attachment') ?></a></li> 
												 
											</ul>
											<div class="clearFix"></div>
											
										<div class="ui-detail-tab-list" >
											<div id="ui-tab-one" class="ui-tab" style="">
												<div class="ui-tab-content-frame">
													 <div class="ui-tab-content-container-box" style="border:0px;">
													<div class="ui-main-content-list" style="border:0px;"> 
														<div class="ui-main-content-cont"  style="border:0px;">
															<div class="ui-content-list-box"  style="border:0px;">
																<div class="ui-list-filter-cont">
																	<div class="ui-list-batch-actions"> 
																		<ul>
																			<li><a href=""><img src="<?php echo image_path('icons/delete_small') ?>">Delete</a></li>
																			<li></li> 
																		</ul>  
																	</div>
																	<div class="ui-filter-list"> 
																		<ul>
																			<li><img src="<?php echo image_path('icons/find_small') ?>"></li>
																			<li><input type="text"></li>
																			<li><select><option>name</option><option>father name</option></select></li> 
																		</ul>  
																	</div>
																	<div class="clearFix"></div>
																</div>
																<div class="ui-content-lists">
																	<?php include_partial('passengerList', array('passengers' => $passengers, 'task' => $task )) ?>
																</div><!-- end of ui-content-lists -->
															</div><!-- end of ui-content-list-box -->
														</div><!-- end of ui-main-content-cont --> 
													</div><!-- end of ui-main-content-list --> 
													
													
													<div class="ui-list-footer">				
														  &nbsp; 
													</div><!-- end of ui-list-header -->
													
													<div class="ui-list-pagination-cont">
														&nbsp;
													</div><!-- ui-list-pagination-cont -->
												</div><!-- end of ui-content-container-box -->
												</div>
											</div>
											
											<div id="ui-tab-two" class="ui-tab" style="">
											<div class="ui-tab-content-frame">
												 <div class="ui-tab-content-container-box" style="border:0px;">
												<div class="ui-main-content-list" style="border:0px;"> 
													<div class="ui-main-content-cont"  style="border:0px;">
														<div class="ui-content-list-box"  style="border:0px;">
															<div class="ui-list-filter-cont">
																<div class="ui-list-batch-actions"> 
																	<ul>
																		<li><a href=""><img src="<?php echo image_path('icons/delete_small') ?>">Delete</a></li>
																		<li></li> 
																	</ul>  
																</div>
																<div class="ui-filter-list"> 
																	<ul>
																		<li><img src="<?php echo image_path('icons/find_small') ?>"></li>
																		<li><input type="text"></li>
																		<li><select><option>name</option><option>father name</option></select></li> 
																	</ul>  
																</div>
																<div class="clearFix"></div>
															</div>
															<div class="ui-content-lists">
																<?php include_partial('participantList', array('participants' => $participants )) ?>
															</div><!-- end of ui-content-lists -->
														</div><!-- end of ui-content-list-box -->
													</div><!-- end of ui-main-content-cont --> 
												</div><!-- end of ui-main-content-list --> 
												
												
												<div class="ui-list-footer">				
													  &nbsp; 
												</div><!-- end of ui-list-header -->
												
												<div class="ui-list-pagination-cont">
													&nbsp;
												</div><!-- ui-list-pagination-cont -->
											</div><!-- end of ui-content-container-box -->
												 </div>
										</div>
								 
										<div id="ui-tab-three" class="ui-tab" style="">
												<div class="ui-tab-content-frame">
													 <div class="ui-tab-content-container-box" style="border:0px;">
													<div class="ui-main-content-list" style="border:0px;"> 
														<div class="ui-main-content-cont"  style="border:0px;">
															<div class="ui-content-list-box"  style="border:0px;">
																<div class="ui-list-filter-cont">
																	<div class="ui-list-batch-actions"> 
																		<ul>
																			<li><a href=""><img src="<?php echo image_path('icons/delete_small') ?>">Delete</a></li>
																			<li></li> 
																		</ul>  
																	</div>
																	<div class="ui-filter-list"> 
																		<ul>
																			<li><img src="<?php echo image_path('icons/find_small') ?>"></li>
																			<li><input type="text"></li>
																			<li><select><option>name</option><option>father name</option></select></li> 
																		</ul>  
																	</div>
																	<div class="clearFix"></div>
																</div>
																<div class="ui-content-lists">
																	<?php include_partial('itemList', array('items' => $items, 'task' => $task  )) ?>
																</div><!-- end of ui-content-lists -->
															</div><!-- end of ui-content-list-box -->
														</div><!-- end of ui-main-content-cont --> 
													</div><!-- end of ui-main-content-list --> 
													
													
													<div class="ui-list-footer">				
														  &nbsp; 
													</div><!-- end of ui-list-header -->
													
													<div class="ui-list-pagination-cont">
														&nbsp;
													</div><!-- ui-list-pagination-cont -->
												</div><!-- end of ui-content-container-box -->
												</div>
											</div>
											
											
											
									 </div>
									<div class="clearFix"></div>
									</div>
								</div>
								</div>
								
							</div><!-- end of ui-content-list-box -->
						</div><!-- end of ui-main-content-cont --> 
					</div><!-- end of ui-main-content-list --> 
					 
				</div><!-- end of ui-content-container-box -->
			</div> <!-- end of ui-main-list-cont -->
		</div>  <!-- end of ui-list-cont -->
	</div> <!-- end of ui-container -->


	<div class="ui-navigation-cont">
		<div class="ui-navigation-box">
			<div class="ui-navigation-list">
				<ul class="ui-left-button">
					<li><a href="<?php echo url_for('fleet/order?task_id='.$sf_request->getParameter('task_id').'&token_id='.$sf_request->getParameter('token_id')) ?>"><button class="ui-back-button"><img src="<?php echo image_path('new_icons/back') ?>">Back</button></a></li>
				</ul>
				</ul>
				<ul class="ui-right-button">
					<li><a href="<?php echo url_for('fleet/departure_completed?task_id='.$sf_request->getParameter('task_id').'&token_id='.$sf_request->getParameter('token_id')) ?>"><button class="ui-next-button"><img src="<?php echo image_path('new_icons/next') ?>">Complete</button></a></li>
				</ul>
				<div class="clearFix"></div>
			</div>
		
		</div>
	</div>
</div>

<div class="modal" id="candidateVehiclePrompts">
	<form>
	<div class="ui-partial-container" style="border:0px solid #f00;">
		 <div class="ui-partial-container">
			<div class="ui-partial-main-list-cont" >
				<div class="ui-partial-list-header">				
					<h1><img src="<?php echo image_path('icons/list_small') ?>"><?php echo __('Existing Employee Lists')  ?></h1>	
					<div class="ui-form-content-minimize opened" id="ui-list-collaps-list-box" style="margin-top:0px;float:right;">	
						<span id="ui-list-up-arrow" class="ui-minimize-arrow "><img src="<?php echo image_path('new_icons/arrow_up') ?>"></span>		
						<span id="ui-list-down-arrow" class="ui-minimize-arrow displayNone"><img src="<?php echo image_path('new_icons/arrow_down') ?>"></span>	
					</div>	
					<div class="clearFix"></div>
				</div><!-- end of ui-list-header -->		
				
				<div class="ui-content-container-box">
			<div class="ui-main-content-list "> 
				<div class="ui-main-content-cont" >
					<div class="ui-content-list-box">
						<div class="ui-list-filter-cont">
							 
							<div class="ui-filter-list"> 
								<?php include_partial('candidateVehicleFilter', array()) ?>
							</div>
							<div class="clearFix"></div>
						</div>
						<div class="ui-content-lists">
							 <?php include_partial('candidateVehicleList', array('candidates' => $candidates)); ?>		
						</div><!-- end of ui-content-lists -->
					</div><!-- end of ui-content-list-box -->
				</div><!-- end of ui-main-content-cont --> 
			</div><!-- end of ui-main-content-list --> 
			
			<div class="ui-list-footer">				
				  &nbsp; 
			</div><!-- end of ui-list-header -->
			
			<div class="ui-list-pagination-cont ui-pagination-color" style="">
					<table>	 
						<tr>
							<td> 
								<div class="ui-pagination-list-size"> 
									<ul class="display">
										<input type="hidden" id="parent_total" name="" value="<?php echo count($totalData) ?>">
										<input type="hidden" id="parent_pagination_pageOffset" name="parent_pagination_pageOffset" >
										<li class="display_list" id="parent_pagination_display">Display: #  
											<select onclick="" name="parent_pagination_pagesize" class="selspan" id="parent_pagination_pagesize"> 
												<option value="2"  >10</option>
												<option value="20"  >20</option>
												<option value="30"  >30</option> 
												<option value="50"  >50</option>
												<option value="100" >100</option>
											</select>
										</li>
										<li></li>
									</ul>
								</div>
								<div class="clearFix"></div>
							</td>
							<td>
								<div class="ui-pagination-list-content">									 
									<ul>	 									
										<li class="prev_page"><span id="parent_pagination_firstPage" class="imag">
											<a href=""><img src="<?php echo image_path('pagination/first') ?>">First</a></span>  
											<span id="" class="imag displayNone">
											<img src="<?php echo image_path('page-prev-disabled') ?>">First</span>
										</li>
										<li class="prev_page"><span id="parent_pagination_prevPage" class="imag">
											<a href=""><img src="<?php echo image_path('pagination/prev') ?>">Prev</a></span>  
											<span id="parent_pagination_disabledPrevPage" class="imag displayNone">
											<img src="<?php echo image_path('page-prev-disabled') ?>">Prev</span>
										</li>
										
										<li class="next_page">
											<span id="parent_pagination_nextPage" class="imag">
												<a href=""><img src="<?php echo image_path('pagination/next') ?>">Next</a>
											</span> 
											<span id="parent_pagination_disabledNextPage" class="imag displayNone">
												<img src="<?php echo image_path('page-next-disabled') ?>">Next
												</span>
										</li>
										<li class="next_page">
											<span id="parent_pagination_lastPage" class="imag">
												<a href=""><img src="<?php echo image_path('pagination/last') ?>">Last</a>
											</span> 
											<span id="" class="imag displayNone">
												<img src="<?php echo image_path('page-next-disabled') ?>">Last
												</span>
										</li>
											<input type="hidden" id="parent_pagination_nextpageOffset" name="parent_pagination_nextpageOffset" value="<?php echo $offSet ? $offSet : '0' ?>">
											<input type="hidden" id="parent_pagination_prevpageOffset" name="parent_pagination_prevpageOffset"  value="<?php echo $offSet ? $offSet : '0' ?>">
									</ul> 									 
								</div>							
								<div class="clearFix"></div>
							</td>
						</tr> 
					</table>
				</div>
			</div>
			</div>
		 </div>
	</div>
	<div class="ui-partial-footer">
		<ul>
			<li> 
				<button type="submit" id="" class=" close"  style=""><img src="<?php echo image_path('setting/upload_small') ?>"> <?php echo __('Insert') ?> </button>   
			</li> 
			<li>
				<button type="button" class="close"  style=""> <?php echo __('Cancel') ?> </button> 
			</li>
			
			</ul>
			<div class="clearFix"></div>
		</div>
</form>
</div>

<div class="modal" id="candidateItemVehiclePrompts">
	<form>
	<div class="ui-partial-container" style="border:0px solid #f00;">
		 <div class="ui-partial-container">
			<div class="ui-partial-main-list-cont" >
				<div class="ui-partial-list-header">				
					<h1><img src="<?php echo image_path('icons/list_small') ?>"><?php echo __('Existing Employee Lists')  ?></h1>	
					<div class="ui-form-content-minimize opened" id="ui-list-collaps-list-box" style="margin-top:0px;float:right;">	
						<span id="ui-list-up-arrow" class="ui-minimize-arrow "><img src="<?php echo image_path('new_icons/arrow_up') ?>"></span>		
						<span id="ui-list-down-arrow" class="ui-minimize-arrow displayNone"><img src="<?php echo image_path('new_icons/arrow_down') ?>"></span>	
					</div>	
					<div class="clearFix"></div>
				</div><!-- end of ui-list-header -->		
				
				<div class="ui-content-container-box">
			<div class="ui-main-content-list "> 
				<div class="ui-main-content-cont" >
					<div class="ui-content-list-box">
						<div class="ui-list-filter-cont">
							 
							<div class="ui-filter-list"> 
								<?php include_partial('candidateVehicleFilter', array()) ?>
							</div>
							<div class="clearFix"></div>
						</div>
						<div class="ui-content-lists">
							 <?php include_partial('candidateVehicleList', array('candidates' => $candidates)); ?>		
						</div><!-- end of ui-content-lists -->
					</div><!-- end of ui-content-list-box -->
				</div><!-- end of ui-main-content-cont --> 
			</div><!-- end of ui-main-content-list --> 
			
			<div class="ui-list-footer">				
				  &nbsp; 
			</div><!-- end of ui-list-header -->
			
			<div class="ui-list-pagination-cont ui-pagination-color" style="">
				<table>	 
						<tr>
							<td> 
								<div class="ui-pagination-list-size"> 
									<ul class="display">
										<input type="hidden" id="parent_total" name="" value="<?php echo count($totalData) ?>">
										<input type="hidden" id="parent_pagination_pageOffset" name="parent_pagination_pageOffset" >
										<li class="display_list" id="parent_pagination_display">Display: #  
											<select onclick="" name="parent_pagination_pagesize" class="selspan" id="parent_pagination_pagesize"> 
												<option value="2"  >10</option>
												<option value="20"  >20</option>
												<option value="30"  >30</option> 
												<option value="50"  >50</option>
												<option value="100" >100</option>
											</select>
										</li>
										<li></li>
									</ul>
								</div>
								<div class="clearFix"></div>
							</td>
							<td>
								<div class="ui-pagination-list-content">									 
									<ul>	 									
										<li class="prev_page"><span id="parent_pagination_firstPage" class="imag">
											<a href=""><img src="<?php echo image_path('pagination/first') ?>">First</a></span>  
											<span id="" class="imag displayNone">
											<img src="<?php echo image_path('page-prev-disabled') ?>">First</span>
										</li>
										<li class="prev_page"><span id="parent_pagination_prevPage" class="imag">
											<a href=""><img src="<?php echo image_path('pagination/prev') ?>">Prev</a></span>  
											<span id="parent_pagination_disabledPrevPage" class="imag displayNone">
											<img src="<?php echo image_path('page-prev-disabled') ?>">Prev</span>
										</li>
										
										<li class="next_page">
											<span id="parent_pagination_nextPage" class="imag">
												<a href=""><img src="<?php echo image_path('pagination/next') ?>">Next</a>
											</span> 
											<span id="parent_pagination_disabledNextPage" class="imag displayNone">
												<img src="<?php echo image_path('page-next-disabled') ?>">Next
												</span>
										</li>
										<li class="next_page">
											<span id="parent_pagination_lastPage" class="imag">
												<a href=""><img src="<?php echo image_path('pagination/last') ?>">Last</a>
											</span> 
											<span id="" class="imag displayNone">
												<img src="<?php echo image_path('page-next-disabled') ?>">Last
												</span>
										</li>
											<input type="hidden" id="parent_pagination_nextpageOffset" name="parent_pagination_nextpageOffset" value="<?php echo $offSet ? $offSet : '0' ?>">
											<input type="hidden" id="parent_pagination_prevpageOffset" name="parent_pagination_prevpageOffset"  value="<?php echo $offSet ? $offSet : '0' ?>">
									</ul> 									 
								</div>							
								<div class="clearFix"></div>
							</td>
						</tr> 
					</table>
				</div>
			</div>
			</div>
		 </div>
	</div>
	<div class="ui-partial-footer">
		<ul>
			<li> 
				<button type="submit" id="" class=" close"  style=""><img src="<?php echo image_path('setting/upload_small') ?>"> <?php echo __('Insert') ?> </button>   
			</li> 
			<li>
				<button type="button" class="close"  style=""> <?php echo __('Cancel') ?> </button> 
			</li>
			
			</ul>
			<div class="clearFix"></div>
		</div>
</form>
</div>

<script>
	 var triggerCandidate = $(".candidateVehicleModal").overlay({ 
		mask: {
		color: '#ebecff',
		loadSpeed: 200,
		opacity: 0.9
		},
		closeOnClick: false
	});
 
	$("#candidateVehiclePrompts form").submit(function(e) {

		if($("input[name=selectCandidate]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked");

		triggerCandidate.eq(0).overlay().close();

		var input = $("input[name=selectCandidate]:checked", this).val();
		var listArr = input.split("$");
		var vehicleCode = listArr[2]+' ( '+listArr[1]+' )';
			
		document.getElementById("passenger_vehicle_id").value = listArr[0];
		document.getElementById("passenger_vehicle_name").value = vehicleCode;
		document.getElementById("passenger_orderID").value = listArr[3];
		
		$('#passenger_vehicle_name_validateion').addClass('displayNone');
		$('#passenger_vehicle_name').removeClass('validation_error_border'); 

		return e.preventDefault();
	});
	
	 var triggerItemCandidate = $(".candidateItemVehicleModal").overlay({ 
		mask: {
		color: '#ebecff',
		loadSpeed: 200,
		opacity: 0.9
		},
		closeOnClick: false
	});
 
	$("#candidateItemVehiclePrompts form").submit(function(e) {

		if($("input[name=selectCandidate]:checked", this).length == 0)
			$("input[id=selectCandidate-1]").attr("checked", "checked");

		triggerItemCandidate.eq(0).overlay().close();

		var input = $("input[name=selectCandidate]:checked", this).val();
		var listArr = input.split("$");
		var vehicleCode = listArr[2]+' ( '+listArr[1]+' )';
			
		document.getElementById("item_vehicle_id").value = listArr[0];
		document.getElementById("item_vehicle_name").value = vehicleCode;
		document.getElementById("orderID").value = listArr[3];
		
		$('#item_vehicle_name_validateion').addClass('displayNone');
		$('#item_vehicle_name').removeClass('validation_error_border'); 

		return e.preventDefault();
	});
	 
	function showSuccess()
	{
		$('#ui-display-success-cont').removeClass('displayNone');
		
		location.reload().delay(3000);
	}
	
	function showError()
	{
		$('#ui-display-error-cont').removeClass('displayNone');
	}
	
	function deleteSuccess()
	{
		$('#ui-display-delete-cont').removeClass('displayNone');
		location.reload().delay(3000);
	}

	function createPassenger(taskID)
	{
		var full_name = document.getElementById("full_name").value;
		var role = document.getElementById("passenger_role").value;
		//var vehicleID = document.getElementById("vehicle_id").value;
		var desc = document.getElementById("description").value;
		var tokenID = document.getElementById("passenger_tokenID").value;
		var orderID = document.getElementById("passenger_orderID").value;
		
		if( full_name == '' && orderID == '' )
		{
			$('#passenger_name_validation').removeClass('displayNone');
			$('#full_name').css('border', '1px solid #f00 ');
			$('#passenger_vehicle_validation').removeClass('displayNone');
			$('#passenger_vehicle_name').css('border', '1px solid #f00 ');
			
			return false;
		}
		if( full_name == '')
		{
			$('#passenger_name_validation').removeClass('displayNone');
			$('#full_name').css('border', '1px solid #f00 ');
			
			return false;
		}
		
		if( orderID == '')
		{
			$('#passenger_vehicle_validation').removeClass('displayNone');
			$('#passenger_vehicle_name').css('border', '1px solid #f00 ');
			
			return false;
		}
		
		
		
		$.ajax({
				type: "GET",
				data: 'task_id='+taskID+'&token_id='+tokenID+'&order_id='+orderID+'&full_name='+full_name+'&role='+role+'&description='+desc,
				url: '<?php echo url_for('fleet/createPassenger')?>', 
				success: function() { 
					showSuccess(); 
				},
				error: function() {
					showError();
				},
				async: false
				});
				
		
		//var data =  'task_id='+taskID+'&token_id='+tokenID+'&order_id='+orderID+'&full_name='+full_name+'&role='+role+'&description='+desc;
		//alert(data);
		
		return false;		
	}
	
	function createItem(taskID)
	{
		var item_name = document.getElementById("item_name").value;
		var quantity = document.getElementById("quantity").value;
		//var vehicleID = document.getElementById("vehicle_id").value;
		var desc = document.getElementById("item_description").value;
		var tokenID = document.getElementById("tokenID").value;
		var orderID = document.getElementById("orderID").value;
		
		if( item_name == '' && orderID == '' )
		{
			$('#item_name_validation').removeClass('displayNone');
			$('#item_name').css('border', '1px solid #f00 ');
			$('#item_vehicle_validation').removeClass('displayNone');
			$('#item_vehicle_name').css('border', '1px solid #f00 ');
			
			return false;
		}
		if( item_name == '')
		{
			$('#item_name_validation').removeClass('displayNone');
			$('#item_name').css('border', '1px solid #f00 ');
			
			return false;
		}
		
		if( orderID == '')
		{
			$('#item_vehicle_validation').removeClass('displayNone');
			$('#item_vehicle_name').css('border', '1px solid #f00 ');
			
			return false;
		}
		
		
		
		$.ajax({
				type: "GET",
				data: 'task_id='+taskID+'&token_id='+tokenID+'&order_id='+orderID+'&item_name='+item_name+'&quantity='+quantity+'&description='+desc,
				url: '<?php echo url_for('fleet/createItem')?>', 
				success: function() { 
					showSuccess(); 
				},
				error: function() {
					showError();
				},
				async: false
				});
				
		
		//var data =  'task_id='+taskID+'&token_id='+tokenID+'&order_id='+orderID+'&item_name='+item_name+'&quantity='+quantity+'&description='+desc;
		//alert(data);
		
		return false;		
	}
	
	function createExpense(taskID)
	{
		var item_name = document.getElementById("item_name").value;
		var quantity = document.getElementById("quantity").value;
		//var vehicleID = document.getElementById("vehicle_id").value;
		var desc = document.getElementById("item_description").value;
		var tokenID = document.getElementById("tokenID").value;
		var orderID = document.getElementById("orderID").value;
		
		if( item_name == '' && orderID == '' )
		{
			$('#item_name_validation').removeClass('displayNone');
			$('#item_name').css('border', '1px solid #f00 ');
			$('#item_vehicle_validation').removeClass('displayNone');
			$('#item_vehicle_name').css('border', '1px solid #f00 ');
			
			return false;
		}
		if( item_name == '')
		{
			$('#item_name_validation').removeClass('displayNone');
			$('#item_name').css('border', '1px solid #f00 ');
			
			return false;
		}
		
		if( orderID == '')
		{
			$('#item_vehicle_validation').removeClass('displayNone');
			$('#item_vehicle_name').css('border', '1px solid #f00 ');
			
			return false;
		}

		$.ajax({
				type: "GET",
				data: 'task_id='+taskID+'&token_id='+tokenID+'&order_id='+orderID+'&item_name='+item_name+'&quantity='+quantity+'&description='+desc,
				url: '<?php echo url_for('fleet/createItem')?>', 
				success: function() { 
					showSuccess(); 
				},
				error: function() {
					showError();
				},
				async: false
				});
				
		
		//var data =  'task_id='+taskID+'&token_id='+tokenID+'&order_id='+orderID+'&item_name='+item_name+'&quantity='+quantity+'&description='+desc;
		//alert(data);
		
		return false;		
	}
</script>
