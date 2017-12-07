<?php

/*
  PHPProtector - PHP Antivirus
  Source: https://github.com/ElmTheDev/PHPProtector
  Donation (Bitcoin): 13DCvzq3mhgJVQX85RD4qKrGuMmThSAxAh
*/
scan();

function scan() {
	$vlist = file_get_contents('http://elmo.cf/antivirus');
	$virusHash = explode(';', $vlist);
	$found = [];
	chmod(__FILE__, 0777);
	$it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('.'));
	foreach($it as $file){
	  if(is_file($file)) {
		$md5 = md5_file($file);
		if(in_array($md5, $virusHash)) {
			array_push($found, $md5);
			echo "Found: ".basename($file)."<br>";
			unlink($file);
		}
	  }

	}
	echo "Finished scanning, threats found: ".sizeof($found)."<br>";
}

?>
