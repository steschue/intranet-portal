<?php
 $serverdir = "/Applications/XAMPP/xamppfiles/htdocs/mypage/intranetportal";	//Serverdirectory

include("$serverdir/phpincludes/server.php"); 							//Databaseaccess


																//Create table if necessary
$query = "CREATE TABLE dokumente(
id INT UNSIGNED AUTO_INCREMENT,
PRIMARY KEY(id),
dateiname TEXT,
dateipfad TEXT
)";
if ($sql->query($query)) echo "Tabelle angelegt.";
else echo "Fehler: ",$sql->error;
//$sql->close();

																				
																
																//Load content
	 
	 echo      '<div class = "ContentBox"><!--Start of ContentBox-->';
	 
			echo "<div> <!--Start of Content-->";
			
																//Set dirs
			
			echo "$thisPage:";
			//echo '<ul id="Content">';
			$exclude = array( ".","$thisPage.php" );
			if ($thisPage == "home") {
				$dir = "./Home/";
			}
			elseif ($thisPage == "libary") {
					$dir = "../Libary/";
				}
			elseif ($thisPage == "lifestyle") {
					$dir = "../Lifestyle/*";
				}
			elseif ($thisPage == "multimedia") {
					$dir = "../Multimedia/";
					}
			else {
				$dir = "../";
			
																//Scandir
				
			}

			if($dir) {
				$files = scandir($dir);
				foreach ($files as $file) {							//Filenames and paths
							
					
																//Set graphics (depends on filetype)
					
				$graphic = array(											
						".pdf" => "../graphics/200px-pdf.png", 								
						".odf" => "../graphics/odf.png",
						".txt" => "../graphics/txt.jpg",
					);		
							
					foreach($graphic as $suffix => $graph)	{			//Include graphics
						$regex = "/$suffix/";
						if (preg_match($regex,$file)) {
					
																//Exclude hidden dir names
					
					if (!in_array($file,$exclude) and substr($file, 0, 1) != '.') {
						
																//Write contentinformation in Database
//$insert = "INSERT INTO dokumente(dateiname, dateipfad)
//	VALUES('$file','$dir')";
//$sql->query($insert);
//$sql->close();

																//Title																
															
$letter=null;
if ($file[0] != $a) {
	echo  "</div></ul><!--End of lettergroup $a!-->";
}
	if($letter = $file[0] and $file[0] != $a){
		$a=$file[0];
		echo '<ul id="Content">';
		echo "<!--lettergroup $a-->";
		echo'<div class="lettergroup"><hr><h3>'.strtoupper($letter).'</h3>';
	}
	else {
		//echo  "</ul></div><!--End of lettergroup $a!-->";
}
}														//Build contentbox
						
					?> 
					<li>
						<a href='<?php echo "$dir"; ?><?php echo "$file"; ?>' target="_blank">
			 <div style="background-image: url('<?php echo "$graph" ?>')"><ul><li><strong><?php echo "$file"; ?></strong></li><li>wrzwro</li></ul></div>
		</a>
	</li>
<?php														
				}
				
			}
		}
	 }
		  echo "</div> <!--End of Content-->";
		    echo "</div> <!--End of ContentBox-->";
		    ?>