	var WriteRegion = document.getElementById('region');
	var WriteDateFromInsert = document.getElementById('date-from-insert');
	var WriteCourier = document.getElementById('courier');
	var WriteDateToInsert = document.getElementById('date-to-insert');
	var submitSend = document.getElementById('submitSend');



	submitSend.addEventListener('click', function(e) {
		e.preventDefault();
		
		$.ajax({
			type: 'POST',
			url: 'http://depsoft/model/addSchedule.php',
			data: {region:WriteRegion.value, date_from: WriteDateFromInsert.value,
			courier:WriteCourier.value, date_to:WriteDateToInsert.value},
			success: function(data) {
				var p_stat = document.getElementById('status');
				p_stat.innerHTML = data;
			}
		});


	} )

	window.addEventListener('click', function() {
		var p_stat = document.getElementById('status');
				p_stat.innerHTML = '-';
	} )