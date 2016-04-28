function swapMe(id) {

	$.getJSON("assets/json/videos.json", function(data) {
	
		var theVideos = data;

		var video = theVideos.videos[id];
		console.log(video.title);

		$("#youtube").attr("src", "https://www.youtube.com/embed/"+ video.src +"?autoplay=0");

	});

	console.log(id);


}