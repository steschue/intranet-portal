<?php
/************ Objects *************/
class Folder {
	public $dir;												//Characters of folder
	public $name;
	public $icon;
	public $exclude;
	public function __construct($dir="",$name="",$icon="",$exclude=".") {
		$this -> dir = $dir;
		$this -> name = $name;
		$this -> icon = $icon;
		$this -> exclude = $exclude;
		$this -> Set_Folder($dir,$name,$icon,$exclude);						//Methodes of folder
	}
	function Set_Folder($a,$b,$c) {
		a:
		$this -> dir = $a;
		echo "Aktueller Ordnerpfad:", $this -> dir;
		
		if(is_dir($this -> dir)) {
			if($dh = opendir($this -> dir)) {
				while($file = readdir($dh)) {
				//if ($file != '.' && $file != '..') {
					//if (substr($file, 0, 1) != '.') {
					if(is_dir($this -> dir . $file)){
						echo "<br>",$this -> dir . $file;
						$a = $this -> dir . $file . '/';
						return "aua";
					}
					else{
						echo "<br>",$this -> dir . $file,"<br>";
					}
				}
				     }
				}
				closedir($dh);
				return "";
			}
		}
		
		
		
		/*$folder = scandir($this -> dir);
		foreach($folder as $foldername) {
			if (substr($foldername, 0, 1) != '.')
			if (is_dir($foldername)) {
				Group_Letter($foldername);
				echo "<br>Unterordnername: $foldername<br>", $this -> name;
				?>
				<li>
					<a href='<?php echo "",$this -> dir; ?><?php echo "$foldername"; ?>' target="_blank">
						<div style="background-image: url('<?php echo "$graph" ?>')"><ul><li><strong><?php echo "$foldername"; ?></strong></li><li>wrzwro</li></ul></div>
					</a>
				</li>
				<?php
			}
		}
	}
}*/

 
class File {													//Characters of file
	public $dir;
	public $filename;
	public $metadata;
	public $viewstatistic;
	public $icon;
}
 