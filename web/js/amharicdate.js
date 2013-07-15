<script type="text/javascript">
$(function() {
//	$.calendars.picker.setDefaults({renderer: $.calendars.picker.themerollerRenderer}); // Requires jquery.calendars.picker.ext.js
	$('#popupDatepicker').calendarsPicker({calendar: $.calendars.instance('ethiopian')});
	(function($) {
	   $.calendars.picker.regional['am'] = {
		renderer: $.calendars.picker.defaultRenderer,
		prevText: 'ያለፈ', prevStatus: 'ያለፈውን ወር አሳይ',
		prevJumpText: '&#x3c;&#x3c;', prevJumpStatus: 'ያለፈውን ዓመት አሳይ',
		nextText: 'ቀጣይ', nextStatus: 'ቀጣዩን ወር አሳይ',
		nextJumpText: '&#x3e;&#x3e;', nextJumpStatus: 'ቀጣዩን ዓመት አሳይ',
		currentText: 'አሁን', currentStatus: 'የአሁኑን ወር አሳይ',
		todayText: 'ዛሬ', todayStatus: 'የዛሬን ወር አሳይ',
		clearText: 'አጥፋ', clearStatus: 'የተመረጠውን ቀን አጥፋ',
		closeText: 'ዝጋ', closeStatus: 'የቀን መምረጫውን ዝጋ',
		yearStatus: 'ዓመቱን ቀይር', monthStatus: 'ወሩን ቀይር',
		weekText: 'ሳም', weekStatus: 'የዓመቱ ሳምንት ',
		dayStatus: 'DD, M d, yyyy ምረጥ', defaultStatus: 'ቀን ምረጥ',
		isRTL: false
	};
	$.calendars.picker.setDefaults($.calendars.picker.regional['am']);
	})(jQuery);
});
function showDate(date) {
	alert('The date chosen is ' + date);
}
</script>
