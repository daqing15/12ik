<?php 

switch($ts){
	
	case "":
		
		$thevalue = $db->fetch_all_assoc("select * from ".dbprefix."robots");
		
		include template('admin/list');
		break;
	
}