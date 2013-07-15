$(function() {
//	$('#rangePicker').calendarsPicker({rangeSelect: true, showTrigger: '#calImg'});
	//$('#range2Picker').calendarsPicker({ calendar: $.calendars.instance('ethiopian'),
//    rangeSelect: true, monthsToShow: 2, showTrigger: '#calImg'});
//	$.calendars.picker.setDefaults({renderer: $.calendars.picker.themerollerRenderer});
 // Requires jquery.calendars.picker.ext.js
	$('#return_date').calendarsPicker({calendar: $.calendars.instance('ethiopian')});
	$('#start_date').calendarsPicker({calendar: $.calendars.instance('ethiopian')});
	$('#end_date').calendarsPicker({calendar: $.calendars.instance('ethiopian')});
// Update three select controls to match a datepicker selection 
/*function updateSelected(dates) { 
    $('#selectedMonth').val(dates.length ? dates[0].month() : ''); 
    $('#selectedDay').val(dates.length ? dates[0].day() : ''); 
    $('#selectedYear').val(dates.length ? dates[0].year() : ''); 
} 
 
$('#enddate').calendarsPicker({ 
    minDate: '01/01/2001', maxDate: '12/31/2010', 
    alignment: 'bottomRight', onSelect: updateSelected, 
    showTrigger: '#calImg'}); 
 
// Update datepicker from three select controls 
$('#selectedMonth,#selectedDay,#selectedYear').change(function() { 
    $('#selectedPicker').calendarsPicker('setDate', calendar.newDate( 
        $('#selectedYear').val(), $('#selectedMonth').val(), 
        $('#selectedDay').val())); 
});
*/
	(function($) {
	   $.calendars.picker.regional['am'] = {
		renderer: $.calendars.picker.defaultRenderer,
		showOn: 'button',
		buttonImage: '/images/calendar.png',
		prevText: 'ዝሓለፈ', prevStatus: 'ዝሓለፈ ወርሒ ኣርእይ',
		prevJumpText: '&#x3c;&#x3c;', prevJumpStatus: 'ዝሓለፈ ዓመት ኣርእይ',
		nextText: 'ቐፃሊ', nextStatus: 'ቐፃሊ ወርሒ ኣርእይ',
		nextJumpText: '&#x3e;&#x3e;', nextJumpStatus: 'ቐፃሊ ዓመት ኣርእይ',
		currentText: 'ሎሚ', currentStatus: 'ናይ ሎሚ ወርሒ አርእይ',
		todayText: 'ሎሚ', todayStatus: 'ናይ ሜዓልቲ አርእይ',
		clearText: 'ሰርዝ', clearStatus: 'ዝተመረፀ ዕልት ሰርዝ',
		closeText: 'ዕፀ', closeStatus: 'ናይ ዕለት ምርጫ ዕፀ',
		yearStatus: 'ዓመት ቐይር', monthStatus: 'ወርሒ ቐይር',
		weekText: 'ሰሙ', weekStatus: 'ናይ ዓመቱ ሰሙን ',
		dayStatus: 'DD, M d, yyyy ምረፅ', defaultStatus: 'ዕለት ምረፅ',
		isRTL: false
	};
	$.calendars.picker.setDefaults($.calendars.picker.regional['am']);
	})(jQuery);
});


