<?php
require_once "connect.php";


	function generationRegion() {	
		$Reg = array();						
		if ($query_user = mysqli_query(DataBase::getDb()->msqli, "SELECT * FROM `region_table`")) {
			while ($data = mysqli_fetch_assoc($query_user)) {
				$Reg[$data['id']] = $data['region'];
        	}
				return $Reg;
		}
	}

$Reg = generationRegion();

foreach ($Reg as $key => $value) {
	echo "<option value='$value'> $value </option>";
}


?>