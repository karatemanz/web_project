<?php 

// code to cache each page of the site for 10 minutes to shorten load times during users time browsing

// caches data on the server for 10 minutes for going back and forth between pages
	$seconds_to_cache = 600;
	$ts = gmdate("D, d M Y H:i:s", time() + $seconds_to_cache) . " GMT";
	header("Expires: $ts");
	header("Pragma: cache");
	header("Cache-Control: max-age=$seconds_to_cache");


 ?>