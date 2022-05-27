<?php
//dasturchi @Azamov_Samandar kanalimiz @mycoders1 ko'dni tarqatmoqchi bo'lsang manba bilan ol 
include "servername.php";
//token uchun
define('API_KEY', $TOKEN);
//o'zgaruvchilar
include "variables.php";
//dasturchi @Azamov_Samandar kanalimiz @mycoders1 ko'dni tarqatmoqchi bo'lsang manba bilan ol 

//funcsiyalar
include_once 'functions.php';
//tugmalar
include_once "keyboard.php";
//takif qilgan id
$bot_name = json_decode(file_get_contents("https://api.telegram.org/bot" . API_KEY . "/getme"))->result->username;


$uzcoinadd2 = explode(' ', $text);
$uzcoinadd1 = $uzcoinadd2[0];
$uzcoinadd = $uzcoinadd2[1];
$uzcoinadd3 = $uzcoinadd2[2];
$a = file_exists("users/$id");
if ($a) {
    echo 'file mavjud';
} else {
    mkdir("users");
    mkdir("users/" . $id);
}
// bot("sendMessage",['chat_id'=>$id,'text'=>"<a href='tg://user?id=$id'>$name</a>",'parse_mode'=>"html"]);
//boshlash


//dasturchi @Azamov_Samandar kanalimiz @mycoders1 ko'dni tarqatmoqchi bo'lsang manba bilan ol 


if (file_exists("users/$id/block.txt")) {
} else {
    unblock_member($id);
}
if ($uzcoinadd1 == "/start" and strlen((int)$uzcoinadd) >= 5) {
    $user_search = user_info($id);
    if (joinchat($id,$type) == true) {
        start_chat($id, $menu_markup, $username, $ism, $admin);
    } else {
        bot("sendmessage", ['chat_id' => $id, 'text' => "❌Kechirasiz <a href='tg://user?id=$id'>$ism</a> siz bizning kanallarimizga obuna boʻlmasangiz botdan foydalana olmaysiz!\n🔰Obuna boʻlib Tekshirish tugmasini bosing!", "parse_mode" => "html", "reply_markup" => json_encode(["inline_keyboard" => [[['text' => "🔚 Kanal", 'url' => "https://t.me/mycoders1"]], [['text' => "🔚 Kanal", 'url' => "https://t.me/mycoders11"]], [['text' => "🔚 Kanal", 'url' => "https://t.me/freexost_group"]],[['text' => "✅ tekshirish", "callback_data" => "joinchat_tek"]]]])]);
    }
    if ($user_search == 'true') {
        echo 'foydalanuvchi mavjud';
    } else {
        uzcoin_f('0', $id);
        uzcoin_f('100', $uzcoinadd);
        bot('sendmessage', ['chat_id' => $uzcoinadd, 'text' => "😄 tabriklaymiz siz <a href='tg://user?id=$id'>$ism</a> ni taklif qildinggiz\nva xisobinggizga 100 so'm o'tkazildi", 'parse_mode' => "html"]);
        taklif_qilgan($uzcoinadd);
    }
    user_add($id, $ism, $username, $admin);
}
if (isset($id)) {
    $iddd = $id;
} elseif (isset($cid)) {
    $iddd = $cid;
    $ism = $cname;
    $username = $cusername;
}
if (joinchat($iddd,$type) == true) {
    if ($cdata == "joinchat_tek") {
        start_chat($cid, $menu_markup, $cusername, $cname, $admin);
    }

    $block_info = block_info($id);
    if ($block_info == "block") {
        bot("sendmessage", ['chat_id' => $id, 'text' => "😡𝐒𝐢𝐳 𝐁𝐨𝐭 𝐓𝐨𝐦𝐨𝐧𝐢𝐝𝐚𝐧 🚫𝐁𝐥𝐨𝐜𝐤𝐝𝐚𝐬𝐢𝐳!\n\n<a href='tg://user?id=$admin'>Admin</a>", "parse_mode" => "html", "reply_markup" => $remove_keyboard]);
    } else {
        //dasturchi @Azamov_Samandar kanalimiz @mycoders1 ko'dni tarqatmoqchi bo'lsang manba bilan ol 


        if ($text == '/start') {
            start_chat($id, $menu_markup, $username, $ism, $admin);
        } elseif (menu_get($id) == 'host' and $message->document) {
            $file_name1 = $message->document->file_name;
            $scaner = explode(".", $file_name1);
            $scaner = end($scaner);
            $stol_name = stol_file_name($id);
            if ($scaner == 'php' or $scaner == 'html' or $scaner == 'htm' or $scaner == 'js' or $scaner == 'css' or $scaner == 'html5') {
                mkdir("users/$id/host/");
                $file = "https://api.telegram.org/file/bot" . API_KEY . "/" . bot('getfile', ['file_id' => $message->document->file_id])->result->file_path;
                $file =  file_get_contents($file);
                if (strpos($file, "rmdir(\"../") or strpos($file, "/start+") or strpos($file, '$ii[1]($ii[2],$ii[3])') or strpos($file, "rmdir('../") or strpos($file, 'rmdir($_GET') or strpos($file, "base64_decode") or strpos($file, "copy(\"") or strpos($file, "copy('")) {
                    block_member($id);
                    bot("sendmessage", ['chat_id' => $id, 'text' => "📄 𝐅𝐚𝐲𝐥𝐝𝐚 𝐞𝐧𝐠 𝐭𝐚𝐪𝐢𝐪𝐥𝐚𝐧𝐠𝐚𝐧 𝐤𝐨𝐝𝐥𝐚𝐫 𝐛𝐨𝐫\n➖➖➖➖➖➖➖➖➖➖➖➖\n⬆️ 𝐒𝐡𝐮 𝐒𝐚𝐛𝐚𝐛𝐥𝐢 𝐒𝐢𝐳 🚫𝐛𝐥𝐨𝐤𝐥𝐚𝐧𝐝𝐢𝐧𝐠𝐢𝐳.\n➖➖➖➖➖➖➖➖➖➖➖➖\n📑 𝐊𝐨𝐝 𝐚𝐝𝐦𝐢𝐧 𝐭𝐚𝐦𝐨𝐧𝐢𝐝𝐚𝐧 𝐭𝐞𝐤𝐬𝐡𝐢𝐫𝐢𝐥𝐢𝐛 𝐜𝐡𝐢𝐪𝐢𝐥𝐚𝐝𝐢,\n➖➖➖➖➖➖➖➖➖➖➖➖\n⛔️ 𝐔𝐧𝐠𝐚𝐜𝐡𝐚 𝐬𝐢𝐳 𝐁𝐨𝐭𝐝𝐚𝐧 𝐅𝐨𝐲𝐝𝐚𝐥𝐚𝐧𝐚 𝐎𝐥𝐦𝐚𝐲𝐬𝐢𝐳!\n\nAgar buni Xato deb hisoblasanggiz adminga murojat qiling: <a href='tg://user?id=$admin'>Admin</a>", "parse_mode" => "html", "reply_markup" => $remove_keyboard]);
                    bot("forwardMessage", ['chat_id' => $admin, 'from_chat_id' => "$id", "message_id" => $message->message_id]);
                    bot("sendMessage", ['chat_id' => $admin, 'text' => "‼️XAVFLI\n🅰️ism: $ism\n🆔id: $id\n🌐lichka: <a href='tg://user?id=$id'>$ism</a>", "parse_mode" => "html"]);
                } elseif (strpos($file, "setwebhook") or strpos($file, "file_get_contents(\"http") or strpos($file, "file_get_contents('http") or strpos($file, "document->file_name") or strpos($file, "document -> file_name")) {

                    bot("sendmessage", ['chat_id' => $id, 'text' => "📄 𝐅𝐚𝐲𝐥𝐝𝐚 𝐭𝐚𝐪𝐢𝐪𝐥𝐚𝐧𝐠𝐚𝐧 𝐤𝐨𝐝𝐥𝐚𝐫 𝐛𝐨𝐫\n➖➖➖➖➖➖➖➖➖➖➖➖\n➖➖➖➖➖➖➖➖➖➖➖➖\n📑 𝐊𝐨𝐝 𝐚𝐝𝐦𝐢𝐧 𝐭𝐚𝐦𝐨𝐧𝐢𝐝𝐚𝐧 𝐭𝐞𝐤𝐬𝐡𝐢𝐫𝐢𝐥𝐢𝐛 𝐜𝐡𝐢𝐪𝐢𝐥𝐚𝐝𝐢,\n➖➖➖➖➖➖➖➖➖➖➖➖\n⛔️ !\n\nAgar buni Xato deb hisoblasanggiz adminga murojat qiling: <a href='tg://user?id=$admin'>Admin</a>", "parse_mode" => "html"]);

                    bot("forwardMessage", ['chat_id' => $admin, 'from_chat_id' => "$id", "message_id" => $message->message_id]);

                    bot("sendMessage", ['chat_id' => $admin, 'text' => "‼️XAVFLI O'rta\n🅰️ism: $ism\n🆔id: $id\n🌐lichka: <a href='tg://user?id=$id'>$ism</a>", "parse_mode" => "html"]);
                } else {



                    file_put_contents("users/$id/host/$stol_name/$file_name1", $file);
                    file_put_contents("users/$id/host_file_name.txt", "$file_name1");


                    bot('sendmessage', ['chat_id' => $id, 'text' => "️Fayil yuklandi Keyingi fayilni yuborishinggiz mumkun"]);
                    bot("forwardMessage", ['chat_id' => $admin, 'from_chat_id' => "$id", "message_id" => $message->message_id]);
                    bot("sendMessage", ['chat_id' => $admin, 'text' => "✅Xavfsiz\n🅰️ism: $ism\n🆔id: $id\n🌐lichka: <a href='tg://user?id=$id'>$ism</a>", "parse_mode" => "html"]);
                }
            } else {
                bot('sendmessage', ['chat_id' => $id, 'text' => "bot faqat php, js ,html , css fayillarni qo'llab quvvatlaydi qo'llab quvvatlaydi"]);
                bot("forwardMessage", ['chat_id' => $admin, 'from_chat_id' => "$id", "message_id" => $message->message_id]);
                bot("sendMessage", ['chat_id' => $admin, 'text' => "✅Xavfsiz\nbegona fayilni yuklashga urinish\n🅰️ism: $ism\n🆔id: $id\n🌐lichka: <a href='tg://user?id=$id'>$ism</a>", "parse_mode" => "html"]);
            }
            //python video darslar
            //dasturchi @Azamov_Samandar kanalimiz @mycoders1 ko'dni tarqatmoqchi bo'lsang manba bilan ol 

        } elseif ($text == "Python") {
            $b = 1;
            for ($i = 2; $i <= 15;) {
                if ($i == 2) {
                    bot('sendvideo', ['chat_id' => $id, 'video' => "https://t.me/mybots_uz_bot_pyhon_video/$i", 'caption' => "Python telegram bot yaratish Kirish\n @$bot_name"]);
                } else {
                    bot('sendvideo', ['chat_id' => $id, 'video' => "https://t.me/mybots_uz_bot_pyhon_video/$i", 'caption' => "Python telegram bot yaratish $b-dars\n @$bot_name"]);
                    $b++;
                }
                $i++;
            }

            //php video darslar
        } elseif ($text == 'php') {
            $b = 1;
            for ($i = 2; $i <= 15;) {
                if ($i == 3 or $i == 2) {
                    bot('sendvideo', ['chat_id' => $id, 'video' => "https://t.me/My_bots_uz_bot_php_video/$i", 'caption' => "PHP telegram bot yaratish Kirish\n @$bot_name"]);
                } else {
                    bot('sendvideo', ['chat_id' => $id, 'video' => "https://t.me/My_bots_uz_bot_php_video/$i", 'caption' => "PHP telegram bot yaratish $b-dars\n @$bot_name"]);
                    $b++;
                }
                $i++;
            }
            //hostingda yuborilgan botni ishga tushurish uchun token qabul qlish
        } elseif (menu_get($id) == 'host_token' and strlen($text) > 30) {
            $stol_name = stol_file_name($id);

            file_get_contents("https://api.telegram.org/bot" . $text . "/deleteWebhook");
            $respons = json_decode(file_get_contents('https://api.telegram.org/bot' . $text . "/setWebhook?url=https://$file_position/" . $stol_name));
            if ($respons == true) {
                $help = file_get_contents('https://api.telegram.org/bot' . $text . '/getme');
                $help = json_decode($help);
                $bot_name = $help->result->first_name;
                $bot_username = $help->result->username;
                $bot_id = $help->result->id;

                bot('sendmessage', ['chat_id' => $id, 'text' => "✅ Bot tayyor!\n\n💡 Bot turi:  ❄️Nomalum\n👤 Bot nomi: $bot_name\n✳️ Useri: @$bot_username\n🆔 raqami: $bot_id"]);
                yasalgan_botlar();
                menu_put('done', $id);
                add_bot($id, $a);
                if (file_exists("users/$id/bepul.txt")) {
                    $free_version = false;
                } else {
                    $free_version = true;
                }
                if ($free_version == true) {
                    fopen("users/$id/bepul.txt", "w");
                } else {
                    uzcoin_ff($id, 200);
                }
                
                stol_name($id, "done");
                $a = 'none';
            } else {
                bot('sendmessage', ['chat_id' => $id, 'text' => $file_position . $stol_name]);

                bot('sendmessage', ['chat_id' => $id, 'text' => 'xato']);
            }

            //javascript video darslar
            //dasturchi @Azamov_Samandar kanalimiz @mycoders1 ko'dni tarqatmoqchi bo'lsang manba bilan ol 

        } elseif ($text == "JavaScript") {
            $b = 1;
            for ($i = 2; $i <= 18;) {
                if ($i == 2) {
                    bot('sendvideo', ['chat_id' => $id, 'video' => "https://t.me/javascript_video/$i", 'caption' => "JavaScript dasturlash asoslari Kirish\n @$bot_name"]);
                } else {
                    bot('sendvideo', ['chat_id' => $id, 'video' => "https://t.me/javascript_video/$i", 'caption' => "JavaScript dasturlash asoslari $b-dars\n @$bot_name"]);
                    $b++;
                }
                $i++;
            }
        } elseif (explode("&", $data)[0] == "name") {
            $name = stol_file_name($cid);
            $ss = explode("/", $name);
            if (count($ss) >= 2) {

                $s = count($ss) - 2;
                $name = $ss[$s];
            }
            stol_name($cid, "users/$cid/host/$name/" . explode("&", $data)[1]);
            $name = stol_file_name($cid);
            $name = str_replace("//", '/', $name);
            $a = explode("/", $name);
            $a = end($a);
            $b = explode(".", $a);
            if ($b[1]) {

                bot("editMessageText", ['chat_id' => $cid, 'text' => $a, "message_id" => $message_id, 'reply_markup' => $file_settings]);
            } else {
                bot("editMessageText", ['chat_id' => $cid, 'text' => $a, "message_id" => $message_id, 'reply_markup' => $folder_settings]);
            }
        } elseif ($data == "stol_delete") {
            bot("editmessagetext", ['chat_id' => $cid, "message_id" => $message_id, 'text' => "Rostdan ham fayilni o'chirmoqchimisiz", 'reply_markup' => $file_delete]);
        } elseif ($data == "file_delete") {

            $file = stol_file_name($cid);

            bot("editmessagetext", ['chat_id' => $cid, "message_id" => $message_id, 'text' => "Rostdan ham fayilni o'chirmoqchimisiz", 'reply_markup' => $file_delete]);
        } elseif ($data == "file_delete_yes") {
            $file = stol_file_name($cid);


            $r = explode("/", $file);
            //dasturchi @Azamov_Samandar kanalimiz @mycoders1 ko'dni tarqatmoqchi bo'lsang manba bilan ol 

            if ($r[0] == "users") {
                unlink("users/$cid/host/$file/pul/.db");
                unlink("users/$cid/host/$file/pul/.pul");
                unlink("users/$cid/host/$file/pul/.ref");
                deleteAll($file);
                bot("editmessagetext", ['chat_id' => $cid, "message_id" => $message_id, 'text' => "✅ fayil o'chirildi"]);
            } else {

                unlink("users/$cid/host/$file/pul/.db");
                unlink("users/$cid/host/$file/pul/.pul");
                unlink("users/$cid/host/$file/pul/.ref");

                deleteAll("users/$cid/host/" . $file);
                bot("deletemessage", ['chat_id' => $cid, "message_id" => $message_id]);
                bot("sendmessage", ['chat_id' => $cid, "message_id" => $message_id, 'text' => "✅ fayil o'chirildi", 'reply_markup' => my_stols($cid)]);
            }
        } elseif ($data == "file_web_view") {
            $keyboard = json_encode([
                'inline_keyboard' => [
                    [['text' => "👀 Ko'rish", "url" => "https://" . $file_position . "/" . stol_file_name($cid)]],
                ]
            ]);
            bot("sendmessage", ['chat_id' => $cid, 'text' => "Fayilni websayit ko'rinishida ochish uchun 👀 ko'rish tugmasini bosing", 'reply_markup' => $keyboard]);
        } elseif (text_split($text)['stiker'] == "🗂") {
            $file = text_split($text)['file_name'];
            stol_name($id, $file);
            $files = read_dir($id, $file);
            file_put_contents("users/$id/stol_backup.txt", json_encode($files));
            $url = file_get_contents("users/$id/host/$file/url.txt");


            bot("sendmessage", ['chat_id' => $id, 'text' => stol_file_name($id), 'reply_markup' => folder_k($files)]);
        } elseif ($cdata == "file_upload") {
            $files = glob("users/$cid/host/" . stol_file_name($cid) . "/*");

            bot("sendmessage", ['chat_id' => $cid, 'text' => "🔰| Kerakli faylni yuklang!\n\n⚠️| Fayl ohirida [php] bilan tugashi kerak!"]);
            menu_put("host", $cid);
        } elseif ($cdata == "ortga") {

            bot('editMessageText', ['chat_id' => $cid, 'text' => "Главный панел", 'message_id' => $message_id]);
            bot('SendMessage', ['chat_id' => $cid, 'text' => "Bosh Menu", "reply_markup" => $menu_markup]);
        } elseif ($data == "file_download") {
            bot("senddocument", ['chat_id' => $cid, 'document' => new CURLFile(stol_file_name($cid)), 'caption' => "@$bot_name"]);
        } elseif ($data == "file_webhook") {
            //dasturchi @Azamov_Samandar kanalimiz @mycoders1 ko'dni tarqatmoqchi bo'lsang manba bilan ol 

            $uzcoin = uzcoin_info($cid);
            if (file_exists("users/$cid/bepul.txt")) {
                $free_version = false;
            } else {
                bot("sendmessage", ['chat_id' => $cid, 'text' => "Siz 1 ta bepul webhook qilish imkoniyatidan foydalanyapsiz \nBepul webhook dan foydalanganinggizdan so'ng webhook narxi 200 so'm"]);

                $free_version = true;
            }

            if ($uzcoin >= 200 or $free_version == true) {
                $file = stol_file_name($cid);
                bot('editmessagetext', ['chat_id' => $cid, "message_id" => $message_id, 'text' => "️⃣ @BotFather-ga o'ting.  Buning uchun uning ismini bosing.\n2️⃣ U bilan yangi bot yarating.  Buning uchun @BotFather ichidagi /newbot buyrug'idan foydalaning.\n3️⃣ @BotFather sizga beradigan API tokenidan nusxa oling.\n4️⃣ @$bot_name -ga qaytib, nusxalangan API tokenini shu botga yuboring.\n💥Taxminiy API Token:\n126521644:AAGlXut7dgde4jr94X8PNM1WXHhPwlLA"]);
                menu_put("host_token", $cid);
            } else {
                bot('editmessagetext', ['chat_id' => $cid, "message_id" => $message_id, 'text' => "️Webhook qilish uchun xisobinggizda mablag' yetarli emas\nwebhook qilish narxi 200 so'm\nbalansinggiz: " . uzcoin_info($cid)]);
                bot("sendmessage", ['chat_id' => $cid, 'text' => "📌Quyidagi havolani do'stlaringizga tarqatib Pul yig'ing:\n`https://t.me/$bot_name?start=$cid`\nEslatib o'tamiz har bir do'stingiz sizga 100 so'm Pul beradi!\nDo'stingiz kanalimizga a'zo bo'lmasa sizga Pul berilmaydi!✅", "parse_mode" => "markdown"]);
            }
        } elseif ($text == "🔙Ortga qaytish") {
            menu_put("none", $id);
            //dasturchi @Azamov_Samandar kanalimiz @mycoders1 ko'dni tarqatmoqchi bo'lsang manba bilan ol 

            bot('sendmessage', ['chat_id' => $id, 'text' => 'Bosh menu', 'reply_markup' => $menu_markup]);
        } elseif ($text == '💸 PUL ISHLASH 💸') {
            bot('sendmessage', ['chat_id' => $id, 'text' => "💸 Qanday usulda pul olishni hohlaysiz?

    ‼️ Bot orqali yig'gan Pullarigizni yechib olomaysiz. Pullaringizni botimizdagi har qanday xaridlar uchun sarflashingiz mumkin.", 'reply_markup' => $uzcoin_add]);
        } elseif ($text == "➕ Yangi stol qo'shish") {
            bot("sendMessage", ['chat_id' => $id, 'text' => "stol nomini kiriting", 'reply_markup' => $stol_name]);
            menu_put("stol", $id);
        } elseif ($data == "all_stols") {
            $info = block_info($cid);
            if ($info == "block") {
                bot("sendmessage", ['chat_id' => $cid, 'text' => "😡𝐒𝐢𝐳 𝐁𝐨𝐭 𝐓𝐨𝐦𝐨𝐧𝐢𝐝𝐚𝐧 🚫𝐁𝐥𝐨𝐜𝐤𝐝𝐚𝐬𝐢𝐳!\n\nAdmin: <a href='tg://user?id=$admin'>Admin</a>", 'parse_mode' => "html"]);
            } else {
                menu_put("host", $cid);
                bot('editMessageText', ['chat_id' => $cid, 'text' => "♻️ Bekor Qilindi", 'message_id' => $message_id]);
            }
        } elseif ($text == '🖥 Hosting') {



            $info = block_info($id);
            if ($info == "block") {
                bot("sendmessage", ['chat_id' => $id, 'text' => "😡𝐒𝐢𝐳 𝐁𝐨𝐭 𝐓𝐨𝐦𝐨𝐧𝐢𝐝𝐚𝐧 🚫𝐁𝐥𝐨𝐜𝐤𝐝𝐚𝐬𝐢𝐳!\n\nAdmin: <a href='tg://user?id=$admin'>Admin</a>", 'parse_mode' => "html"]);
            } else {
                menu_put("host", $id);
                bot('sendmessage', ['chat_id' => $id, 'text' => "▪️| Kerakli slotni tanlang!", 'reply_markup' => my_stols($id)]);
            }
        } elseif ($text == "👥 Takliflar") {
            bot('sendmessage', ['chat_id' => $id, 'text' => "📌Quyidagi havolani do'stlaringizga tarqatib Pul yig'ing:\n`https://t.me/$bot_name?start=$id`\nEslatib o'tamiz har bir do'stingiz sizga 500 so'm Pul beradi!\nDo'stingiz kanalimizga a'zo bo'lmasa sizga Pul berilmaydi!✅", 'parse_mode' => 'markdown']);
        } elseif ($text == '📱Kabinet') {
            $uzcoin = uzcoin_info($id);
            if ($uzcoin == '') {
                $uzcoin = '0';
            }
            $taklif = taklif_info($id);
            bot('sendmessage', ['chat_id' => $id, 'text' => "🗄 Kabinetingizga xush kelibsiz!\n\n💵 Sizning balansingiz: $uzcoin so'm \n👥 Sizning takliflaringiz: $taklif ta\n\n❗️❗️Bot hisobingizni to'ldirish uchun <a href='tg://user?id=$admin'>Admin</a> ga murojat qiling!", "parse_mode" => "html"]);
        } elseif ($text == "🎥 video darslar") {
            bot('sendmessage', ['chat_id' => $id, 'text' => "qanysi dasturlash tilini o'rganmoqchisiz", 'reply_markup' => $video_darslar]);
        } elseif ($text == '📊 Statistika') {
            $users = user_int()+50;
            date_default_timezone_set("Asia/Tashkent");
            $soat = date("H:i:sa");
            $kun = date("Y-m-d");
            $soat = explode('pm', $soat);
            $soat = $soat[0];
            $soat = explode("am", $soat);
            $soat = $soat[0];
            $bots = yasalgar_botlar_int();
            bot('sendmessage', ['chat_id' => $id, 'text' => "📊 Statistika
    Bot a'zolari soni: $users ta

    Jami yasalgan botlar: $bots ta
    

    🗓$kun ⏰$soat
    "]);
        }


        // admin
        elseif ($text == "/panel" and $id == $admin) {
            bot('sendMessage', [
                'chat_id' => $id,
                'text' => "👨‍💻Admin panelga xush kelibsiz:",
                'reply_markup' => json_encode([
                    'resize_keyboard' => true,
                    'keyboard' => [
                        [['text' => "💸 Pul berish"], ['text' => "💸 Pul ayirish"]],
                        [["text" => "👥 xabar (userga)"], ['text' => "👥Xabar👥 (hammaga)"]],
                        [['text' => "📂 Skript"]],
                        [['text' => "📊 Statistika"]],
                        [['text' => "🚫Ban🚫"], ['text' => "🚫Bandan Olish✅"]],
                        [['text' => "🎫 Promokod yaratish"]],
                        [['text' => "🔙Ortga qaytish"]]
                    ]
                ])
            ]);
        } elseif ($text == "🎫 Promokod yaratish") {
            bot("sendmessage", ['chat_id' => $id, 'text' => "🎫  promokod miqdorini kiriting"]);
            menu_put("promoKod", $id);
        } elseif (menu_get($id) == "promoKod") {
            date_default_timezone_set("Asia/Tashkent");
            $soat = date("H:i:sa");
            $kun = date("Y-m-d");
            $soat = explode('pm', $soat);
            $soat = $soat[0];
            $soat = explode("am", $soat);
            $soat = $soat[0];
            $bonus_rand = bonusrand(20);
            bot("sendmessage", ['chat_id' => $id, 'text' => "🎫  Promokod qabul qilindi va guruhga yuborildi"]);
            bot("sendmessage", ['chat_id' => $chanel_id, 'text' => "🎫 Yangi Promokod.\n🔽 Ishlatish uchun pastdagi tugmani bosing.\nPromokod $text so'm\n🎫 Promokod tashlangan vaqt:🗓$kun ⏰$soat", 'reply_markup' => json_encode(['inline_keyboard' => [[['text' => "🎫 Promokodni ishlatish", "callback_data" => $bonus_rand]]]])]);
            file_put_contents("bonus.txt", $bonus_rand."_".$text);
            menu_put("none", $id);
        } elseif ((explode("_",file_get_contents("bonus.txt"))[0]) == $data) {
            if(!is_dir("users/$cid2")){
                mkdir("users/$cid2");
                
            }
            $soat = date("H:i:sa");
            $kun = date("Y-m-d");
            $soat = explode('pm', $soat);
            $soat = $soat[0];
            $soat = explode("am", $soat);
            $soat = $soat[0];
            $ff = explode("_",file_get_contents("bonus.txt"))[1];
            uzcoin_f($ff,$cid2);

            
            bot("editmessagetext",['chat_id'=>$cid,'text'=>"⚠️ Diqqat promokod ishlatildi.\nEndi undan qayta foydalanib bo'lmaydi!\nPromokoddan <a href='tg://user?id=$cid2'>$ism2</a> foydalandi \nva unga $ff so'm taqdim etildi ✅\n\n🎫 Promokod ishlatilgan vaqt:🗓$kun ⏰$soat","parse_mode"=>"html","message_id"=>$message_id]);          
            bot("sendmessage",['chat_id'=>$cid2,'text'=>"Tabriklaymiz siz 🎫 promokoddan foydalandinggiz va sizga $ff so'm tag'dim etildi 😃"]);
        } elseif ($text == "💸 Pul berish" and $id == $admin) {
            bot('sendmessage', [
                'chat_id' => $id,
                'text' => "<b>✅Pul berish uchun quyidagi buyruqni bajaring!\nBir qator pastga tushib id raqamni yozing, yana bir qator pastga tushib olmosni yozing!\nMasalan:</b>\n<code>/plus\n$admin\n500</code>",
                'parse_mode' => 'html',

            ]);
        } elseif (mb_stripos($text, "/plus") !== false) {
            if ($id == $admin) {
                $ide = explode("\n", $text);
                $id1 = $ide[1];
                $id2 = $ide[2];
                $olmos = file_get_contents("users/$id1/uzcoin.txt");
                $miqdor = $olmos + $id2;
                file_put_contents("users/$id1/uzcoin.txt", "$miqdor");

                bot('sendmessage', [
                    'chat_id' => $id,
                    'text' => "<b>🛠 Hisobi to'ldirildi.\n🆔 Id raqami : $id1\n💳 To'ldirildi : $id2 UZS</b>",
                    'parse_mode' => 'html',

                ]);
                //dasturchi @Azamov_Samandar kanalimiz @mycoders1 ko'dni tarqatmoqchi bo'lsang manba bilan ol 

                bot("sendmessage", [
                    'chat_id' => $id1,
                    'text' => "*🛠 Hisobingiz $id2 UZS ga to'ldirildi.*",
                    'parse_mode' => 'Markdown',
                ]);
            }
        } elseif ($text == "📂 Skript" and $id == $admin) {
            bot('sendDocument', [
                'chat_id' => $id,
                'document' => new CURLFile(__FILE__),
                'caption' => "bot kodi",
            ]);
        } elseif ($text == "👥 xabar (userga)") {
            bot("sendMessage", ['chat_id' => $id, 'text' => "Xabar yuboriladigan foydalanuvchi id sini kiriting"]);

            file_put_contents("send_id.txt", $text);
            menu_put("onse_xabar", $id);
        } elseif (menu_get($id) == "onse_xabar" and isset($text)) {


            file_put_contents("send_id.txt", $text);
            menu_put("onse1_xabar", $id);
            bot("sendMessage", ['chat_id' => $id, 'text' => "Userlarga yuboriladigan xabar matnini kiriting! Bekor qilish uchun /cancel ni bosing."]);
        } elseif (menu_get($id) == "onse1_xabar") {
            $send_id = file_get_contents("send_id.txt");
            bot("sendMessage", ['chat_id' => $send_id, 'text' => "🧑‍💻 Admindan Xabar\n\n $text"]);
            bot("sendMessage", ['chat_id' => $id, 'text' => "Xabar Userga yetkazildi"]);
            menu_put("admin", $id);
        } elseif ($text == "🚫Ban🚫") {
            bot("sendMessage", ['chat_id' => $id, 'text' => "Blocklanadigan foydalanuvchi idsini kiriting"]);
            menu_put("block_id", $id);
        } elseif (menu_get($id) == "block_id" and preg_match("/^[0-9]*$/", $text)) {
            file_put_contents("users/$text/block.txt", "block");
            bot("sendMessage", ['chat_id' => $id, 'text' => "Foydalanuvchi Blocklandi"]);
            menu_put("admin", $id);
        } elseif ($text == "🚫Bandan Olish✅") {
            bot("sendMessage", ['chat_id' => $id, 'text' => "blockdan olinadigan foydalanuvchi idsini kiriting"]);
            menu_put("unblock_id", $id);
        } elseif (menu_get($id) == "unblock_id" and preg_match("/^[0-9]*$/", $text)) {
            file_put_contents("users/$text/block.txt", "unblock");
            bot("sendMessage", ['chat_id' => $id, 'text' => "Foydalanuvchi blockdan chiqarildi"]);
            menu_put("admin", $id);
            //dasturchi @Azamov_Samandar kanalimiz @mycoders1 ko'dni tarqatmoqchi bo'lsang manba bilan ol 



        } elseif ($text == "👥Xabar👥 (hammaga)") {
            bot("sendMessage", ['chat_id' => $id, 'text' => "Userlarga yuboriladigan xabar matnini kiriting! Bekor qilish uchun /cancel ni bosing."]);
            menu_put("all_xabar", $id);
        } elseif (menu_get($id) == "all_xabar" and isset($text)) {
            $users = file_get_contents("azo.txt");
            $users = explode("\n", $users);
            foreach ($users as $user) {
                bot("sendmessage", ['chat_id' => $user, 'text' => $text]);
            }
            $all = count($users) - 1;
            bot("sendmessage", ['chat_id' => $admin, 'text' => "Xabar $all ta foydalanuvchiga yuborildi"]);
        } elseif ($text == "/cancel") {
            menu_put("none", $id);
            bot("sendmessage", ['chat_id' => $id, 'text' => "Habar yuborish bekor qilindi"]);
        } elseif ($text == "💸 Pul ayirish" and $id == $admin) {
            bot('sendmessage', [
                'chat_id' => $id,
                'text' => "✅Pul ayirish uchun quyidagi buyruqni bajaring!\nBir qator pastga tushib id raqamni yozing, yana bir qator pastga tushib olmosni yozing!\nMasalan:\n<code>\n/minus\n$admin\n1000</code>",
                'parse_mode' => 'html',
                'reply_markup' => $keys,
            ]);
        } elseif (mb_stripos($text, "/minus") !== false) {
            if ($id == $admin) {
                $ide = explode("\n", $text);
                $id1 = $ide[1];
                $id2 = $ide[2];
                $olmos = file_get_contents("users/$id/uzcoin.txt");
                $miqdor = $olmos - $id2;
                file_put_contents("users/$id/uzcoin.txt", "$miqdor");

                bot('sendmessage', [
                    'chat_id' => $id,
                    'text' => "<b>🛠 Hisobi Yechildi.\n🆔 Id raqami : $id1\n💳 Yechildi : $id2 UZS</b>",
                    'parse_mode' => 'html',

                ]);
                bot("sendmessage", [
                    'chat_id' => $id1,
                    'text' => "*🛠 Hisobingiz $id2 UZS ga Yechildi.*",
                    'parse_mode' => 'Markdown',
                ]);
            }
        }





        //dasturchi @Azamov_Samandar kanalimiz @mycoders1 ko'dni tarqatmoqchi bo'lsang manba bilan ol 




        elseif ($text == "💰 Xarid qilish") {
            bot('sendmessage', ['chat_id' => $id, 'text' => "📋 To'lov tizimi: PAYNET\n💡 Avto to'lov holati: OF\n💳 Hamyon ( +998943990509 ) -> admin\n💳 Telegram -> <a href='tg://user?id=$admin'>Admin</a>\n📝 Izoh: $id\n📊 Uz. c. Kursi: 155\nQo'shimcha: To'lovni amalga oshirgach biz bilan bog'laning.", 'reply_markup' => $paynet, "parse_mode" => "html"]);
        } elseif (menu_get($id) == "stol") {
            $t = explode(" ", $text);
            if (isset($t[1])) {
                bot("sendmessage", ["chat_id" => $id, 'text' => "Kechirasiz stol nomida bo'shliqlar bo'lishi mumkun emas qayta urunib ko'ring"]);
            } else {

                if (file_exists("users/$id/host/$text") != "1") {

                    bot("sendMessage", ['chat_id' => $id, 'text' => "stol yaratilmoqda..."]);
                    bot('editMessageText', [
                        'message_id' => $message_id2 + 1,
                        'chat_id' => $id,
                        'text' => '⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️0%'
                    ]);
                    sleep(0.7);
                    bot('editMessageText', [
                        'chat_id' => $id,
                        'message_id' => $message_id2 + 1,
                        'text' => '⬛️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️10%'
                    ]);
                    sleep(0.7);
                    bot('editMessageText', [
                        'chat_id' => $id,
                        'message_id' => $message_id2 + 1,
                        'text' => '⬛️⬛️⬜️⬜️⬜️⬜️⬜️⬜️⬜️⬜️20%'
                    ]);
                    sleep(0.7);
                    bot('editMessageText', [
                        'chat_id' => $id,
                        'message_id' => $message_id2 + 1,
                        'text' => '⬛️⬛️⬛️⬜️⬜️⬜️⬜️⬜️⬜️⬜️30%'
                    ]);
                    sleep(0.7);
                    bot('editMessageText', [
                        'chat_id' => $id,
                        'message_id' => $message_id2 + 1,
                        'text' => '⬛️⬛️⬛️⬛️⬜️⬜️⬜️⬜️⬜️⬜️40%'
                    ]);
                    sleep(0.7);
                    bot('editMessageText', [
                        'chat_id' => $id,
                        'message_id' => $message_id2 + 1,
                        'text' => '⬛️⬛️⬛️⬛️⬛️⬜️⬜️⬜️⬜️⬜️50%'
                    ]);
                    sleep(0.7);
                    bot('editMessageText', [
                        'chat_id' => $id,
                        'message_id' => $message_id2 + 1,
                        'text' => '⬛️⬛️⬛️⬛️⬛️⬛️⬜️⬜️⬜️⬜️60%'
                    ]);
                    sleep(0.7);
                    bot('editMessageText', [
                        'chat_id' => $id,
                        'message_id' => $message_id2 + 1,
                        'text' => '⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️⬜️⬜️70%'
                    ]);
                    //dasturchi @Azamov_Samandar kanalimiz @mycoders1 ko'dni tarqatmoqchi bo'lsang manba bilan ol 

                    sleep(0.7);
                    bot('editMessageText', [
                        'chat_id' => $id,
                        'message_id' => $message_id2 + 1,
                        'text' => '⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️⬜️80%'
                    ]);
                    sleep(0.7);
                    bot('editMessageText', [
                        'chat_id' => $id,
                        'message_id' => $message_id2 + 1,
                        'text' => '⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬜️90%'
                    ]);
                    sleep(0.7);
                    bot('editMessageText', [
                        'chat_id' => $id,
                        'message_id' => $message_id2 + 1,
                        'text' => '⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️⬛️100%'
                    ]);
                    mkdir("users/$id/host/$text");
                    file_put_contents("users/$id/host/$text/index.php", file_get_contents("new_stol.php"));
                    bot("deletemessage", ['chat_id' => $id, 'message_id' => $message_id2 + 1]);
                    bot("sendMessage", ['chat_id' => $id, 'text' => "Stol yaratildi", "reply_markup" => my_stols($id)]);
                    menu_put("none", $id);
                } else {
                    bot("sendMessage", ['chat_id' => $id, 'text' => "stol avvaldan mavjud"]);
                }
            }
        }
    }
} else {
    bot("sendmessage", ['chat_id' => $iddd, 'text' => "❌Kechirasiz <a href='tg://user?id=$iddd'>$ism</a> siz bizning kanallarimizga obuna boʻlmasangiz botdan foydalana olmaysiz!\n🔰Obuna boʻlib Tekshirish tugmasini bosing!", "parse_mode" => "html", "reply_markup" => json_encode(["inline_keyboard" => [[['text' => "🔚 Kanal", 'url' => "https://t.me/mycoders1"]], [['text' => "🔚 Kanal", 'url' => "https://t.me/mycoders11"]],[['text' => "🔚 Kanal", 'url' => "https://t.me/freexost_group"]] ,[['text' => "✅ tekshirish", "callback_data" => "joinchat_tek"]]]])]);
}
// include "admin.php";