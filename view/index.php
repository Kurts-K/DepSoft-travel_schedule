<!DOCTYPE html>
<html>
<head>
	<title>Расписание поездок</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script
  	src="https://code.jquery.com/jquery-3.3.1.min.js"
  	integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  	crossorigin="anonymous"></script>
</head>
<body>
	<h2>Расписание поездок курьеров в регионы</h2>

	<label for="numberFields">Количество полей</label>
	<input id="numberFields" type="number">
	<button id="pull" href="#">Заполнить расписание</button>
	
	<div class="wrap">
		<div id="divresult">
			<ul id="result"></ul>
	</div>

	<div class="insert-data">
		<h3>Внесение данных в расписание </h3>
		<form class="insert-form">
			<div>
				<label for="region">Регион</label>
				<select id="region" name="region">
					<option>Выберите город</option>
					<?php require_once "../model/generationRegion.php"; ?>
				</select>
			</div>

			<div>
				<label for="date-from-insert">Дата выезда из Москвы</label>
				<input type="datetime-local" name="date-from-insert" id="date-from-insert">
			</div>

			<div>
				<label for="courier">ФИО Курьера</label>
				<select id="courier" name="courier">
					<option>Выберите курьера</option>
					<?php require_once "../model/generationCourier.php"; ?>
				</select>
			</div>

			<div>
				<label for="date-to-insert">Дата прибытия в регион</label>
				<input type="text" name="date-to-insert" id="date-to-insert" 
				 disabled="disabled">
			</div>
			<input type="submit" name="submitSend" id="submitSend" value="Добавить в расписание">
		</form>
			<center><p id="status">-</p></center>
	</div>


	<div class="output-data">
		<h3>Расписание поездок в регионы за период :</h3>

		<form class="output-form">
			<div>
				<label for="date-from-output">C</label>
				<input type="datetime-local" name="date-from-output" id="date-from-output">
			</div>
			<div>
				<label for="date-to-output">По</label>
				<input type="datetime-local" name="date-to-output" id="date-to-output">
			</div>
			<input type="submit" name="submitShow" value="Показать" id="submitShow">
		</form>
	</div>
	</div>

<script src="../controller/dateFromToInsert.js" type="text/javascript"></script>
<script src="../controller/addSchedule.js" type="text/javascript"></script>
<script src="../controller/showSchedule.js" type="text/javascript"></script>
<script src="../controller/fillScript.js" type="text/javascript"></script>
</body>
</html>