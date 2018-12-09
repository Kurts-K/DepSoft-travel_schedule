<?php
require_once "connect.php";


	function generationCourier() {	
		$Courier = array();						
		if ($query_user = mysqli_query(DataBase::getDb()->msqli, "SELECT * FROM `Courier_table`")) {
			while ($data = mysqli_fetch_assoc($query_user)) {
				$Courier[$data['id']] = $data['courier_name'];
        	}
				return $Courier;
		}
	}

$Courier = generationCourier();

foreach ($Courier as $key => $value) {
	echo "<option value='$value'> $value </option>";
}


?>