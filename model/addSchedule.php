<?php



require_once "connect.php";


function addSchedule($post, $employment) {	
	extract($post);
	$null = null;

	if($employment) {
		echo "Данный курьер занят в это время";
		return false;
	}

	$stmt = DataBase::getDb()->msqli->prepare
	("INSERT INTO `schedule` 
	(`id`, `region`, `courier`, `date_from`, `date_to`) 
	VALUES (?, ?, ?, ?, ?)");
	$stmt->bind_param('bssss', $null, $region, $courier, $date_from, $date_to);

	if ( $stmt->execute() ) {
		echo 'Добавлено в расписание';
	} else {
		echo 'Ошибка БД';
	}
		
}


function employmentCheck($post) {
	extract($post);


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

$employment = employmentCheck($_POST);
addSchedule($_POST, $employment);

?>