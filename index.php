<?php

function timeGreet($hour = -1) {
    switch(true){
    	case $hour < 0:
    		$greet = "Good Day!";
    		break;
    	case $hour < 6:
    		$greet = "Wow its early/late";
    		break;
    	case $hour < 12:
    		$greet = "Good Morning!";
    		break;
    	case $hour < 17:
    		$greet = "Good Afternoon!";
    		break;
    	case $hour < 24:
    		$greet = "Good Night!";
    		break;
    }

    return $greet;

}

$currHour = date(G);

$greeting = timeGreet($currHour);

echo "<p>$greeting</p>";
?>