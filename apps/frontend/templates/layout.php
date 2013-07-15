<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="shortcut icon" href="/favicon.ico" />
	<title>electronic Government Property Management System - eGPMS</title> 
 	<?php include_stylesheets() ?>
    <?php include_javascripts() ?>  
    <style type="text/css"  media="print">
		html, body {
		/* NEUTRALIZE 'layout container' styles */
		overflow:	visible 	!important;
		width:		auto		!important;
		height:		auto		!important;
		position:	static		!important;
	}

	
	/* SHOW ONLY the panes you want 
	.ui-layout-pane-north ,
	.ui-layout-pane-south ,
	.ui-layout-pane-east ,*/
.ui-layout-pane-north ,
.ui-layout-pane-south,
.ui-layout-pane-west,
 
.ui-layout-pane-center,
.inner-center,
.outer-west ,
 
.middle-west ,
.middle-east ,
.ui-layout-resizer,
.ui-layout-resizer-west ,
.ui-layout-resizer-east ,
.ui-layout-toggler,
.outer-center ,
.middle-center{
 
}

	.inner-center th {
					margin-top:	2em			!important;
				}

	.noprint{
		display: none;
	}
	
	#.DTTT_Print{
	#display:none;
#}
body{
	padding-bottom: 260px;
	}
	table {
            -fs-table-paginate: paginate;
        }
          @media print {
        thead {display: table-header-group;}
    }
    @media print
{
  table { page-break-after:auto }
  tr    { page-break-inside:avoid; page-break-after:auto }
  td    { page-break-inside:avoid; page-break-after:auto }
  thead { display:table-header-group }
  tfoot { display:table-footer-group }
}
	.ui-layout-pane-center {
		display:	block		!important;
		/* OPTIONAL: change cosmetic styles as desired
		border:		0			!important;
		padding:	0			!important;
		background:	transparent	!important;
		margin-top:	10em			!important;
		*/
	}
	/* float the east pane to create a sidebar */
	.inner-center {
		float:			left;
		width:			90%			!important;
		margin-right:	1em			!important;
		margin-bottom:	80px		!important;
		padding:	0px!important;
	}
	
	 
	
	 .inner-center  thead { display:table-header-group }
h1{
   margin:0;
   padding:0;
   }
   
   
    </style>
    
 <script>
  
	 
 </script>
</head>
<body>
	<div class="outer-center">
		<div class="middle-center">
			<div class="inner-center">
			    <div style="height:560px;width:100%;border:0px inset white;padding:!important;" >
				 
				<?php echo $sf_content ?>	
			
			    </div>
			</div>
			<div class="ui-layout-north" id="maroon_gradiant" class="banner" style="padding:5px 15px;margin:0px;">
				<a  class="banner" href="<?php echo url_for('dashboard/index') ?>"><?php echo __('Home') ?> : </a>
				<span class="banner"> </span>
				<span style="padding-left:650px;">
				
				<?php 
					if($task_id){
					  $url=TaskTable::getBreadcram($sf_user->getAttribute('task_id',1));
					  //echo link_to(__('Edit Task'),$url.'/edit?id='.$task_id);
					 }
				?> 
				</span> 
			</div> 
		</div>
			<div class="middle-west" class="banner"> 	
				<div style="border:0px solid yellow;float:left;width:100%;margin-top:0px;" class="banner">				
					<div id="accordion" class="accordion" >
						 	<h2 class="ui-widget-header primary" style="padding:7px; 18px!important;font-size:15px!important;" ><?php echo __('Stock Management'); ?></h2> 
							<?php include_partial('global/sideMenu'); ?> 
					</div>
				</div>
			</div> 
		</div>
	</div>
	<div class="outer-east" style="">
		 
	</div>
	<div class="outer-west" style="display:none;width:1px;">
		 
	</div>
	<div class="ui-layout-north ui-fixed-height" style="" class="banner">
		<div class="ui-logo-box">
			<div class="ui-logo">
				<img style="" class="logo-img" src="<?php echo image_path('mulogo-small') ?>">
			</div>
			<div class="ui-logo-header">
				<span class="ui-title">
					<?php echo __('  NVMS - NORAD') ?>
				</span>
				<br>
				<span class="ui-sub-title">
					<?php echo __('Vehicle Management System') ?>
				</span>	
			</div>
			
			<div class="ui-user-login-box">
				<div class="ui-user-cont">
					<div class="ui-user-avatar-image">
						<span class="ui-avatar-img"><img class="avatar-img"  style="" src="<?php echo image_path('no_picture') ?>"   ></span>
					</div>
					
					<div class="ui-user-login-info">
						<span class="ui-user-display">
							<?php echo $sf_user->getAttribute('displayname') ?>
						</span>
						<br>
						<span class="ui-user-account">
							<?php echo $sf_user->getAttribute('username') ?>
						</span>
						<br>
						<span class="ui-user-logout">
							 
						</span>
					</div>
				</div>
			</div>
		</div>
		 
	</div> 
	
	<div class="ui-layout-south">&copy;<?php echo __('nVMS 2012 All Rights Reserved') ?>
	</div>

</body>
</html>
