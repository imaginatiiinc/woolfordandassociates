var menu = document.querySelector('#dropdown');
//console.dir( menu );
menu.onclick = function(elem){
	document.querySelector('#nav ul').classList.toggle('show');
	
}

$(document).ready(function() {
	$('form#contact_us button.send_button').click(function(){
		$.post("/json-emailer.php", $( "form#contact_us" ).serialize(), function(data) {
			console.log(data);
			if (data['status'] == "ok") {
				$('.form-errors').html("");
				$('.form-result').html("Thank you, your message has been sent.");
			} else {
				var error_msg = "Error:<br>";
				for (var i = 0, len = data['status'].length; i < len; i++) {
					error_msg += data['status'][i] + "<br>";
				}
				$('.form-result').html("");
				$('.form-errors').html(error_msg);
			}
		});
	});
});