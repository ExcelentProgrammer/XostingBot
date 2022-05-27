<?php
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$text = $message->text;
$id = $message->chat->id;
$cid = $update->callback_query->message->chat->id;
$cdata = $update->callback_query->data;
$ism = $message->from->first_name;
//dasturchi @Azamov_Samandar kanalimiz @mycoders1 ko'dni tarqatmoqchi bo'lsang manba bilan ol 

$username = $message->from->username;
$data = $update->callback_query->data;
$name = $message->from->first_name;
$new_file = $message->document;
$query = $update->callback_query;
$cusername = $query->message->chat->username;
$cname = $query->message->chat->first_name;
$message_id = $update->callback_query->message->message_id;
$message_id2 = $update->message->message_id;
$cid2 = $query->from->id;
$ism2 = $query->from->first_name;
if($message){
    $type = $message->chat->type;
}elseif($query){
    $type = $query ->message->chat->type;
}


?>