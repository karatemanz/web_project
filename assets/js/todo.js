$(document).ready(function() {

	fetch_content();
});

function fetch_content(){

	$("#todo").load("assets/views/todo.php");
	setTimeout(fetch_content, 60000);

}

function addItem(){

	  var term = $("#item").val(),
	  url = "assets/app/add.php";
	 
	  var posting = $.post(url, { name: term });
	 
	  posting.done(function() {
	    fetch_content();
	  });

}

function deleteItem(item_id) {

	var url = "assets/app/delete.php?item=" + item_id;

	var posting = $.post(url);

	posting.done(function() {
	  fetch_content();
	});
}

function markItem(item_id) {

	var url = "assets/app/mark.php?as=done&item=" + item_id;

	var posting = $.post(url);

	posting.done(function() {
	  fetch_content();
	});
}

