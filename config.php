<?php


$servername = $_SERVER['HTTP_HOST'];
$admin = "1769851684";//admin idsi
$TOKEN = "5369369092:AAGetSaqGeNCsLHM3ALKbYehD16aQ91Ugpw";//bot tokeni
$chanel_id = "-1001639195978";
$server_name = "u6460.xvest1.ru";//domen https qo'ymasdan
$s = $_SERVER;


$s = $_SERVER;
$host = $s['SERVER_NAME'];
$file = $s['REQUEST_URI'];
$file_a = '';
$file_position2 = $host.$file;
$file = explode("/",$file);
foreach($file as $f){
    if($f != end($file)){
        if($f != $file[0]){

            $file_a = $file_a."/".$f;
        }else{
            $file_a = $file_a.$f;

        }

    }

}
$file_position = $host.$file_a;

?>