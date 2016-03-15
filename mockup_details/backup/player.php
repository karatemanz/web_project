<?php 
// this code repurposed and used from codepen.io website
$track = array("revolution", "bob", "flamingo", "meltwithyou", "nodirection", "sellout", "tourettes", "justanother", "walkplank", "newgirl", "cartoonchase", "bluemoon", "wave", "whatigot", "requiem");
$tracklist = array("Revolution Day One", "Bob [NOFX]", "Revenge Of The Pink Flamingo", "I Melt With You [Modern English]", "No Direction", "Sell Out [Reel Big Fish]", "tourette's [Nirvana]", "Just Another", "Walking the Plank", "New Girl [The Suicide Machines]", "Cartoon Chase Scene", "Blue Moon [The Marcels]", "The Wave Equation", "What I Got [Sublime]", "Requiem For Third Wave Ska");

if(isset($_GET['song'])){
	$song = $_GET['song'];
}else{
	$song = 0;
}

if($song < 0){
	$song = 14;
}
if($song > 14){
	$song = 0;
}


 ?>
<div class="player">
   <ul>
      <li class="cover"><img src="assets/img/extra/SNWT_cover.jpg"/></li>
      <li class="info">
         <h1>The Vectors</h1>
         <h4>Songs; And How Not To Write Them</h4>
         <h2><?php echo $tracklist[$song]; ?></h2>

         <div class="button-items">

            <audio id="music" preload="auto" loop="false">
               <source src="assets/audio/<?php echo $track[$song]; ?>.mp3" type="audio/mp3">
            </audio>

            <div id="slider"><div id="elapsed"></div></div>
            <p id="timer">0:00</p>
            <div class="controls">

                <span class="expend">
	               	<a href="/class/portfolio/extra.php?song=<?php echo $song = $song - 1; ?>">
		               	<svg class="step-backward" viewBox="0 0 25 25" xml:space="preserve">
		                  <g><polygon points="4.9,4.3 9,4.3 9,11.6 21.4,4.3 21.4,20.7 9,13.4 9,20.7 4.9,20.7"/></g>
		                </svg>
		            </a>    
           		</span>

               <svg id="play" viewBox="0 0 25 25" xml:space="preserve">
                   <defs><rect x="-49.5" y="-132.9" width="446.4" height="366.4"/></defs>
                  <g><circle fill="none" cx="12.5" cy="12.5" r="10.8"/>
                       <path fill-rule="evenodd" clip-rule="evenodd" d="M8.7,6.9V18c0,0,0.2,1.4,1.8,0l8.1-4.8c0,0,1.2-1.1-1-2L9.8,6.5 C9.8,6.5,9.1,6,8.7,6.9z"/>
                  </g>
               </svg>
              

               <svg id="pause" viewBox="0 0 25 25" xml:space="preserve">
                  <g>
                     <rect x="6" y="4.6" width="3.8" height="15.7"/>
                     <rect x="14" y="4.6" width="3.9" height="15.7"/>
                  </g>
               </svg>

                <span class="expend">
                	<a href="/class/portfolio/extra.php?song=<?php echo $song = $song + 2; ?>">
	               		<svg class="step-forward" viewBox="0 0 25 25" xml:space="preserve">
	                  		<g><polygon points="20.7,4.3 16.6,4.3 16.6,11.6 4.3,4.3 4.3,20.7 16.7,13.4 16.6,20.7 20.7,20.7"/></g>
	                	</svg> 
	                </a>    
				</span>

            </div>
         </div>
      </li>
   </ul>
</div>