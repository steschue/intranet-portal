<?php
/************ Global variables *************/

//$serverdir = "/Applications/XAMPP/xamppfiles/htdocs/mypage/intranetportal/";
$templetter=null;
$a=null;
//$StartDir = "../".ucfirst("$thisPage")."/";


/************ Arrays *************/

$graphics = array(											
		".pdf" => "../graphics/200px-pdf.png", 								
		".odf" => "../graphics/odf.png",
		".txt" => "../graphics/txt.jpg",
	);


/************ Functions *************/

function Group_Letter($file) {
	global $templetter;
	$file[0]=strtoupper($file[0]);
	if ($templetter[0] != $file[0]) {
		echo  "</div></ul><!--End of lettergroup '$templetter[0]'!-->";
	}
		if($letter = $file[0] and $file[0] != $templetter[0]){
			echo '<ul id="Content">';
			echo "<!--lettergroup $templetter[0]-->";
			echo'<div class="lettergroup"><i><h3>'.strtoupper($letter).'</h3></i>';
			$templetter[0]=strtoupper($letter);
		}
		else
			return $templetter[0];			
}


function Group_Directory($file) {
		echo '<ul id="Content">';
		echo "<!--lettergroup $file-->";
		echo'<div class="lettergroup"><hr><h3>'.strtoupper($file).'</h3>';
		echo '</div></ul><!--End of lettergroup-->';
}

function Build_Contentbox($path="",$filename) {
	Group_Letter($filename);
	$graphpath = Content_Icon($filename);
						echo "<li><a href='$path$filename' target='_blank'>";
						echo "<div style='background-image: url($graphpath)'><ul><li><strong>$filename</strong></li><li>wrzwro</li></ul></div>
			</a>
		</li>";
}


function Recursive_Dir($dir) {
		//1. Ordnername als Gruppenüberschrift anzeigen
		//2. Dateien aus Ordner auslesen
		//3. Dateien als Contentbox anzeigen (Alphabetbuchstaben anzeigen)
		//4. Subordner auslesen
		//5 Dateien aus Subordner auslesen (Schleife)
			
		if(is_dir($dir)) {
			Group_Directory($dir);							//1.
			if($dh = opendir($dir)){							//2.
				while($file = readdir($dh)){
					if($file != '.' && $file != '..'){
						if(is_file($dir . $file)){
							Build_Contentbox($dir,$file);		//3.
						}
					}
				}
			}
				if($dh = opendir($dir)){						//4.
					while($file = readdir($dh)){				//5.
						if($file != '.' && $file != '..'){
							if(is_dir($dir . $file)){
							Recursive_Dir($dir . $file . '/');
							}
						}
			 		}
				}
		 		closedir($dh);
		     	}		
		}


	function Content_Icon($filenme) {
		global $graphics;
		foreach($graphics as $suffix => $graphicpath)	{			//Include graphics
			$regex = "/$suffix/";
			if (preg_match($regex,$filenme)) {
				return $graphicpath;
	}
}
}

 
/************ Executive PHP-script *************/

echo '<div class = "ContentBox"><!--Start of ContentBox-->';
echo '<div> <!--Start of Content-->';
echo '<ul id="Content">';
echo'<div class="lettergroup">';
foreach($titlepath as $title => $dirpath) {
echo "<h1><br>$title</h1>";	
Recursive_Dir("$dirpath");
}
echo "</ul>";
echo "</div> <!--End of Content-->";
echo "</div> <!--End of ContentBox-->";
					
?>