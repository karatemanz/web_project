$(function(){

	$(document).on('submit', '#login-form', function(){

		var user = $.trim($("#user").val());
		console.log(user);

			var posting = $.post('assets/app/addUser.php', {user: user});

			posting.success(function(){

				//console.log("success");

			});

			posting.error(function(msg){

				//console.log("fail");

			});

		$("input[type=text], textarea").val("");	

	});

});

function displayLogin(){

	$("#login-box").show("slow");

}

function hideLogin(){

	$("#login-box").hide("slow");

}
