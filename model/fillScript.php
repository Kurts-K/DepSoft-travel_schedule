<?php

require_once "connect.php";

function randomDate($randata) {
	$start = strtotime('2015-06-01T00:00'); 
	$end  = strtotime('2018-11-01T00:00');
	$randomStamp = rand($start,$end);
	$date_to = date("Y-m-d H:i", $randomStamp);
	$date_from = date("Y-m-d H:i", strtotime("+ $randata hours", $randomStamp));
	return $randomDate=[ $date_to, $date_from ];
}

function RandomCourier() {	
	if ($query_user = mysqli_query(DataBase::getDb()->msqli, "SELECT * FROM `Courier_table`")) {
		while ($data = mysqli_fetch_assoc($query_user)) {
				$courier[] = $data['courier_name'];
        }
		$randomKey = array_rand($courier, 1);
		return ($courier[$randomKey]);
		}
	}


function RandomRegion() {	
	if ($query_user = mysqli_query(DataBase::getDb()->msqli, "SELECT * FROM `region_table`")) {
		while ($data = mysqli_fetch_assoc($query_user)) {
			$region[] = $data['region'];
			$randata[] = $data['time_to'];
		}
		$randomKey = array_rand($region, 1);
		return $regionRandata=[ $region[$randomKey], $randata[$randomKey] ];
	}
}




function addSchedule($employmentCheck, $region, $courier, $date_to, $date_from) {	
	$null = null;
	if($employment) {
		return false;
	}
	$stmt = DataBase::getDb()->msqli->prepare
	("INSERT INTO `schedule` 
	(`id`, `region`, `courier`, `date_from`, `date_to`) 
	VALUES (?, ?, ?, ?, ?)");
	$stmt->bind_param('bssss', $null, $region, $courier, $date_from, $date_to);
	$stmt->execute();
	}


	function employmentCheck($date_to, $date_from, $courier) {
		$date_from = strtotime($date_from);
		$date_to   = strtotime($date_to);
		if ($query_user = mysqli_query(DataBase::getDb()->msqli, 
		"SELECT courier FROM schedule 
		WHERE (courier) = '{$courier}'
		AND UNIX_TIMESTAMP(date_from) <= '{$date_to}'
 		AND UNIX_TIMESTAMP(date_to) >= '{$date_from}'")) {
		$data = mysqli_fetch_array($query_user, MYSQLI_ASSOC);
			if ($data) {
				return true;
			} else {
				return false;
			}
    	}
	}


if ($_POST['numfil']) {
	echo ('Расписание заполнено: ' . $_POST['numfil'] . ' записей');

	for($i=0; $i< $_POST['numfil'] ; $i++) {

		$RandomRegion = RandomRegion();
		$region = $RandomRegion[0];
		$randata = $RandomRegion[1];


		$randomDate = randomDate($randata);
		$date_to = $randomDate[0];
		$date_from = $randomDate[1];

		$courier = RandomCourier();


		$employmentCheck = employmentCheck($date_to, $date_from, $courier);
		addSchedule($employmentCheck, $region, $courier, $date_to, $date_from);
	}
}


?>
