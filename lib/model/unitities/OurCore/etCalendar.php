<?php 
class ethiopianCalendar{
	
public static function toGrigorian($year,$month,$day) {
		$jdOffset = 1723856; /* is Julian date count for Ethiopian Calendar */
		$today = ( $jdOffset + 365 )+ 365 * ( $year - 1 )+ intval( $year/4 )+ 30 * $month+ $day - 31;
		$gd=cal_from_jd($today, CAL_GREGORIAN);	
	return $gd;
}

public static function toEthiopian($year,$month,$day){
		$jdOffset = 1723856;
		$jdn=cal_to_jd(CAL_GREGORIAN,$month,$day,$year);

		$r = ( ($jdn - $jdOffset) % 1461 ) ;
		$n = ( $r % 365 ) + 365 * intval( $r / 1460 ) ; 
		$ethiopian=array();
		$ethiopian['year'] = 4 * intval( ($jdn - $jdOffset) / 1461 ) + intval( $r / 365 )- intval( $r / 1460 );
		$ethiopian['month'] = intval( $n / 30 ) + 1 ;
		$ethiopian['day'] = ( $n % 30 ) + 1 ;
		$ethiopian['date'] = $ethiopian['day']."-".$ethiopian['month']."-".$ethiopian['year'];
	return $ethiopian;
}

/* returns the current date in Ethiopian Calendar after reading the current system time a gregorian calendar
 * It returns the ethiopian date thet can be accessed in e.g $date['year'],$date['month'],$date['day'] and $date['date']
 * in ethiopian calendar format */
public static function getCurrentDate() {
		$jdOffset = 1723856;
		$jdn=cal_to_jd(CAL_GREGORIAN,date('m'),date('d'),date('Y'));

		$r = ( ($jdn - $jdOffset) % 1461 ) ;
		$n = ( $r % 365 ) + 365 * intval( $r / 1460 ) ; 
		$ethiopian=array();
		$ethiopian['year'] = 4 * intval( ($jdn - $jdOffset) / 1461 ) + intval( $r / 365 )- intval( $r / 1460 );
		$ethiopian['month'] = intval( $n / 30 ) + 1 ;
		$ethiopian['day'] = ( $n % 30 ) + 1 ;
		$ethiopian['date'] = $ethiopian['day']."-".$ethiopian['month']."-".$ethiopian['year'];
	return $ethiopian;
}
public static function getCurrentYear() {
		$jdOffset = 1723856;
		$jdn=cal_to_jd(CAL_GREGORIAN,date('m'),date('d'),date('Y'));

		$r = ( ($jdn - $jdOffset) % 1461 ) ;
		$n = ( $r % 365 ) + 365 * intval( $r / 1460 ) ; 
		$year = 4 * intval( ($jdn - $jdOffset) / 1461 ) + intval( $r / 365 )- intval( $r / 1460 );
	return $year;
}
public static function getCurrentMonth() {
		$jdOffset = 1723856;
		$jdn=cal_to_jd(CAL_GREGORIAN,date('m'),date('d'),date('Y'));

		$r = ( ($jdn - $jdOffset) % 1461 ) ;
		$n = ( $r % 365 ) + 365 * intval( $r / 1460 ) ; 
		$month = intval( $n / 30 ) + 1 ;
	return $month;
}
public static function getCurrentDay() {
		$jdOffset = 1723856;
		$jdn=cal_to_jd(CAL_GREGORIAN,date('m'),date('d'),date('Y'));

		$r = ( ($jdn - $jdOffset) % 1461 ) ;
		$n = ( $r % 365 ) + 365 * intval( $r / 1460 ) ; 
		$day = ( $n % 30 ) + 1 ;
	return $day;
}

/* returns current ethiopian date form the current system time in timestamp format */
public static function getCurrentTimestamp() {
		$timestamp=mktime(date('h'), date('i'), date('s'), self::getCurrentMonth()  , self::getCurrentDay(), self::getCurrentYear());
	return $timestamp;
}

/* returns a date given a timestamp to a specified date format
 * defaults to ethiopian date format if date format is not given */
public static function getTimestamp($timestamp,$dformat='d-m-Y') {
	return date($dformat,$timestamp );
}

/*creates a time stamp given a specified hour, minute and second and a date. */
public static function setTimestamp($hour, $minute, $second, $date) {
		$timestamp=mktime($hour, $minute, $second, $date['month']  , $date['day'], $date['year']);
	return $timestamp;
}

/*converts Ethiopian Time to timestamp setting hour, minute and second to current system time */
public static function makeTimestamp($date) {
		$timestamp=mktime(date('h'), date('i'), date('s'),  $date['month']  , $date['day'], $date['year']);
	return $timestamp;
}

public static function fromStringToGrigorian($date) {
		if(strpos($date,'-'))
			$date=explode("-",$date);
		else if(strpos($date,'/'))
			$date=explode("/",$date);
		$jdOffset = 1723856;
		$today = ( $jdOffset + 365 )+ 365 * ( $date[2] - 1 )+ intval( $date[2]/4 )+ 30 * $date[1]+ $date[0] - 31;
		$gd=cal_from_jd($today, CAL_GREGORIAN);	
	return $gd;
}

public static function toTimestamp($date) {
        $str_date; 
		if(strpos($date,'-'))
			$str_date=explode("-",$date);
		else if(strpos($date,'/'))
			$str_date=explode("/",$date);
		$arr_date['day']=$str_date[0];
		$arr_date['month']=$str_date[1];
		$arr_date['year']=$str_date[2];		
		$timestamp=self::makeTimestamp($arr_date);
	return $timestamp;
}
}
?>
