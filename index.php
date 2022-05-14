<?php

include_once "config.php";
include_once "message.php";

$data = json_decode(file_get_contents('php://input'));

switch ($data->type) 
{  
	case 'confirmation': 
		echo $groupCbResponse; 
	break;  
		
	case 'message_new': 
        echo getDataMsg($data->object->message->text, $data->object->message->from_id);
	break;
}
?>