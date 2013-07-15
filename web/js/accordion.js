$(function(){
	// Accordion
	//$("#accordion").accordion({ header: "h3" });
	$('#accordion').accordion({ 
	header: "h3" ,
	active: true, 
	navigation: true,  
	//event: 'mouseover', 
	fillSpace: false, 
	animated: 'easeslide' 
});
/*
	function(event, ui) { 
		var index = jQuery(this).find("h3").index(ui.newHeader[0]);
		alert('bob ' + index);
	}})});
				$( ".selector" ).accordion({ active: 2 }); 
				//getter 
				/*var active = $( ".selector" ).accordion( "option", "active" ); 
				//setter 
				$( ".selector" ).accordion( "option", "active", 3 ); 
*/
				// Tabs
				$('#tabs').tabs();

				// Dialog
				$('#dialog').dialog({
					autoOpen: false,
					width: 600,
					buttons: {
						"Ok": function() {
							$(this).dialog("close");
						},
						"Cancel": function() {
							$(this).dialog("close");
						}
					}
				});

				// Dialog Link
				$('#dialog_link').click(function(){
					$('#dialog').dialog('open');
					return false;
				});

				// Datepicker
				$('#datepicker').datepicker({
					inline: true
				});

				// Slider
				$('#slider').slider({
					range: true,
					values: [17, 67]
				});

				// Progressbar
				$("#progressbar").progressbar({
					value: 20
				});

				//hover states on the static widgets
				$('#dialog_link, ul#icons li').hover(
					function() { $(this).addClass('ui-state-hover'); },
					function() { $(this).removeClass('ui-state-hover'); }
				);

			});

