$(document).ready(function(){
	
	$('#ui-collaps-list-box').click(function(){
		
		$('.ui-collapsible-list-box').slideToggle();
		
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

$(document).ready(function(){
	
	$('#ui-form-collaps-list-box').click(function(){
		
		$('.ui-main-list').slideToggle();
		
		if($(this).hasClass('opened'))
		{
			$(this).removeClass('opened');
			$(this).addClass('closed');
			$('#ui-up-arrow').addClass('displayNone');
			$('#ui-down-arrow').removeClass('displayNone'); 
			
			return false;
		}
		else
		{
			$(this).removeClass('closed');
			$(this).addClass('opened');	
			$('#ui-down-arrow').addClass('displayNone');
			$('#ui-up-arrow').removeClass('displayNone');  
			
			return false;
		}
		
				
		return false;
	});
	
});

$(document).ready(function(){
	
	$('#ui-list-collaps-list-box').click(function(){
		
		$('.ui-content-container-box').slideToggle();
		
		if($(this).hasClass('opened'))
		{
			$(this).removeClass('opened');
			$(this).addClass('closed');
			$('#ui-list-up-arrow').addClass('displayNone');
			$('#ui-list-down-arrow').removeClass('displayNone'); 
			
			return false;
		}
		else
		{
			$(this).removeClass('closed');
			$(this).addClass('opened');	
			$('#ui-list-down-arrow').addClass('displayNone');
			$('#ui-list-up-arrow').removeClass('displayNone');  
			
			return false;
		}
		
				
		return false;
	});
	
});

$(document).ready(function(){
	
	$('#ui-grid-collaps-list-box').click(function(){
		
		$('.ui-grid-content-container-box').slideToggle();
		
		if($(this).hasClass('opened'))
		{
			$(this).removeClass('opened');
			$(this).addClass('closed');
			$('#ui-grid-up-arrow').addClass('displayNone');
			$('#ui-grid-down-arrow').removeClass('displayNone'); 
			
			return false;
		}
		else
		{
			$(this).removeClass('closed');
			$(this).addClass('opened');	
			$('#ui-grid-down-arrow').addClass('displayNone');
			$('#ui-grid-up-arrow').removeClass('displayNone');  
			
			return false;
		}
		
				
		return false;
	});
	
});
