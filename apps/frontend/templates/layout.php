<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="shortcut icon" href="/favicon.ico" />
	<title>Vehicle Management System - eGPMS</title> 
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
	<div class="outer-center" style="">
		<div class="middle-center">
			<div class="inner-center">
			    <div style="" >
				 
				<?php echo $sf_content ?>	
			
			    </div>
			</div>
			 
		</div>
			<div class="middle-west" class="banner"> 	
				<div style="" class="banner">				
					<div class="ui-accordion-cont">
						<div id="accordion" class="accordion" >
							<div class="ui-accordion-header">
								<h2 class="" style="" ><?php echo __('Main Menu'); ?></h2> 
							</div> 	
								<?php include_partial('global/sideMenu'); ?> 
						</div>
					</div>
				</div>
			</div> 
		</div>
	</div>
	<div class="outer-east" style="width:0px;">
		  
	</div>
	<div class="outer-west" style="display:none;width:0px;">
		 
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
			
			 
		</div>
		 
	</div> 
	
	<div class="ui-layout-south">&copy;<?php echo __('nVMS 2012 All Rights Reserved') ?>
	</div>

</body>
</html>
