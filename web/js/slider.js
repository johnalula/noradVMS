$(document).ready(function(){
	
	$('#ui-collaps-list-box').click(function(){
		
		$('.ui-collapsible-list-box').slideToggle(1000);
		
		if($(this).hasClass('opened'))
		{
			$(this).removeClass('opened');
			$(this).addClass('closed');
			$('#minus-button').addClass('displayNone');
			$('#plus-button').removeClass('displayNone');
			$('#tabs').css('margin', '20px 0px 0px 0px');
			
			return false;
		}
		else
		{
			$(this).removeClass('closed');
			$(this).addClass('opened');	
			$('#plus-button').addClass('displayNone');
			$('#minus-button').removeClass('displayNone'); 
			$('#tabs').css('margin', '-10px 0px 0px 0px');
			
			return false;
		}
		
				
		return false;
	});
	
	 
	
});
