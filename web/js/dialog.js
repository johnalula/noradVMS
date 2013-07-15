$(function() {
		// a workaround for a flaw in the demo system (http://dev.jqueryui.com/ticket/4375), ignore!
		$( "#dialog:ui-dialog" ).dialog( "destroy" );
		

		$( "#dialog-form" ).dialog({
			autoOpen: true,
			scrollable: true,
			height: 460,
			width: 850,
			modal: true,
			buttons: {
				Close: function() {
					$( this ).dialog( "close" );
				}			}
		});

		$( "#create-user" )
			.button()
			.click(function() {
				$( "#dialog-form" ).dialog( "open" );
			});
	});

$(document).ready(function(){ 
$('#data_table').dataTable(); 
}); 
