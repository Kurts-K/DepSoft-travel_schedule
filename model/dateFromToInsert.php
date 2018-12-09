<?php
require_once "connect.php";

function dateFromToInsert() {							
	if ($query_user = mysqli_query(DataBase::getDb()->msqli, "SELECT * FROM `region_table`")) {
		while ($data = mysqli_fetch_assoc($query_user)) {
			$key =$data["region"];
       		$val = $data["time_to"];
			$arr[$key] = $val;
		}
	}

	foreach ($arr as $key => $value) {
		if($_POST['city'] == $key) {
			echo "$value";
		}
	}
}

dateFromToInsert();



