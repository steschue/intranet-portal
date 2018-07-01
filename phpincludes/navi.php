<?php
$navi = array(											//Hier werden die Listenelemente eingetragen(geplant per cms!)
	"Home" => "./", 								//"Home" ist im Skript implementiert!
	"Libary" => "Libary/",
	"Multimedia" => "Multimedia/",
	"Lifestyle" => "Lifestyle/",
);
echo "<!--Start of navigationbar--><div>";
echo "<nav>";
echo "<ul>";
	foreach($navi as $eintrag => $verzeichnis) {   //Mit sublistelemente dann ?
	//for ($a=1; $a <= count($navi); $a++)
	settype($a, "integer");
	$a++;
	echo "<li class='cat$a'>";

	if($eintrag == $thisPage && $thisPage == "home") echo "<strong><a href='$verzeichnis'>$eintrag</a></strong>";

	elseif ( $thisPage == "home") echo "<a href='$verzeichnis'>$eintrag</a>";

	elseif ($eintrag == $thisPage && $thisPage != "home") echo "<strong><a href='../$verzeichnis'>$eintrag</a></strong>";

	elseif($thisPage != "home") echo "<a href='../$verzeichnis'>$eintrag</a>";
}
  
echo "</li></ul></div><!--End of navigationbar-->";
?>