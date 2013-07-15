$(document).ready(function()
{
	 $("#usercheckBox").click(function () {
     $('.usercheckBox').attr('checked', this.checked);
	 });

    $(".usercheckBox").click(function(){
 
        if($(".usercheckBox").length == $(".usercheckBox:checked").length) {
            $("#usercheckBox").attr("checked", "checked");
        } else {
            $("#usercheckBox").removeAttr("checked");
        }
	});

	
}); 

