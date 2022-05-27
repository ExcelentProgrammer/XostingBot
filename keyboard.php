<?php
//dasturchi @Azamov_Samandar kanalimiz @mycoders1 ko'dni tarqatmoqchi bo'lsang manba bilan ol 


$paynet = json_encode([
    'inline_keyboard' => [
        [['text' => 'Telegram yordam', 'url' => 'https://t.me/Azamov_Samandar']]
    ]
]);
$file_settings = json_encode([
    'inline_keyboard'=>[
        [["text"=>"❌ O'chirish",'callback_data'=>"file_delete"]],
        [["text"=>"♻️ Webhook",'callback_data'=>"file_webhook"]],
        [["text"=>"👀 Ko'rish",'callback_data'=>"file_web_view"]],
        [["text"=>"⬇️ Yuklab olish",'callback_data'=>"file_download"]],
        [['text'=>"🔙Ortga","callback_data" =>"ortga"]]
    ]
    ]);

$folder_settings = json_encode([
    'inline_keyboard'=>[
        [["text"=>"❌ O'chirish",'callback_data'=>"file_delete"]],
        [['text'=>"🔙Ortga","callback_data" =>"ortga"]]
    ]
    ]);
$menu_markup = json_encode([
    'resize_keyboard'=>true,
    'keyboard' => [
        [['text'=>'🖥 Hosting']],
        [['text' => '📱Kabinet'], ['text' => '📊 Statistika']],
        [['text'=>'🎥 video darslar'],['text' => '💸 PUL ISHLASH 💸']],
        
        
]]);
$file_delete = json_encode([
    'inline_keyboard'=>[
        [['text'=>"✅ Ha",'callback_data'=>"file_delete_yes"]],
        [['text'=>"❌ Yo'q",'callback_data'=>"all_stols"]],
    ]
    ]);

//hosting
$stol = json_encode([
"keyboard"=>[
[['text'=>"Yangi stol yaratish"]]]

]);


//dasturchi @Azamov_Samandar kanalimiz @mycoders1 ko'dni tarqatmoqchi bo'lsang manba bilan ol 



$remove_keyboard = json_encode([
    'remove_keyboard'=>true,
]);
$stol_name = json_encode([
    'resize_keyboard'=>true,
    'keyboard'=>[
        [['text'=>"🔙Ortga qaytish"]]
    ]
    ]);




$video_darslar = json_encode([
    'keyboard'=>[
        [['text'=>'Python'],['text'=>'php']],
        [['text'=>"JavaScript"]],
        [["text"=>"🔙Ortga qaytish"]],

    ],
    'resize_keyboard'=>true,
]);







$uzcoin_add = json_encode([
    'resize_keyboard' => true,
    'keyboard' => [
        [['text' => '👥 Takliflar'], ['text' => '💰 Xarid qilish']],
        [['text' => '🔙Ortga qaytish']]
    ]
]);
//dasturchi @Azamov_Samandar kanalimiz @mycoders1 ko'dni tarqatmoqchi bo'lsang manba bilan ol 
