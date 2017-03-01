<?php 
	function create_message($msg){
		return base64_encode($msg);
	}

	function display_message($msg){
		return base64_decode($msg);
	}
 ?>