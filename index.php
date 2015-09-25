<?php

function timeGreet($hour = -1) {
    switch($hour){
    	case < 0:
    		$greet = "Good Day!";
    		break;
    	case < 6:
    		$greet = "Wow its early/late";
    		break;
    	case < 12:
    		$greet = "Good Morning!";
    		break;
    	case < 17:
    		$greet = "Good Afternoon!";
    		break;
    	case < 24:
    		$greet = "Good Night!";
    		break;
    }

    echo "<p>$greet</p>";

}

$currHour = date(G);

timeGreet($currHour);

?>