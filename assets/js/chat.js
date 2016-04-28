$(function(){

	$(".message").scrollTop = -$(".message").scrollHeight;

	$(document).on('submit', '#chat-form', function(){

		var text = $.trim($("#text").val());
		var name = $.trim($("#name").val());

			$.post('assets/app/postMessage.php', {text: text, name: name}, function(data){

				$(".message").append(data);
				getMessage();

			});

		$("input[type=text], textarea").val("");
		messageTimeout();	

	});


	function getMessage() {

		$.get('assets/app/getMessage.php', function(data){

			$(".message").html(data);

		});

		setTimeout(getMessage, 60000);
		messageTimeout();
	}

	function clearMessages() {

		$.get('assets/app/refreshMessages.php', function(){
				$(".message").empty();
		});

		var text = "<b>messages refreshed :</b>";
		var name = "";

		$.post('assets/app/postMessage.php', {text: text, name: name}, function(data){

				$(".message").append(data);
			
		});

	}

	function messageTimeout() {

		// this will clear the messages from database after a 1/4 of a day of chatting
		// so the database isn't full of conversations (with myself hahahaha)	
		setTimeout(clearMessages, 86400000/4);

	}

	
});
