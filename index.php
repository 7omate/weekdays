<?php

date_default_timezone_set('Europe/Paris');

$start_date = new DateTime('first day of this month');
$end_date = new DateTime('last day of this month');
$end_date = $end_date->add(new DateInterval('P1D'));

$period = new DatePeriod(
	$start_date, // 1st PARAM: start date
	new DateInterval('P1D'), // 2nd PARAM: interval (1 day interval in this case)
	$end_date // 3rd PARAM: end date
);



$p = array_reverse(iterator_to_array($period));
foreach($p as $date) {
	only_weekdays($date);
}


function only_weekdays($param){
	$weekday = $param->format('w');
	if($weekday != 0 && $weekday != 6){
		echo $param->format('Y-m-d').'<br/>';  // Display the dates in yyyy-mm-dd format
	}
}

?>
