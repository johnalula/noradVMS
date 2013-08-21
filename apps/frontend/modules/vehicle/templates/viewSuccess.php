<div class="ui-main-menu-cont">
	<div class="ui-main-menu-actions">
		<ul>
			<li><a href="<?php echo url_for('dashboard/index') ?>"><img src="<?php echo image_path('new_icons/control_panel_medium') ?>">Dashboard</a></li>
			<li><a href="#"><img src="<?php echo image_path('icons/refresh_small') ?>">Refresh</a></li>
		</ul>
		
		<span class="ui-page-navigator">
			<ul>
				<li><a href="<?php echo url_for('vehicle/index') ?>"><img src="<?php echo image_path('new_icons/back') ?>">Back to list</a></li>
			</ul>
		</span>
		<div class="clearFix"></div>
	</div>
</div>

<?php 

	//$flag = VehicleTable::processUpdate ( 1,'985fb0ad8cb4c43abd7b251dfe20cfa0',$plate_code,$plate_no,$plate_code_no,$vehicle_type,$vehicle_make,$vehicle_model,$vehicle_color,$vehicle_weight,$vehicle_year) ;


//$flags = AssignmentOrderTable::processCreate (4, '4f3ff5764dd279ac2316ca9666c3e5a2', 1, 1, 'sdfas fasdf', '12/04/2013'); 
 
		//$driver = DriverTable::processObject (1 );
			//echo $driver->is_assigned ? 'true':'false';
			//$driver->assignDriver();
				//echo $driver->is_assigned ? 'true':'false';
				//$flag = VehicleTable::processVehicleAssignment( $order ); 
						 
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
				<h1><img src="<?php echo image_path('new_icons/car') ?>"><?php echo __('Vehicle')  ?></h1>			
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
							<legend><img style="width:16px;height:16px;" src="<?php echo image_path('icons/edit') ?>" ><?php echo ('Edit Vehicle')  ?></legend>
						</fieldset><!-- end of ui-content-fieldset -->
						
						<div class="ui-main-form-content ui-collapsible-list-box">
							<table>
								<tr>
									<td >
										<fieldset  style="">
											<legend class="ui-form-legend"><img src="<?php echo image_path('icons/details') ?>" ><?php echo ('Detail') ?></legend>
											<div class="ui-main-form" >		
												 <?php include_partial('viewForm', array('vehicle' => $vehicle, 'types' => $types, 'feul_types' => $feul_types )) ?>
											</div><!-- end of ui-content-form -->
										</fieldset>
									</td>
									<td >
										<fieldset  style="">
											<legend class="ui-form-legend"><img src="<?php echo image_path('icons/details') ?>" ><?php echo ('Detail') ?></legend>
											<div class="ui-main-form" >		
												 <?php include_partial('detailForm', array('vehicle' => $vehicle, 'types' => $types, 'feul_types' => $feul_types)) ?>
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


<!-- list container --> 

<div class="ui-container">
	<div class="ui-list-cont">		
		<div class="ui-main-list-cont" >
			<div class="ui-list-header">				
				<h1><img src="<?php echo image_path('new_icons/setting_medium') ?>"><?php echo __('Vehicle Settings')  ?></h1>
				<div class="ui-form-content-minimize closed" id="ui-grid-collaps-list-box" style="margin-top:0px;float:right;">	
					<span id="ui-grid-up-arrow" class="ui-minimize-arrow "><img src="<?php echo image_path('new_icons/arrow_up') ?>"></span>		
					<span id="ui-grid-down-arrow" class="ui-minimize-arrow displayNone"><img src="<?php echo image_path('new_icons/arrow_down') ?>"></span>	
				</div>	
				<div class="clearFix"></div>
			</div><!-- end of ui-list-header -->
			
			<div class="ui-main-content-list ui-grid-content-container-box"> 
				<div class="ui-main-content-cont" >
					<div class="ui-content-list-box">
						 
						<div class="ui-tab-main-cont">
							<div class="ui-tab-container-box" style="">
								<div id="tabs" class="ui-tab-detail-list-box">
										<ul class="ui-tab-list" > 
											<li><a href="#ui-tab-one" class="active" data-toggle="tab"><img src="<?php echo image_path('new_icons/fuel_small') ?>"><?php echo ('Fuel Setting') ?></a></li>
											<li ><a href="#ui-tab-two" data-toggle="tab"><img src="<?php echo image_path('new_icons/fuel_small') ?>"><?php echo ('Status Checkup Setting ') ?></a></li> 
											<li ><a href="#ui-tab-three" data-toggle="tab"><img src="<?php echo image_path('new_icons/fuel_small') ?>"><?php echo ('Checkup Period Setting ') ?></a></li> 
											<li ><a href="#ui-tab-four" data-toggle="tab"><img src="<?php echo image_path('new_icons/fuel_small') ?>"><?php echo ('Insurance Setting ') ?></a></li> 
											 
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
																		<legend><img src="<?php echo image_path('icons/edit') ?>" ><?php echo ('Edit Vehicle Setting')  ?></legend>
																	</fieldset><!-- end of ui-content-fieldset -->
																	
																	<div class="ui-main-form-content " style="margin-bottom:10px;">
																		<table>
																			<tr>
																				<td >
																					<fieldset  style="">
																						<legend class="ui-form-legend"><img src="<?php echo image_path('icons/details') ?>" ><?php echo ('Detail') ?></legend>
																						<div class="ui-main-form" >		
																							 <?php include_partial('fuelSettingForm', array('vehicle' => $vehicle, 'types' => $types, 'feul_types' => $feul_types )) ?>
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
																		<legend><img src="<?php echo image_path('icons/edit') ?>" ><?php echo ('Edit Vehicle Setting')  ?></legend>
																	</fieldset><!-- end of ui-content-fieldset -->
																	
																	<div class="ui-main-form-content " style="margin-bottom:10px;">
																		<table>
																			<tr>
																				<td >
																					<fieldset  style="">
																						<legend class="ui-form-legend"><img src="<?php echo image_path('icons/details') ?>" ><?php echo ('Detail') ?></legend>
																						<div class="ui-main-form" >		
																							 <?php include_partial('statusCheckingForm', array('vehicle' => $vehicle, 'types' => $types, 'feul_types' => $feul_types )) ?>
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
																		<legend><img src="<?php echo image_path('icons/edit') ?>" ><?php echo ('Edit Vehicle Setting')  ?></legend>
																	</fieldset><!-- end of ui-content-fieldset -->
																	
																	<div class="ui-main-form-content " style="margin-bottom:10px;">
																		<table>
																			<tr>
																				<td >
																					<fieldset  style="">
																						<legend class="ui-form-legend"><img src="<?php echo image_path('icons/details') ?>" ><?php echo ('Detail') ?></legend>
																						<div class="ui-main-form" >		
																							 <?php include_partial('checkupPeriodSetting', array('vehicle' => $vehicle, 'types' => $types, 'feul_types' => $feul_types )) ?>
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
																		<legend><img src="<?php echo image_path('icons/edit') ?>" ><?php echo ('Edit Vehicle Setting')  ?></legend>
																	</fieldset><!-- end of ui-content-fieldset -->
																	
																	<div class="ui-main-form-content " style="margin-bottom:10px;">
																		<table>
																			<tr>
																				<td >
																					<fieldset  style="">
																						<legend class="ui-form-legend"><img src="<?php echo image_path('icons/details') ?>" ><?php echo ('Detail') ?></legend>
																						<div class="ui-main-form" >		
																							 <?php include_partial('insuranceSettingform', array('vehicle' => $vehicle, 'types' => $types, 'feul_types' => $feul_types )) ?>
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

<script>
	
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
	
	function updateVehicle ( vehicleID )
	{
		var tokenID = document.getElementById('token_id').value;
		var plate_code = document.getElementById('plate_code').value;
		var plate_no = document.getElementById('plate_no').value;
		var plate_code_no = document.getElementById('plate_code_no').value;
		var vehicle_type = document.getElementById('vehicle_type').value;
		var vehicle_make = document.getElementById('vehicle_make').value;
		var vehicle_model = document.getElementById('vehicle_model').value;
		var vehicle_color = document.getElementById('vehicle_color').value;
		var vehicle_weight = document.getElementById('vehicle_weight').value;
		var vehicle_year = document.getElementById('vehicle_year').value;
		var fuel_type = document.getElementById('fuel_type').value;
		var service_type = document.getElementById('service_type').value;
		var purchased_date = document.getElementById('purchased_date').value;
		var purchased_type = document.getElementById('purchased_type').value;
		var serial_no = document.getElementById('serial_no').value;
		var pin_no = document.getElementById('pin_num').value;
		var purchased_mileage = document.getElementById('purchased_mileage').value;
		var current_mileage = document.getElementById('current_mileage').value;
		var seat_capacity = document.getElementById('seat_capacity').value;
		var doors = document.getElementById('no_of_doors').value;
		var liter = document.getElementById('liter_per_km').value;
		var engine_no = document.getElementById('vehicle_engine_no').value;
		var chesis_no = document.getElementById('vehicle_chesis_no').value;
		var desc = document.getElementById('description').value;
		
	
			$.ajax({
				type: "GET",
				data: 'vehicle_id='+vehicleID+'&token_id='+tokenID+'&plate_code='+plate_code+'&plate_no='+plate_no+'&plate_code_no='+plate_code_no+'&vehicle_type='+vehicle_type+'&vehicle_make='+vehicle_make+'&vehicle_model='+vehicle_model+'&vehicle_color='+vehicle_color+'&vehicle_weight='+vehicle_weight+'&vehicle_year='+vehicle_year+'&service_type='+service_type+'&purchased_date='+purchased_date+'&purchased_type='+purchased_type+'&serial_no='+serial_no+'&pin_no='+pin_no+'&purchased_mileage='+purchased_mileage+'&current_mileage='+current_mileage+'&seat_capacity='+seat_capacity+'&doors='+doors+'&liter='+liter+'&engine_no='+engine_no+'&chesis_no='+chesis_no+'&fuel_type='+fuel_type+'&description='+desc,
				url: '<?php echo url_for('vehicle/updateVehicle')?>', 
				success: function() { 
					showSuccess(); 
				},
				error: function() {
					showError();
				},
				async: false
				});
			
				/*var data = 'vehicle_id='+vehicleID+'&token_id='+tokenID+'&plate_code='+plate_code+'&plate_no='+plate_no+'&plate_code_no='+plate_code_no+'&vehicle_type='+vehicle_type+'&vehicle_make='+vehicle_make+'&vehicle_model='+vehicle_model+'&vehicle_color='+vehicle_color+'&vehicle_weight='+vehicle_weight+'&vehicle_year='+vehicle_year+'&service_type='+service_type+'&purchased_date='+purchased_date+'&purchased_type='+purchased_type+'&serial_no='+serial_no+'&pin_no='+pin_no+'&purchased_mileage='+purchased_mileage+'&current_mileage='+current_mileage+'&seat_capacity='+seat_capacity+'&doors='+doors+'&liter='+liter+'&engine_no='+engine_no+'&chesis_no='+chesis_no+'&fuel_type='+fuel_type+'&description='+desc;
			alert(data);*/
			
			//alert(vehicleID);
			
		return false;
		
	}
	

</script>
