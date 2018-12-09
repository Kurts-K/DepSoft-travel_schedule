<?php
require_once "connect.php";

function showSchedule ($post) {
	extract($post);
	$dateFromOutput = strtotime($dateFromOutput);
	$dateToOutput   = strtotime($dateToOutput);
		
	if ($query_user = mysqli_query(DataBase::getDb()->msqli, 
	"SELECT region, courier, date_from, date_to  FROM schedule
	WHERE UNIX_TIMESTAMP(date_from) >= '{$dateFromOutput}' 
 	AND UNIX_TIMESTAMP(date_to) <= '{$dateToOutput}'")) {

		while ($data = mysqli_fetch_array($query_user, MYSQLI_ASSOC) ) {
			echo ('<li>' . 'Г.' . $data['region'] . ', ' . 'Курьер: ' . $data['courier'] . ', ' .
			 'C ' .  $data['date_from'] . ' ' . 'По ' .  $data['date_to'] . '</li>');
		}
    }
}
		
showSchedule($_POST);

?>