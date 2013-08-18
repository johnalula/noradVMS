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
	
	/*$orders = FleetOrderTable::processSelection ( 3, 'c3c4460696c45d6883f819fdaa36edad', true, false, $status, $keyword, 0, 10);
			
			foreach($orders as $order)
			{
				$_id = $order->assignedID;
				$token_id = $order->assignedTokenID;
				$assigned = AssignedVehicleTable::processObject($_id, $token_id);				
				$assigned->processDeparture();
				//echo $assigned->id.'<br>';
			}; */
							 
	 //$obj = AssignmentOrderTable::processObject(2, 'a04486d9046eb8e485c79c8d10cadf5a' ); 
	//echo $obj->vehicle_id.' - ';
	//echo $obj->id;
		//echo $flags ? 'true' : 'flase' ;
		//$flag = TaskOrderTable::processObject(19, 'a56b04e3aa2e37374de9aa6a84774baa' ) ;
		//echo intval($flag->actual_quantity);
		//$flags = VehicleTable::processCreate ( $flag );
		//echo $flags ? 'true':'false';
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
					<h1><img src="<?php echo image_path('icons/list_small') ?>"><?php echo __('Existing Groups')  ?></h1>	
					<div class="ui-form-content-minimize opened" id="ui-list-collaps-list-box" style="margin-top:0px;float:right;">	
						<span id="ui-list-up-arrow" class="ui-minimize-arrow "><img src="<?php echo image_path('new_icons/arrow_up') ?>"></span>		
						<span id="ui-list-down-arrow" class="ui-minimize-arrow displayNone"><img src="<?php echo image_path('new_icons/arrow_down') ?>"></span>	
					</div>	
					<div class="clearFix"></div>
				</div><!-- end of ui-list-header -->
				
				
				<div class="ui-content-container-box">
				<div class="ui-main-content-list "> 
						<div class="ui-content-list-box">
							 
							<div class="ui-tab-main-cont">
								<div class="ui-tab-container-box" style="">
									<div id="tabs" class="ui-tab-detail-list-box">
											<ul class="ui-tab-list" > 
												<li><a href="#ui-tab-one" class="active" data-toggle="tab"><img src="<?php echo image_path('new_icons/fuel_small') ?>"><?php echo ('Participant') ?></a></li>
												<li ><a href="#ui-tab-two" data-toggle="tab"><img src="<?php echo image_path('new_icons/fuel_small') ?>"><?php echo ('Attachment') ?></a></li> 
												<li ><a href="#ui-tab-three" data-toggle="tab"><img src="<?php echo image_path('new_icons/fuel_small') ?>"><?php echo ('Item Attachment') ?></a></li> 
												<li ><a href="#ui-tab-four" data-toggle="tab"><img src="<?php echo image_path('new_icons/fuel_small') ?>"><?php echo ('Passengers') ?></a></li> 
												 
											</ul>
											<div class="clearFix"></div>
											
										<div class="ui-detail-tab-list" >
											<div id="ui-tab-one" class="ui-tab" style="">
												<div class="ui-tab-content-frame">
													 <div class="ui-tab-content-container-box" style="border:0px;">
													<div class="ui-main-content-list" style="border:0px;"> 
														<div class="ui-main-content-cont"  style="border:0px;">
															<div class="ui-content-list-box"  style="border:0px;">
																
																<div class="ui-main-content-cont" >	
																	<div class="ui-main-content">
																		<fieldset class="ui-content-fieldset" style="margin-top:12px;">
																			<legend><img src="<?php echo image_path('icons/edit') ?>" ><?php echo ('Participant Lists')  ?></legend>
																		</fieldset><!-- end of ui-content-fieldset -->
																		
																		<div class="ui-main-form-content " style="margin-bottom:10px;">
																			<table>
																				<tr>
																					<td >
																						<fieldset  style="">
																							<legend class="ui-form-legend"><img src="<?php echo image_path('icons/details') ?>" ><?php echo ('Detail') ?></legend>
																							<div class="ui-main-form" >		
																								 <?php include_partial('participantList', array('vehicle' => $vehicle, 'types' => $types, 'feul_types' => $feul_types )) ?>
																							</div><!-- end of ui-content-form -->
																						</fieldset>
																					</td>
																					
																				</tr>						 
																			</table>
																			
																			 
																		</div><!-- end of ui-main-form-content -->
																	</div><!-- end of ui-main-content -->
																</div><!-- end of ui-main-content-cont -->
															</div><!-- end of ui-content-list-box -->
														</div><!-- end of ui-main-content-cont --> 
													</div><!-- end of ui-main-content-list --> 
													
													
													 
												</div><!-- end of ui-content-container-box -->
													 </div>
											</div>
										
										<div id="ui-tab-two" class="ui-tab" style="">
											<div class="ui-tab-content-frame">
												 <div class="ui-tab-content-container-box" style="border:0px;">
												<div class="ui-main-content-list" style="border:0px;"> 
													<div class="ui-main-content-cont"  style="border:0px;">
														<div class="ui-content-list-box"  style="border:0px;">
															<div class="ui-main-content-cont" >	
																	<div class="ui-main-content">
																		<fieldset class="ui-content-fieldset" style="margin-top:12px;">
																			<legend><img src="<?php echo image_path('icons/edit') ?>" ><?php echo ('Attachment List')  ?></legend>
																		</fieldset><!-- end of ui-content-fieldset -->
																		
																		<div class="ui-main-form-content " style="margin-bottom:10px;">
																			<table>
																				<tr>
																					<td >
																						<fieldset  style="">
																							<legend class="ui-form-legend"><img src="<?php echo image_path('icons/details') ?>" ><?php echo ('Detail') ?></legend>
																							<div class="ui-main-form" >		
																								 <?php include_partial('attachmentList', array('vehicle' => $vehicle, 'types' => $types, 'feul_types' => $feul_types )) ?>
																							</div><!-- end of ui-content-form -->
																						</fieldset>
																					</td>
																					 
																				</tr>						 
																			</table>
																			
																			 
																		</div><!-- end of ui-main-form-content -->
																	</div><!-- end of ui-main-content -->
																</div><!-- end of ui-main-content-cont -->
															</div><!-- end of ui-content-list-box -->
														</div><!-- end of ui-main-content-cont --> 
													</div><!-- end of ui-main-content-list --> 
												
												
												 
											</div><!-- end of ui-content-container-box -->
											 </div>
										</div>
										
										<div id="ui-tab-three" class="ui-tab" style="">
											<div class="ui-tab-content-frame">
												 <div class="ui-tab-content-container-box" style="border:0px;">
												<div class="ui-main-content-list" style="border:0px;"> 
													<div class="ui-main-content-cont"  style="border:0px;">
														<div class="ui-content-list-box"  style="border:0px;">
															<div class="ui-main-content-cont" >	
																	<div class="ui-main-content">
																		<fieldset class="ui-content-fieldset" style="margin-top:12px;">
																			<legend><img src="<?php echo image_path('icons/edit') ?>" ><?php echo ('Item Attachment List')  ?></legend>
																		</fieldset><!-- end of ui-content-fieldset -->
																		
																		<div class="ui-main-form-content " style="margin-bottom:10px;">
																			<table>
																				<tr>
																					<td >
																						<fieldset  style="">
																							<legend class="ui-form-legend"><img src="<?php echo image_path('icons/details') ?>" ><?php echo ('Detail') ?></legend>
																							<div class="ui-main-form" >		
																								 <?php include_partial('itemList', array('vehicle' => $vehicle, 'types' => $types, 'feul_types' => $feul_types )) ?>
																							</div><!-- end of ui-content-form -->
																						</fieldset>
																					</td>
																					 
																				</tr>						 
																			</table>
																			
																			 
																		</div><!-- end of ui-main-form-content -->
																	</div><!-- end of ui-main-content -->
																</div><!-- end of ui-main-content-cont -->
															</div><!-- end of ui-content-list-box -->
														</div><!-- end of ui-main-content-cont --> 
													</div><!-- end of ui-main-content-list --> 
												
												
												 
											</div><!-- end of ui-content-container-box -->
											 </div>
										</div>
										
										<div id="ui-tab-four" class="ui-tab" style="">
											<div class="ui-tab-content-frame">
												 <div class="ui-tab-content-container-box" style="border:0px;">
												<div class="ui-main-content-list" style="border:0px;"> 
													<div class="ui-main-content-cont"  style="border:0px;">
														<div class="ui-content-list-box"  style="border:0px;">
															<div class="ui-main-content-cont" >	
																	<div class="ui-main-content">
																		<fieldset class="ui-content-fieldset" style="margin-top:12px;">
																			<legend><img src="<?php echo image_path('icons/edit') ?>" ><?php echo ('Passenger List')  ?></legend>
																		</fieldset><!-- end of ui-content-fieldset -->
																		
																		<div class="ui-main-form-content " style="margin-bottom:10px;">
																			<table>
																				<tr>
																					<td >
																						<fieldset  style="">
																							<legend class="ui-form-legend"><img src="<?php echo image_path('icons/details') ?>" ><?php echo ('Detail') ?></legend>
																							<div class="ui-main-form" >		
																								 <?php include_partial('passengerList', array('vehicle' => $vehicle, 'types' => $types, 'feul_types' => $feul_types )) ?>
																							</div><!-- end of ui-content-form -->
																						</fieldset>
																					</td>
																					 
																				</tr>						 
																			</table>
																			
																			 
																		</div><!-- end of ui-main-form-content -->
																	</div><!-- end of ui-main-content -->
																</div><!-- end of ui-main-content-cont -->
															</div><!-- end of ui-content-list-box -->
														</div><!-- end of ui-main-content-cont --> 
													</div><!-- end of ui-main-content-list --> 
												
												
												 
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
				
				 
			</div> <!-- end of ui-main-list-cont -->
		</div>  <!-- end of ui-list-cont -->
	</div> <!-- end of ui-container -->


	<div class="ui-navigation-cont">
		<div class="ui-navigation-box">
			<div class="ui-navigation-list">
				<ul class="ui-left-button">
					<li><a href="<?php echo url_for('fleet/view?task_id='.$sf_request->getParameter('task_id').'&token_id='.$sf_request->getParameter('token_id')) ?>"><button class="ui-back-button"><img src="<?php echo image_path('new_icons/back') ?>">Back</button></a></li>
				</ul>
				</ul>
				<ul class="ui-right-button">
					<li><a href="<?php echo url_for('fleet/departureComplete?task_id='.$sf_request->getParameter('task_id').'&token_id='.$sf_request->getParameter('token_id')) ?>"><button class="ui-next-button"><img src="<?php echo image_path('new_icons/next') ?>">Complete</button></a></li>
				</ul>
				<div class="clearFix"></div>
			</div>
		
		</div>
	</div>
</div>
