<?php
$dev = $_GET['number'];
$flag = "FLAG{YOU-SOLVED-YOUR-SECOND-CHALLENGE}"
if (isset($dev)) {
	if (is_numeric($dev)){
		if (!strpos($dev, ".")){
			if (strlen($dev) > 6){
				if ($dev < 99999 && $dev > 90000)
				echo 'Flag:  '.$flag.);
				else
				echo  'Oh Oh Think again';
			} else
				echo 'Wrong Move Champ';
		} else
		echo 'Not That hard . keep trying';	
	} else
		echo 'Just read the source code once again';
}
?>