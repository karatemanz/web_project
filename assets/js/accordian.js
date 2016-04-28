$(function() {
  // Handler for .ready() called.
 for(var i=0; i<4; i++){
 	$("#ac" + i).hide();
 }


});


function acordToggle(number) {

	console.log("#ac" + number);
	$("#ac" + number).toggle("fast");


}