<?php
function fstree($dir){
	$files_pathes = '';
	if ($dh = opendir($dir)){
		while (($file = readdir($dh)) !== false){
			if ($file=='..' || $file=='.') continue; // Если папка, входим в рекурсию
			if (is_dir($dir."/".$file)){
			  fstree($dir."/".$file);
			}else{ // Если нет - рисуем файл
				//echo '| '.$dir.' | '.$file.' [size: '.filesize($dir.'/'.$file).' bytes] |',PHP_EOL;
				$files_pathes .= "\n".$dir.'/'.$file;
			}
		}
		closedir($dh);
	}
	return $files_pathes;
}
?>