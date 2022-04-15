

<?php
	function showInfo(){
		$t=time();
		echo "Your Ticket request was recived on " . date("m,d/Y,") . "at " . date($t);
		echo print_r($_GET);
		
	};
		showInfo();
?>


