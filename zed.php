<?php
#set ur details befor run
/////////////////////////////////////////////////////
$usernamebot = "elitemarshalbot";// bot username without@
$channel = "elitemarketchannel"; // channel sponsor without @
$dev='757373355';/// admin id (use @userinfobot for get )
$token='1231178427:AAFN-_XNY6l3s3tuikYes7gv0srXqgQTLcM';/// set your bot token
///////////////////////////////////////////////////////
flush;
ini_set('error_logs','off');
date_default_timezone_set('Asia/Tehran');
define('DEVELOPER',$dev);
define('API_KEY',$token);
$bot_id=json_decode(file_get_contents('https://api.telegram.org/bot'.API_KEY.'/getMe'))->result->id;
define('ROBOT_ID',$bot_id);
$bot_name=json_decode(file_get_contents('https://api.telegram.org/bot'.API_KEY.'/getMe'))->result->first_name;
#functions
function bot($method,$datas=[]){
	$ch=curl_init();
	curl_setopt($ch,CURLOPT_URL,'https://api.telegram.org/bot'.API_KEY.'/'.$method);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
	return json_decode(curl_exec($ch));
}
function sendMessage($chat_id,$text,$parse_mode,$reply_markup,$reply_to_message_id){
	bot('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>$text,
	'parse_mode'=>$parse_mode,
	'disable_web_page_preview'=>true,
	'reply_markup'=>$reply_markup,
	'reply_to_message_id'=>$reply_to_message_id
	]);
}
function editMessageText($chat_id,$message_id,$text,$parse_mode,$reply_markup){
	bot('editMessageText',[
	'chat_id'=>$chat_id,
	'message_id'=>$message_id,
	'text'=>$text,
	'parse_mode'=>$parse_mode,
	'disable_web_page_preview'=>true,
	'reply_markup'=>$reply_markup
	]);
}
function editMessageReplyMarkup($chat_id,$message_id,$reply_markup){
	bot('editMessageReplyMarkup',[
	'chat_id'=>$chat_id,
	'message_id'=>$message_id,
	'reply_markup'=>$reply_markup
	]);
}
function deleteMessage($chat_id,$message_id){
	bot('deleteMessage',[
	'chat_id'=>$chat_id,
	'message_id'=>$message_id
	]);
}
function kickChatMember($chat_id,$user_id){
	Bot('kickChatMember',[
	'chat_id'=>$chat_id,
	'user_id'=>$user_id
	]);
}
function answerCallbackQuery($text,$show_alert){
	bot('answerCallbackQuery',[
	'callback_query_id'=>json_decode(file_get_contents('php://input'))->callback_query->id,
	'text'=>$text,
	'show_alert'=>$show_alert
	]);
}
function getChat($chat_id){
	return json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChat?chat_id=$chat_id"));
}
function leaveChat($chat_id){
	bot('leaveChat',[
	'chat_id'=>$chat_id
	]);
}
function textToEnglish($text){
	switch($text){
		case 'استیکر';
		$new_text='sticker';
		break;
		case 'عکس';
		$new_text='photo';
		break;
		case 'گیف';
		$new_text='gif';
		break;
		case 'فیلم';
		$new_text='video';
		break;
		case 'ویدیوسلفی';
		$new_text='videoselfi';
		break;
		case 'صدا';
		$new_text='voice';
		break;
		case 'موسیقی';
		$new_text='music';
		break;
		case 'فایل';
		$new_text='document';
		break;
		case 'مخاطب';
		$new_text='contact';
		break;
		case 'مکان';
		$new_text='location';
		break;
		case 'بازی';
		$new_text='game';
		break;
		case 'متن';
		$new_text='text';
		break;
		case 'لینک';
		$new_text='link';
		break;
		case 'یوزرنیم';
		$new_text='username';
		break;
		case 'هشتگ';
		$new_text='hashtag';
		break;
		case 'بولد';
		$new_text='bold';
		break;
		case 'ایتالیک';
		$new_text='italic';
		break;
		case 'کدینگ';
		$new_text='coding';
		break;
		case 'فوروارد';
		$new_text='forward';
		break;
		case 'سرویس';
		$new_text='tgservice';
		break;
		case 'ریپلای';
		$new_text='reply';
		break;
		case 'کپشن';
		$new_text='caption';
		break;
		case 'ربات';
		$new_text='bot';
		break;
		case 'عضویت';
		$new_text='join';
	}
	return $new_text;
}
function textToPersian($text){
	switch($text){
		case 'sticker';
		$new_text='استیکر';
		break;
		case 'photo';
		$new_text='عکس';
		break;
		case 'gif';
		$new_text='گیف';
		break;
		case 'video';
		$new_text='فیلم';
		break;
		case 'videoselfi';
		$new_text='ویدیوسلفی';
		break;
		case 'voice';
		$new_text='صدا';
		break;
		case 'music';
		$new_text='موسیقی';
		break;
		case 'document';
		$new_text='فایل';
		break;
		case 'contact';
		$new_text='مخاطب';
		break;
		case 'location';
		$new_text='مکان';
		break;
		case 'game';
		$new_text='بازی';
		break;
		case 'text';
		$new_text='متن';
		break;
		case 'link';
		$new_text='لینک';
		break;
		case 'username';
		$new_text='یوزرنیم';
		break;
		case 'hashtag';
		$new_text='هشتگ';
		break;
		case 'bold';
		$new_text='بولد';
		break;
		case 'italic';
		$new_text='ایتالیک';
		break;
		case 'coding';
		$new_text='کدینگ';
		break;
		case 'forward';
		$new_text='فوروارد';
		break;
		case 'tgservice';
		$new_text='سرویس';
		break;
		case 'reply';
		$new_text='ریپلای';
		break;
		case 'caption';
		$new_text='کپشن';
		break;
		case 'bot';
		$new_text='ربات';
		break;
		case 'join';
		$new_text='عضویت';
	}
	return $new_text;
}
function saveJson($file,$date){
	$new_data=json_encode($date);
	file_put_contents($file,$new_data);
}
function chat_id(){
	$update=json_decode(file_get_contents('php://input'));
	$chatid=$update->message->chat->id;
	$chatid2=$update->callback_query->message->chat->id;
	return $chat_id=$chatid2?$chatid2:$chatid;
}
function from_id(){
	$update=json_decode(file_get_contents('php://input'));
	$fromid=$update->message->from->id;
	$fromid2=$update->callback_query->from->id;
	return $from_id=$fromid2?$fromid2:$fromid;
}
function situation($user_id){
	$update=json_decode(file_get_contents('php://input'));
	$n=$update->message->chat->type;
	$n2=$update->callback_query->message->chat->type;
	if($n!=null){
		$tc=$update->message->chat->type;
	}
	elseif($n2!=null){
		$tc=$update->callback_query->message->chat->type;
	}
	$chat_id=chat_id();
	$oders=json_decode(file_get_contents("data/groups/".$chat_id."/oders.json"),true);
	$status=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$chat_id."&user_id=".$user_id))->result->status;
	$bot_status=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$chat_id."&user_id=".ROBOT_ID))->result->status;
	if($tc=='supergroup' && $oders['install']=='✅'){
		if($status!='member' && $status!=null && $bot_status!='memebr' && $bot_status!=null){
			return 'ok';
		}
	}
}
function situationFilters($user_id){
	$update=json_decode(file_get_contents('php://input'));
	$tc=$update->message->chat->type;
	$chat_id=chat_id();
	$oders=json_decode(file_get_contents("data/groups/".$chat_id."/oders.json"),true);
	$status=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=".$user_id))->result->status;
	$bot_status=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=$chat_id&user_id=".$bot_id))->result->status;
	if($tc=='supergroup' && $oders['install']=='✅'){
		if($status=='member'){
			return 'ok';
		}
	}
}
function filterCmd($text){
	if(strstr($text,'/')){
		while(strstr($text,'/')){
			$text=str_replace('/','',$text);
		}
	}
	if(strstr($text,'!')){
		while(strstr($text,'!')){
			$text=str_replace('!','',$text);
		}
	}
	if(strstr($text,'#')){
		while(strstr($text,'#')){
			$text=str_replace('#','',$text);
		}
	}
	if(preg_match('/^[A-Z]/',$text)){
		$text=strtolower($text);
	}
	return $text;
}
function buttonPanel($language){
	if($language!='english'){
		return json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
		[['text'=>"تنظیمات گروه |⚙️",'callback_data'=>"settings_group"],['text'=>"🎚| تنظیمات اد اجباری",'callback_data'=>"settings_compulsory_add"]],
		[['text'=>"تنظیمات عضویت اجباری |💡",'callback_data'=>"settings_compulsory_join"],['text'=>"⛓| تنظیمات پیام مکرر",'callback_data'=>"settings_frequent_message"]],
		[['text'=>"تنظیمات محدودیت کاراکتر |🔩",'callback_data'=>"settings_character_constraint"],['text'=>"⏳| تنظیمات سکوت",'callback_data'=>"settings_silent"]],
		[['text'=>"📋| راهنمای دستورات",'callback_data'=>"cmd_guide"]],
		[['text'=>"🖱| خروج |🖱",'callback_data'=>"exit"]]
		]]);
	}else{
		return json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
		[['text'=>"Settings group |⚙️",'callback_data'=>"settings_group"],['text'=>"🎚| Settings compulsory add",'callback_data'=>"settings_compulsory_add"]],
		[['text'=>"Settings compulsory join |💡",'callback_data'=>"settings_compulsory_join"],['text'=>"⛓| Settings frequent message",'callback_data'=>"settings_frequent_message"]],
		[['text'=>"Settings character constraint |🔩",'callback_data'=>"settings_character_constraint"],['text'=>"⏳| Settings silent",'callback_data'=>"settings_silent"]],
		[['text'=>"📋| Commands Guide",'callback_data'=>"cmd_guide"]],
		[['text'=>"🖱| Exit |🖱",'callback_data'=>"exit"]]
		]]);
	}
}
function buttonPanelMulti($file){
	$chat_id=chat_id();
	$number= -1;
	$list=array();
	foreach($file as $key=>$value){
		$number=$number + 1;
		$groups=json_decode(file_get_contents('data/bot/groups.json'),true);
		if($groups[$chat_id]!='english'){
			$key2=textToPersian($key);
			$list[$number]=array(array('text'=>"$value",'callback_data'=>"multi_$key"),array('text'=>"$key2",'callback_data'=>"none"));
		}else{
			$list[$number]=array(array('text'=>"$key",'callback_data'=>"none"),array('text'=>"$value",'callback_data'=>"multi_$key"));
		}
	}
	if($groups[$chat_id]!='english'){
		$list[]=array(array('text'=>"خانه 🏛",'callback_data'=>"managemant_group"));
	}else{
		$list[]=array(array('text'=>"Back 🏛",'callback_data'=>"managemant_group"));
	}
	return json_encode(array('resize_keyboard'=>true,'inline_keyboard'=>$list));
}
function buttonCompulsoryadd($oders){
	$chat_id=chat_id();
	$groups=json_decode(file_get_contents('data/bot/groups.json'),true);
	if($groups[$chat_id]!='english'){
		if($oders['compulsory_add']=='✅'){
			return json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
			[['text'=>"$oders[compulsory_add]",'callback_data'=>"compulsory_add"],['text'=>"🔑| اد اجباری",'callback_data'=>"none"]],
			[['text'=>"$oders[statistics_compulsory_add]",'callback_data'=>"none"],['text'=>"🗄| آمار اد",'callback_data'=>"none"]],
			[['text'=>"$oders[number_compulsory_add]",'callback_data'=>"none"],['text'=>"📰| تعداد اد",'callback_data'=>"none"]],
			[['text'=>"➕",'callback_data'=>"c_add+"],['text'=>"➖",'callback_data'=>"c_add-"]],
			[['text'=>"خانه 🏛",'callback_data'=>"managemant_group"]]
			]]);
		}else{
			return json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
			[['text'=>"$oders[compulsory_add]",'callback_data'=>"compulsory_add"],['text'=>"🔑| اد اجباری",'callback_data'=>"none"]],
			[['text'=>"$oders[statistics_compulsory_add]",'callback_data'=>"none"],['text'=>"🗄| آمار اد",'callback_data'=>"none"]],
			[['text'=>"خانه 🏛",'callback_data'=>"managemant_group"]]
			]]);
		}
	}else{
		if($oders['compulsory_add']=='✅'){
			return json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
			[['text'=>"📰| Compulsory add",'callback_data'=>"none"],['text'=>"$oders[compulsory_add]",'callback_data'=>"compulsory_add"]],
			[['text'=>"🗄| Statistics add",'callback_data'=>"none"],['text'=>"$oders[statistics_compulsory_add]",'callback_data'=>"none"]],
			[['text'=>"📰| Number add",'callback_data'=>"none"],['text'=>"$oders[number_compulsory_add]",'callback_data'=>"none"]],
			[['text'=>"➖",'callback_data'=>"c_add-"],['text'=>"➕",'callback_data'=>"c_add+"]],
			[['text'=>"Back 🏛",'callback_data'=>"managemant_group"]]
			]]);
		}else{
			return json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
			[['text'=>"🔑| Compulsory add",'callback_data'=>"none"],['text'=>"$oders[compulsory_add]",'callback_data'=>"compulsory_add"]],
			[['text'=>"🗄| Statistics add",'callback_data'=>"none"],['text'=>"$oders[statistics_compulsory_add]",'callback_data'=>"none"]],
			[['text'=>"Back 🏛",'callback_data'=>"managemant_group"]]
			]]);
		}
	}
}
function buttonCompulsoryJoin($oders){
	$chat_id=chat_id();
	$groups=json_decode(file_get_contents('data/bot/groups.json'),true);
	if($groups[$chat_id]!='english'){
		if($oders['channel_compulsory_join']=='No set'){
			$oders['channel_compulsory_join']='تنظیم نشده';
		}
		return json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
		[['text'=>"$oders[compulsory_join]",'callback_data'=>"compulsory_join"],['text'=>"📦| عضویت اجباری",'callback_data'=>"none"]],
		[['text'=>"$oders[channel_compulsory_join]",'callback_data'=>"none"],['text'=>"🏷| کانال عضویت",'callback_data'=>"none"]],
		[['text'=>"حذف کانال",'callback_data'=>"delete_channel_c_join"],['text'=>"📮| تنظیم کانال",'callback_data'=>"set_channel_c_join"]],
		[['text'=>"خانه 🏛",'callback_data'=>"managemant_group"]]
		]]);
	}else{
		return json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
		[['text'=>"📦| Compulsory join",'callback_data'=>"none"],['text'=>"$oders[compulsory_join]",'callback_data'=>"compulsory_join"]],
		[['text'=>"🏷| Channel join",'callback_data'=>"none"],['text'=>"$oders[channel_compulsory_join]",'callback_data'=>"none"]],
		[['text'=>"📮| Set channel",'callback_data'=>"set_channel_c_join"],['text'=>"Delete channel",'callback_data'=>"delete_channel_c_join"]],
		[['text'=>"Back 🏛",'callback_data'=>"managemant_group"]]
		]]);
	}
}
function cancelCompulsoryJoin(){
	$chatid=chat_id();
	$groups=json_decode(file_get_contents('data/bot/groups.json'),true);
	if($groups[$chatid]!='english'){
		return json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
		[['text'=>"لغو❌",'callback_data'=>"chancel_compulsory_join"]]
		]]);
	}else{
		return json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
		[['text'=>"Cancel❌",'callback_data'=>"chancel_compulsory_join"]]
		]]);
	}
}
function buttonFrequentMessage($oders){
	$chat_id=chat_id();
	$groups=json_decode(file_get_contents('data/bot/groups.json'),true);
	if($groups[$chat_id]!='english'){
		if($oders['frequent_message']=='✅'){
			if($oders['reaction_frequent_message']=='Silent user'){
				$oders['reaction_frequent_message']='سکوت کاربر';
			}
			elseif($oders['reaction_frequent_message']=='Kick user'){
				$oders['reaction_frequent_message']='اخراج کاربر';
			}
			return json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
			[['text'=>"$oders[frequent_message]",'callback_data'=>"frequent_message"],['text'=>"✉️| پیام مکرر",'callback_data'=>"none"]],
			[['text'=>"$oders[number_frequent_message]",'callback_data'=>"none"],['text'=>"تعداد مجاز / ثانیه",'callback_data'=>"none"]],
			[['text'=>"➖",'callback_data'=>"f_message-"],['text'=>"➕",'callback_data'=>"f_message+"]],
			[['text'=>"$oders[reaction_frequent_message]",'callback_data'=>"reaction_frequent_message"],['text'=>"📜| واکنش",'callback_data'=>"none"]],
			[['text'=>"خانه 🏛",'callback_data'=>"managemant_group"]]
			]]);
		}else{
			return json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
			[['text'=>"$oders[frequent_message]",'callback_data'=>"frequent_message"],['text'=>"✉️| پیام مکرر",'callback_data'=>"none"]],
			[['text'=>"خانه 🏛",'callback_data'=>"managemant_group"]]
			]]);
		}
	}else{
		if($oders['frequent_message']=='✅'){
			return json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
			[['text'=>"✉️| Frequent message",'callback_data'=>"none"],['text'=>"$oders[frequent_message]",'callback_data'=>"frequent_message"]],
			[['text'=>"Number authorized / second",'callback_data'=>"none"],['text'=>"$oders[number_frequent_message]",'callback_data'=>"none"]],
			[['text'=>"➖",'callback_data'=>"f_message-"],['text'=>"➕",'callback_data'=>"f_message+"]],
			[['text'=>"📜| Reaction",'callback_data'=>"none"],['text'=>"$oders[reaction_frequent_message]",'callback_data'=>"reaction_frequent_message"]],
			[['text'=>"Back 🏛",'callback_data'=>"managemant_group"]]
			]]);
		}else{
			return json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
			[['text'=>"✉️| Frequent message",'callback_data'=>"none"],['text'=>"$oders[frequent_message]",'callback_data'=>"frequent_message"]],
			[['text'=>"Back 🏛",'callback_data'=>"managemant_group"]]
			]]);
		}
	}
}
function buttonCharacterConstraint($oders){
	$chat_id=chat_id();
	$groups=json_decode(file_get_contents('data/bot/groups.json'),true);
	if($groups[$chat_id]!='english'){
		if($oders['character_constraint']=='✅'){
			return json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
			[['text'=>"$oders[character_constraint]",'callback_data'=>"character_constraint"],['text'=>"📭| محدودیت کاراکتر",'callback_data'=>"none"]],
			[['text'=>"$oders[highest_number_character_constraint]",'callback_data'=>"none"],['text'=>"📉| بیشترین تعداد",'callback_data'=>"none"]],
			[['text'=>"10",'callback_data'=>"high_c_constraint_1-"],['text'=>"➕10",'callback_data'=>"high_c_constraint_1+"]],
			[['text'=>"100",'callback_data'=>"high_c_constraint_2-"],['text'=>"➕100",'callback_data'=>"high_c_constraint_2+"]],
			[['text'=>"خانه 🏛",'callback_data'=>"managemant_group"]]
			]]);
		}else{
			return json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
			[['text'=>"$oders[character_constraint]",'callback_data'=>"character_constraint"],['text'=>"📭| محدودیت کاراکتر",'callback_data'=>"none"]],
			[['text'=>"خانه 🏛",'callback_data'=>"managemant_group"]]
			]]);
		}
	}else{
		if($oders['character_constraint']=='✅'){
			return json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
			[['text'=>"📭| Character constraint",'callback_data'=>"none"],['text'=>"$oders[character_constraint]",'callback_data'=>"character_constraint"]],
			[['text'=>"📉| Highest number",'callback_data'=>"none"],['text'=>"$oders[highest_number_character_constraint]",'callback_data'=>"none"]],
			[['text'=>"10",'callback_data'=>"high_c_constraint_1-"],['text'=>"➕10",'callback_data'=>"high_c_constraint_1+"]],
			[['text'=>"100",'callback_data'=>"high_c_constraint_2-"],['text'=>"➕100",'callback_data'=>"high_c_constraint_2+"]],
			[['text'=>"Back 🏛",'callback_data'=>"managemant_group"]]
			]]);
		}else{
			return json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
			[['text'=>"📭| Character constraint",'callback_data'=>"none"],['text'=>"$oders[character_constraint]",'callback_data'=>"character_constraint"]],
			[['text'=>"Back 🏛",'callback_data'=>"managemant_group"]]
			]]);
		}
	}
}
function buttonSilent($oders){
	$chat_id=chat_id();
	$groups=json_decode(file_get_contents('data/bot/groups.json'),true);
	if($oders['silent_group']=='✅'){
		if($groups[$chat_id]!='english'){
			return json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
			[['text'=>$oders['silent_group'],'callback_data'=>"silent_group"],['text'=>"🔒| سکوت گروه",'callback_data'=>"none"]],
			[['text'=>$oders['silent_start'],'callback_data'=>"none"],['text'=>"⏱| از ساعت",'callback_data'=>"none"]],
			[['text'=>"➖",'callback_data'=>"silent_start-"],['text'=>"➕",'callback_data'=>"silent_start+"]],
			[['text'=>$oders['silent_stop'],'callback_data'=>"none"],['text'=>"⏱| تا ساعت",'callback_data'=>"none"]],
			[['text'=>"➖",'callback_data'=>"silent_stop-"],['text'=>"➕",'callback_data'=>"silent_stop+"]],
			[['text'=>"|🎚 لیست سکوت 🎚|",'callback_data'=>"silent_list"]],
			[['text'=>"خانه 🏛",'callback_data'=>"managemant_group"]]
			]]);
		}else{
			return json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
			[['text'=>"🔒| Silent group",'callback_data'=>"none"],['text'=>$oders['silent_group'],'callback_data'=>"silent_group"]],
			[['text'=>"⏱| Start time",'callback_data'=>"none"],['text'=>$oders['silent_start'],'callback_data'=>"none"]],
			[['text'=>"➖",'callback_data'=>"silent_start-"],['text'=>"➕",'callback_data'=>"silent_start+"]],
			[['text'=>"⏱| End time",'callback_data'=>"none"],['text'=>$oders['silent_stop'],'callback_data'=>"none"]],
			[['text'=>"➖",'callback_data'=>"silent_stop-"],['text'=>"➕",'callback_data'=>"silent_stop+"]],
			[['text'=>"🎚| Silent list |🎚",'callback_data'=>"silent_list"]],
			[['text'=>"Back 🏛",'callback_data'=>"managemant_group"]]
			]]);
		}
	}else{
		if($groups[$chat_id]!='english'){
			return json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
			[['text'=>$oders['silent_group'],'callback_data'=>"silent_group"],['text'=>"🔒| سکوت گروه",'callback_data'=>"none"]],
			[['text'=>"|🎚 لیست سکوت 🎚|",'callback_data'=>"silent_list"]],
			[['text'=>"خانه 🏛",'callback_data'=>"managemant_group"]]
			]]);
		}else{
			return json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
			[['text'=>"🔒| Silent group",'callback_data'=>"none"],['text'=>$oders['silent_group'],'callback_data'=>"silent_group"]],
			[['text'=>"🎚| Silent list |🎚",'callback_data'=>"silent_list"]],
			[['text'=>"Back 🏛",'callback_data'=>"managemant_group"]]
			]]);
		}
	}
}
function buttonSilentList($silent_list){
	$number=-1;
	$button=array();
	foreach($silent_list as $key=>$value){
		$number=$number+1;
		$name=getChat($key)->result->first_name;
		$button[$number]=array(array('text'=>"$name",'callback_data'=>"info-$key"),array('text'=>'❌','callback_data'=>"delete-$key"));
	}
	$chat_id=chat_id();
	$groups=json_decode(file_get_contents('data/bot/groups.json'),true);
	if($groups[$chat_id]!='english'){
		$button[]=array(array('text'=>"🚦 حذف همه",'callback_data'=>"delete_all_silent"));
		$button[]=array(array('text'=>"خانه 🏛",'callback_data'=>"settings_silent"));
	}else{
		$button[]=array(array('text'=>"🚦 Delete all",'callback_data'=>"delete_all_silent"));
		$button[]=array(array('text'=>"Back 🏛",'callback_data'=>"settings_silent"));
	}
	return json_encode(array('resize_keyboard'=>true,'inline_keyboard'=>$button));
}
function buttonPanelPrivate($chat_id){
	$list=array();
	$members=json_decode(file_get_contents("data/bot/members.json"),true);
	if($members[$chat_id]!='english'){
		$list[]=array(array('text'=>"🏧 راهنما",'callback_data'=>"hamed"));
		if($chat_id==DEVELOPER){
			$list[]=array(array('text'=>"🎃مدیریت🎃",'callback_data'=>"managemant"));
		}
	}else{
		$list[]=array(array('text'=>"Full guide 🏧",'callback_data'=>"hamed"));
		if($chat_id==DEVELOPER){
			$list[]=array(array('text'=>"🎃Managemant🎃",'callback_data'=>"managemant"));
		}
	}
	return json_encode(['resize_keyboard'=>true,'inline_keyboard'=>$list]);
}
function buttonManagemant($chat_id){
	$groups=json_decode(file_get_contents('data/bot/groups.json'),true);
	$members=json_decode(file_get_contents("data/bot/members.json"),true);
	$count_groups=count($groups);
	$count_members=count($members);
	if($members[$chat_id]!='english'){
		return json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
		[['text'=>"$count_groups",'callback_data'=>"none"],['text'=>"تعداد گروه ها",'callback_data'=>"none"]],
		[['text'=>"$count_members",'callback_data'=>"none"],['text'=>"تعداد اعضا",'callback_data'=>"none"]],
		[['text'=>'فوروارد','callback_data'=>'forward'],['text'=>'فوروارد (گروه)','callback_data'=>'forward_group']],
		[['text'=>"برگشت به منو🏛",'callback_data'=>"managemant_group_private"]]
		]]);
	}else{
		return json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
		[['text'=>"Number of groups",'callback_data'=>"none"],['text'=>"$count_groups",'callback_data'=>"none"]],
		[['text'=>"Number of members",'callback_data'=>"none"],['text'=>"$count_members",'callback_data'=>"none"]],
		[['text'=>'Forward','callback_data'=>'forward'],['text'=>'Forward (Group)','callback_data'=>'forward_group']]
		[['text'=>"Back to menu🔙",'callback_data'=>"managemant_group_private"]]
		]]);
	}
}
/////////////////////////////////////////////////////////////////////////////
$update=json_decode(file_get_contents('php://input'));
$update2=json_decode(file_get_contents('php://input'),true);
$text=$update->message->text;
$chatid=chat_id();
$fromid=from_id();
$message_id=$update->message->message_id;
$new_chat_member_id=$update->message->new_chat_member->id;
$data=$update->callback_query->data;
$message_id2=$update->callback_query->message->message_id;
$tc=$update->message->chat->type;
$tc2=$update->callback_query->message->chat->type;
$replyid=$update->message->reply_to_message->from->id;
$reply_name=$update->message->reply_to_message->from->first_name;
$first_name=$update->message->from->first_name;
$filter_cmd=filterCmd($text);
$situation=situation($fromid);
$situation3=situationFilters($fromid);
$lock_list='sticker,photo,gif,video,videoselfi,voice,music,document,contact,location,game,text,link,username,hashtag,bold,italic,coding,forward,tgservice,reply,caption,bot,join';
$groups=json_decode(file_get_contents('data/bot/groups.json'),true);
$members=json_decode(file_get_contents("data/bot/members.json"),true);
$settings=json_decode(file_get_contents("data/groups/$chatid/settings.json"),true);
$oders=json_decode(file_get_contents("data/groups/$chatid/oders.json"),true);
$number_add=json_decode(file_get_contents("data/groups/$chatid/number_add.json"),true);
$silent_list=json_decode(file_get_contents("data/groups/$chatid/silent_list.json"),true);
$exempt_list=json_decode(file_get_contents("data/groups/$chatid/exempt_list.json"),true);
$spam=json_decode(file_get_contents("data/groups/$chatid/spam.json"),true);
$join_channel=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@$channel&user_id=".$fromid))->result->status;
$status=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$update->message->chat->id."&user_id=".$update->message->from->id))->result->status;
$status2=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$update->callback_query->message->chat->id."&user_id=".$update->callback_query->from->id))->result->status;
$text_panel_fa="🤓👇 از کیبورد زیر برای فعال یا غیر فعال کردن یک گزینه استفاده کنید ";
$text_panel_en="🤓👇 Use the keyboard to disable or enable the options";
$text_start_fa="The robot installation guide for the group: 🔓 

1. Click This Link (https://telegram.me/zexmanagerbot?startgroup=new) and add the robot to your group.

2. Then manage your robot and give it full access. (The last access is the addition of a compulsory manager!) 

3. Then send the install or نصب command in your group. 

The robot is installed within your group just as easily :) 

 dadashzadeh (https://telegram.me/dadashzadeh)

[🌐کـــانال اطلاع رسانی🌐](https://telegram.me/$channel)";
$text_start_en="🤓👇 Use the keyboard to disable or enable the options";
//========================================================//
$button_chancel_compulsory_join=cancelCompulsoryJoin();
$re_add_bot=json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
[['text'=>"Re-add robot",'url'=>"https://telegram.me/$usernamebot?startgroup=new"]],
[['text'=>"افزودن مجدد ربات",'url'=>"https://telegram.me/$usernamebot?startgroup=new"]]
]]);
$button_select_lan=json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
[['text'=>"فارسی🇮🇷",'callback_data'=>"selected_persian"],['text'=>"English🇬🇧",'callback_data'=>"selected_english"]]
]]);
//=========================================//
if(!is_dir('data')){
	mkdir('data');
}
if(!is_dir('data/bot')){
	mkdir('data/bot');
}
if(!is_dir('data/groups')){
	mkdir('data/groups');
}
/////////////////////////////////////////////////
if($status2=='member' && isset($data) && $tc2!='private'){
	if($groups[$chatid]!='english'){
		answerCallbackQuery("شما ادمین نیستید !📋 ",true);
	}
	elseif($groups[$chatid]=='english'){
		answerCallbackQuery("You are not a group admin !📋 ",true);
	}
	elseif($groups[$chatid]==null){
		answerCallbackQuery("شما ادمین نیستید !📋 \n\nYou are not a group admin !📋 ",true);
	}
	die;
}
/////////////////////////////////////////////////////////////////
if($tc=='group'){
	sendMessage($chatid,"⚠️خطا⚠️\n\nلطفا ابتدا گروه را ب سوپر گروه تبدیل کنید و دوباره ربات را اد کنید‼️\n\n➖➖➖➖➖➖➖➖➖➖➖➖➖➖\n\n⚠️Error⚠️\n\nPlease upgrade the group to the supergroup and add the robot again‼️",'HTML',$re_add_bot,$message_id);
	leaveChat($chatid);
}
#delete group
if(isset($update->message->left_chat_member) && $oders['install']=='✅'){
	rmdir('data/groups/'.$chatid);
	$id=array_search($chatid,$groups);
	unset($groups[$id]);
	saveJson('data/bot/groups.json',$groups);
}
#ok نصب
if(($filter_cmd=='install' || $filter_cmd=='پیکربندی' || $filter_cmd=='install@$usernamebot' || $filter_cmd=='start@$usernamebot' || $filter_cmd=='add' || $filter_cmd=='افزودن') && $tc=='supergroup' && $status!='member'){
	if($oders['install']!='✅'){
		sendMessage($chatid,"📄 لطفا زبان خود را انتخاب کنید 
➖➖➖
📄 Please choose your language :",'HTML',$button_select_lan,null);
	}else{
		if($groups[$chatid]!='english'){
			sendMessage($chatid,'ربات قبلا در گروه شما نصب بوده است 📍','HTML',null,$message_id);
		}else{
			sendMessage($chatid,'📍 The robot has already been installed in your group','HTML',null,$message_id);
		}
		deleteMessage($chatid,$message_id);
	}
}
if($data=='selected_persian' || $data=='selected_english'){
	if($tc2=='supergroup' && $oders['install']!='✅'){
		if(!is_dir("data/groups/$chatid")){
			mkdir("data/groups/$chatid");
		}
		$settings=json_encode(['sticker'=>'☑️','photo'=>'☑️','gif'=>'☑️','video'=>'☑️','videoselfi'=>'☑️','voice'=>'☑️','music'=>'☑️','document'=>'☑️','contact'=>'☑️','location'=>'☑️','game'=>'☑️','text'=>'☑️','link'=>'☑️','username'=>'☑️','hashtag'=>'☑️','bold'=>'☑️','italic'=>'☑️','coding'=>'☑️','forward'=>'☑️','tgservice'=>'☑️','reply'=>'☑️','caption'=>'☑️','bot'=>'☑️','join'=>'☑️']);
		file_put_contents("data/groups/$chatid/settings.json",$settings);
		$oders=json_encode(['install'=>'✅','step'=>'none','compulsory_add'=>'☑️','number_compulsory_add'=>5,'statistics_compulsory_add'=>0,'compulsory_join'=>'☑️','channel_compulsory_join'=>'No set','frequent_message'=>'☑️','number_frequent_message'=>5,'reaction_frequent_message'=>'Silent user','character_constraint'=>'☑️','highest_number_character_constraint'=>300,'silent_group'=>'☑️','silent_start'=>1,'silent_stop'=>7,'silent_ok'=>'☑️']);
		file_put_contents("data/groups/$chatid/oders.json",$oders);
		file_put_contents("data/groups/$chatid/number_add.json","");
		file_put_contents("data/groups/$chatid/join.json","");
		file_put_contents("data/groups/$chatid/silent_list.json","");
		file_put_contents("data/groups/$chatid/spam.json","");
		file_put_contents("data/groups/$chatid/exempt_list.json","");
		if($data=='selected_persian'){
			$groups[$chatid]='فارسی';
			$complete_نصب=json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
			[['text'=>"📍| تنظیمات گروه |📍",'callback_data'=>"managemant_group"]]
			]]);
			editMessageText($chatid,$message_id2,"🔓 ربات به صورت خودکار در گروه شما نصب شد",'HTML',$complete_نصب);
		}else{
			$groups[$chatid]='english';
			$complete_نصب=json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
			[['text'=>"Managemant group🛠",'callback_data'=>"managemant_group"]]
			]]);
			editMessageText($chatid,$message_id2,"🔓 The robot was automatically installed ",'HTML',$complete_نصب);
		}
		saveJson('data/bot/groups.json',$groups);
	}
}
////////////////////////////////////////////////////////////////////
if($data=='managemant_group'){
	if($situation=='ok'){
		if($groups[$chatid]!='english'){
			editMessageText($chatid,$message_id2,"📍 به منوی ادمین خوش آمدید

👮 ربات را در گروه خود تنظیم کنید",'HTML',buttonPanel($groups[$chatid]),null);
		}else{
			editMessageText($chatid,$message_id2,"📍 Welcome to the admin menu
			
			✅ Use the keyboard below !",'HTML',buttonPanel($groups[$chatid]),null);
		}
	}
}
////////////////////////////////////////////////////////////////////////////
if(strstr($filter_cmd,'delete') || strstr($filter_cmd,'حذف')){
	if($situation=='ok'){
		$ex=explode(' ',$filter_cmd);
		if($ex[0]!='delete' && $ex[0]!='حذف'){
			die;
		}
		$number=$ex[1];
		$number=trim($number);
		if($number>=1 && $number<=100){
			for($i=$message_id; $i>=$message_id-$number; $i--){
				deleteMessage($update->message->chat->id,$i);
			}
			if($groups[$chatid]!='english'){
				sendMessage($chatid,"📮 `$number` پیام پاک شد !",'MarkDown',null,null);
			}
			else{
				sendMessage($chatid,"📮 `$number` Messages deleted !",'MarkDown',null,null);
			}
			exit;
		}
		else{
			if($groups[$chatid]!='english'){
				sendMessage($chatid,'عدد باید بین 1 و 100 باشد !❌','MarkDown',null,null);
			}
			else{
				sendMessage($chatid,'The number should be between 1 and 100 ! ❌','MarkDown',null,null);
			}
		}
	}
}
////////////////////////////////////////////////////////////////
if($filter_cmd=='silent' || $filter_cmd=='سکوت'){
	if($situation=='ok'){
		if($replyid!=null){
			$status=json_decode(file_get_contents('https://api.telegram.org/bot'.API_KEY.'/getChatMember?chat_id='.$chatid.'&user_id='.$replyid))->result->status;
			if($status=='member' || $status=='restricted'){
				if(!array_key_exists($replyid,$silent_list)){
					bot('RestrictChatMember',[
					'chat_id'=>$chatid,
					'user_id'=>$replyid,
					'can_post_messages'=>false,
					'can_add_web_page_previews'=>false,
					'can_send_other_messages'=>false,
					'can_send_media_messages'=>false,
					'can_edit_messages'=>false
					]);
					$silent_list[$replyid]=date('Y/m/d');
					saveJson('data/groups/'.$chatid.'/silent_list.json',$silent_list);
					if($groups[$chatid]!='english'){
						sendMessage($chatid,$reply_name.' توانایی چت خود را از دست داد !🚀','HTML',null,$message_id);
					}
					else{
						sendMessage($chatid,$reply_name.' Lost the ability to chat!🚀','HTML',null,$message_id);
					}
				}else{
					if($groups[$chatid]!='english'){
						sendMessage($chatid,$reply_name.' در لیست سکوت گروه وجود دارد ‼️','HTML',null,$message_id);
					}
					else{
						sendMessage($chatid,$reply_name.' is in the group\'s silent list‼️','HTML',null,$message_id);
					}
				}
			}
			elseif($status=='creator' || $status=='administrator'){
				if($groups[$chatid]!='english'){
					sendMessage($chatid,'شما نمی توانید توانایی چت یک مدیر را بگیرید !❌','HTML',null,$message_id);
				}
				else{
					sendMessage($chatid,'You can not get a manager\'s ability to chat!❌','HTML',null,$message_id);
				}
			}
			elseif($status=='left' || $status=='kicked'){
				if($groups[$chatid]!='english'){
					sendMessage($chatid,'این کاربر یافت نشد !❌','HTML',null,$message_id);
				}
				else{
					sendMessage($chatid,'This user not found !❌','HTML',null,$message_id);
				}
			}
		}else{
			if($groups[$chatid]!='english'){
				sendMessage($chatid,'لطفا روی یک پیام ریپلای کنید و دستور را مجددا ارسال کنید‼️','HTML',null,$message_id);
			}
			else{
				sendMessage($chatid,'Please reply to a message and send command try again‼️','HTML',null,$message_id);
			}
		}
	}
}
//////===============================================================//////////
if($filter_cmd=='unsilent' || $filter_cmd=='لغو سکوت'){
	if($situation=='ok'){
		if($replyid!=null){
			if(array_key_exists($replyid,$silent_list)){
				bot('RestrictChatMember',[
				'chat_id'=>$chatid,
				'user_id'=>$replyid,
				'can_post_messages'=>true,
				'can_add_web_page_previews'=>true,
				'can_send_other_messages'=>true,
				'can_send_media_messages'=>true,
				'can_edit_messages'=>true
				]);
				$e=array_search($replyid,$silent_list);
				unset($silent_list[$e]);
				saveJson('data/groups/'.$chatid.'/silent_list.json',$silent_list);
				if($groups[$chatid]!='english'){
					sendMessage($chatid,$reply_name.' توانایی چت خود را از بدست آورد !🚀','HTML',null,$message_id);
				}
				else{
					sendMessage($chatid,$reply_name.' Ability to get your chat!🚀','HTML',null,$message_id);
				}
			}
		}else{
			if($groups[$chatid]!='english'){
				sendMessage($chatid,'لطفا روی یک پیام ریپلای کنید و دستور را مجددا ارسال کنید‼️','HTML',null,$message_id);
			}
			else{
				sendMessage($chatid,'Please reply to a message and send command try again‼️','HTML',null,$message_id);
			}
		}
	}
}
//===================================================================//
if($filter_cmd=='معاف' || $filter_cmd=='exempt'){
	if($situation=='ok'){
		if($replyid!=null){
			$status=json_decode(file_get_contents('https://api.telegram.org/bot'.API_KEY.'/getChatMember?chat_id='.$chatid.'&user_id='.$replyid))->result->status;
			if($status=='member' || $status=='restricted'){
				if(!in_array($replyid,$exempt_list)){
					$exempt_list[]=$replyid;
					saveJson('data/groups/'.$chatid.'/exempt_list.json',$exempt_list);
					$name=getChat($replyid)->result->first_name;
					if($groups[$chatid]!='english'){
						sendMessage($chatid,"کاربر $name از افزودن اجباری عضو معاف شد🚀",'HTML',null,$message_id);
					}
					else{
						sendMessage($chatid,"$name user was exempted from adding a member🚀",'HTML',null,$message_id);
					}
				}else{
					if($groups[$chatid]!='english'){
						sendMessage($chatid,'این کاربر از 🔑| اد اجباری معاف شده است‼️','HTML',null,$message_id);
					}
					else{
						sendMessage($chatid,'This user is exempted from the adding a member️','HTML',null,$message_id);
					}
				}
			}
			elseif($status=='creator' || $status=='administrator'){
					if($groups[$chatid]!='english'){
						sendMessage($chatid,'شما نمی توانید یک مدیر را از 🔑| اد اجباری معاف کنید‼️','HTML',null,$message_id);
					}
					else{
						sendMessage($chatid,'You can not exempt a manager from compulsory add‼️','HTML',null,$message_id);
					}
				}
				elseif($status=='left' || $status=='kicked'){
					if($groups[$chatid]!='english'){
						sendMessage($chatid,'این کاربر یافت نشد !❌','HTML',null,$message_id);
					}
					else{
						sendMessage($chatid,'This user not found !❌','HTML',null,$message_id);
					}
				}
		}else{
			if($groups[$chatid]!='english'){
				sendMessage($chatid,'لطفا روی یک پیام ریپلای کنید و دستور را مجددا ارسال کنید‼️','HTML',null,$message_id);
			}
			else{
				sendMessage($chatid,'Please reply to a message and send command try again‼️','HTML',null,$message_id);
			}
		}
	}
}
//===================================================================//
if($filter_cmd=='اجبار' || $filter_cmd=='compulsor'){
	if($situation=='ok'){
		if($replyid!=null){
			if(in_array($replyid,$exempt_list)){
				$id=array_search($replyid,$exempt_list);
				unset($exempt_list[$id]);
				saveJson('data/groups/'.$chatid.'/exempt_list.json',$exempt_list);
				$name=getChat($replyid)->result->first_name;
				if($groups[$chatid]!='english'){
					sendMessage($chatid,"کاربر $name از معافیت افزودن اجباری حذف شد🚀",'HTML',null,$message_id);
				}
				else{
					sendMessage($chatid,"The $name user has been removed from the forced add-ons exemption🚀",'HTML',null,$message_id);
				}
			}
		}else{
			if($groups[$chatid]!='english'){
				sendMessage($chatid,'لطفا روی یک پیام ریپلای کنید و دستور را مجددا ارسال کنید‼️','HTML',null,$message_id);
			}
			else{
				sendMessage($chatid,'Please reply to a message and send command try again‼️','HTML',null,$message_id);
			}
		}
	}
}
//=================================================================//
if(isset($text)){
	if($situation=='ok'){
		$lock=explode(' ',$text);
		$lock1=filterCmd($lock[0]);
		$lock2=filterCmd($lock[1]);
		if(!preg_match('/^[Aa-Zz]/',$lock2)){
			$lock_2=textToEnglish($lock2);
		}
		if($lock_2!=null){
			$file=$settings[$lock_2];
		}else{
			$file=$settings[$lock2];
		}
		if($lock1=='lock' || $lock1=='unlock' || $lock1=='قفل' || $lock1=='بازکردن'){
			if(strstr($lock_list,$lock2)!=false || strstr($lock_list,$lock_2)!=false){
				if($lock1=='lock' || $lock1=='قفل'){
					if($file=='☑️'){
						if($lock_2!=null){
							$settings[$lock_2]='✅';
						}else{
							$settings[$lock2]='✅';
						}
						saveJson("data/groups/$chatid/settings.json",$settings);
						if($groups[$chatid]!='english'){
							if($lock_2!=null){
								sendMessage($chatid,"🚀قفل ارسال $lock2 توسط اعضا , فعال شد !\n\nخب , اعضای گروه نمیتوانند $lock2 را در گروه ارسال کنند !🚨",'HTML',null,$message_id);
							}else{
								$lock2=textToPersian($lock2);
								sendMessage($chatid,"🚀قفل ارسال $lock2 توسط اعضا , فعال شد !\n\nخب , اعضای گروه نمیتوانند $lock2 را در گروه ارسال کنند !🚨",'HTML',null,$message_id);
							}
						}else{
							if($lock_2!=null){
								sendMessage($chatid,"🚀Lock send $lock_2 by members , was enabled !\n\nSo, group members cannot send ".$lock_2."s to the group !🚨",'HTML',null,$message_id);
							}else{
								sendMessage($chatid,"🚀Lock send $lock2 by members , was enabled !\n\nSo, group members cannot send ".$lock2."s to the group !🚨",'HTML',null,$message_id);
							}
						}
					}else{
						if($groups[$chatid]!='english'){
							if($lock_2!=null){
								sendMessage($chatid,"⚠️قفل ارسال $lock2 توسط اعضا , فعال بوده است !",'HTML',null,$message_id);
							}else{
								$lock2=textToPersian($lock2);
								sendMessage($chatid,"⚠️قفل ارسال $lock2 توسط اعضا , فعال بوده است !",'HTML',null,$message_id);
							}
						}else{
							if($lock_2!=null){
								sendMessage($chatid,"⚠️Lock send $lock_2 by members, already enabled !",'HTML',null,$message_id);
							}else{
								sendMessage($chatid,"⚠️Lock send $lock2 by members, already enabled !",'HTML',null,$message_id);
							}
						}
					}
				}
				elseif($lock1=='unlock' || $lock1=='بازکردن'){
					if($file=='✅'){
						if($lock_2!=null){
							$settings[$lock_2]='☑️';
						}else{
							$settings[$lock2]='☑️';
						}
						saveJson("data/groups/$chatid/settings.json",$settings);
						if($groups[$chatid]!='english'){
							if($lock_2!=null){
								sendMessage($chatid,"🚀قفل ارسال $lock2 توسط اعضا , غیر فعال شد !\n\nخب , اعضای گروه می توانند $lock2 را در گروه ارسال کنند !🎃",'HTML',null,$message_id);
							}else{
								$lock2=textToPersian($lock2);
								sendMessage($chatid,"🚀قفل ارسال $lock2 توسط اعضا , غیر فعال شد !\n\nخب , اعضای گروه می توانند $lock2 را در گروه ارسال کنند !🎃",'HTML',null,$message_id);
							}
						}else{
							if($lock_2!=null){
								sendMessage($chatid,"🚀Lock send $lock_2 by members , was disabled !\n\nSo, group members can send ".$lock_2."s to the group !🎃",'HTML',null,$message_id);
							}else{
								sendMessage($chatid,"🚀Lock send $lock2 by members , was disabled !\n\nSo, group members can send ".$lock2."s to the group !🎃",'HTML',null,$message_id);
							}
						}
					}else{
						if($groups[$chatid]!='english'){
							if($lock_2!=null){
								sendMessage($chatid,"⚠️قفل ارسال $lock2 توسط اعضا , غیر فعال بوده است !",'HTML',null,$message_id);
							}else{
								$lock2=textToPersian($lock2);
								sendMessage($chatid,"⚠️قفل ارسال $lock2 توسط اعضا , غیر فعال بوده است !",'HTML',null,$message_id);
							}
						}else{
							if($lock_2!=null){
								sendMessage($chatid,"⚠️Lock send $lock_2 by members, already disabled !",'HTML',null,$message_id);
							}else{
								sendMessage($chatid,"⚠️Lock send $lock2 by members, already disabled !",'HTML',null,$message_id);
							}
						}
					}
				}
			}else{
				if($groups[$chatid]!='english'){
					sendMessage($chatid,"❌این قفل وجود ندارد !",'HTML',null,$message_id);
				}else{
					sendMessage($chatid,"❌This lock does not exist !",'HTML',null,$message_id);
				}
			}
		}
	}
}
//=====================================================//
if(isset($text)){
	if($situation=='ok'){
		if(!preg_match('/^[Aa-Zz]/',$filter_cmd)){
			$filter_cmd2=textToEnglish($filter_cmd);
		}
		$lock_list=explode(',',$lock_list);
		if(in_array($filter_cmd,$lock_list) || in_array($filter_cmd2,$lock_list)){
			if($groups[$chatid]!='english'){
				if($filter_cmd2!=null){
					$button_panel_one=json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
					[['text'=>"⬇️ $filter_cmd ⬇️",'callback_data'=>"none"]],
					[['text'=>"$settings[$filter_cmd2]",'callback_data'=>"one_$filter_cmd2"],['text'=>"حذف پست",'callback_data'=>"none"]],
					[['text'=>"🖱| خروج |🖱",'callback_data'=>"exit"]]
					]]);
				}else{
					$filter_cmd2=textToPersian($filter_cmd);
					$button_panel_one=json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
					[['text'=>"⬇️ $filter_cmd2 ⬇️",'callback_data'=>"none"]],
					[['text'=>"$settings[$filter_cmd]",'callback_data'=>"one_$filter_cmd"],['text'=>"حذف پست",'callback_data'=>"none"]],
					[['text'=>"🖱| خروج |🖱",'callback_data'=>"exit"]]
					]]);
				}
				sendMessage($chatid,$text_panel_fa,'HTML',$button_panel_one,$message_id);
			}else{
				if($filter_cmd2!=null){
					$button_panel_one=json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
					[['text'=>"⬇️ $filter_cmd2 ⬇️",'callback_data'=>"none"]],
					[['text'=>"Delete Post",'callback_data'=>"none"],['text'=>"$settings[$filter_cmd2]",'callback_data'=>"one_$filter_cmd2"]],
					[['text'=>"Exit",'callback_data'=>"exit"]]
					]]);
				}else{
					$button_panel_one=json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
					[['text'=>"⬇️ $filter_cmd ⬇️",'callback_data'=>"none"]],
					[['text'=>"Delete Post",'callback_data'=>"none"],['text'=>"$settings[$filter_cmd]",'callback_data'=>"one_$filter_cmd"]],
					[['text'=>"Exit",'callback_data'=>"exit"]]
					]]);
				}
				sendMessage($chatid,$text_panel_en,'HTML',$button_panel_one,$message_id);
			}
		}
	}
}
//////==============================================//
if(strstr($data,'one_')!=false){
	if($situation=='ok'){
		$lock=str_replace('one_','',$data);
		if($settings[$lock]=='✅'){
			$settings[$lock]='☑️';
		}else{
			$settings[$lock]='✅';
		}
		saveJson("data/groups/$chatid/settings.json",$settings);
		if($groups[$chatid]!='english'){
			$lock2=textToPersian($lock);
			$button_panel_one=json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
			[['text'=>"⬇️ $lock2 ⬇️",'callback_data'=>"none"]],
			[['text'=>"$settings[$lock]",'callback_data'=>"one_$lock"],['text'=>"حذف پست",'callback_data'=>"none"]],
			[['text'=>"Exit",'callback_data'=>"exit"]]
			]]);
		}else{
			$button_panel_one=json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
			[['text'=>"⬇️ $lock ⬇️",'callback_data'=>"none"]],
			[['text'=>"Delete Post",'callback_data'=>"none"],['text'=>"$settings[$lock]",'callback_data'=>"one_$lock"]],
			[['text'=>"Exit",'callback_data'=>"exit"]]
			]]);
		}
		editMessageReplyMarkup($chatid,$message_id2,$button_panel_one);
	}
}
//============================================================//
if($filter_cmd=='panel' || $filter_cmd=='panel@$usernamebot' || $filter_cmd=='پنل' || $filter_cmd=='مدیریت'){
	if($situation=='ok'){
		if($groups[$chatid]!='english'){
			sendMessage($chatid,"🍿 به منوی ادمین خوش آمدید
			
			از کیبورد زیر استفاده کنید !☘️",'HTML',buttonPanel($groups[$chatid]),$message_id);
		}else{
			sendMessage($chatid,"Welcome to the admin menu 🍿
			
			Use the keyboard below !☘️",'HTML',buttonPanel($groups[$chatid]),$message_id);
		}
	}
}
//======================================================//
if($data=='settings_group' || $data=='settings_compulsory_add' || $data=='settings_compulsory_join' || $data=='settings_frequent_message' || $data=='settings_character_constraint' || $data=='settings_silent'){
	if($situation=='ok'){
		switch($data){
			case 'settings_group';
			$button=buttonPanelMulti($settings);
			break;
			case 'settings_compulsory_add';
			$button=buttonCompulsoryadd($oders);
			break;
			case 'settings_compulsory_join';
			$button=buttonCompulsoryJoin($oders);
			break;
			case 'settings_frequent_message';
			$button=buttonFrequentMessage($oders);
			break;
			case 'settings_character_constraint';
			$button=buttonCharacterConstraint($oders);
			break;
			case 'settings_silent';
			$button=buttonSilent($oders);
		}
		if($groups[$chatid]!='english'){
			editMessageText($chatid,$message_id2,$text_panel_fa,'HTML',$button);
		}else{
			editMessageText($chatid,$message_id2,$text_panel_en,'HTML',$button);
		}
	}
}
//=================================================//
if($data=='compulsory_add' || $data=='frequent_message' || $data=='character_constraint'){
	if($situation=='ok'){
		if($oders[$data]=='✅'){
			$oders[$data]='☑️';
		}else{
			$oders[$data]='✅';
		}
		switch($data){
			case 'compulsory_add';
			$button=buttonCompulsoryadd($oders);
			break;
			case 'frequent_message';
			$button=buttonFrequentMessage($oders);
			break;
			case 'character_constraint';
			$button=buttonCharacterConstraint($oders);
		}
		saveJson("data/groups/$chatid/oders.json",$oders);
		editMessageReplyMarkup($chatid,$message_id2,$button);
	}
}
///=================================================///
if(strstr($data,'multi_')!=false){
	if($situation=='ok'){
		$lock=str_replace('multi_','',$data);
		if($settings[$lock]=='✅'){
			$settings[$lock]='☑️';
		}else{
			$settings[$lock]='✅';
		}
		saveJson("data/groups/$chatid/settings.json",$settings);
		editMessageReplyMarkup($chatid,$message_id2,buttonPanelMulti($settings));
	}
}
//=========================================================//
if(strstr($data,'c_add')!=false){
	if($situation=='ok'){
		$position=str_replace('c_add','',$data);
		if($position=='+'){
			$new_number=$oders['number_compulsory_add'] + 1;
		}else{
			$new_number=$oders['number_compulsory_add'] - 1;
		}
		$oders['number_compulsory_add']=$new_number;
		if($new_number >= 1 && $new_number <= 10){
			saveJson("data/groups/$chatid/oders.json",$oders);
			editMessageReplyMarkup($chatid,$message_id2,buttonCompulsoryadd($oders));
		}
	}
}
///=============================================//
if($data=='compulsory_join'){
	if($situation=='ok'){
		if($oders['compulsory_join']=='✅'){
			$oders['compulsory_join']='☑️';
		}else{
			if($oders['channel_compulsory_join']!='No set'){
				$oders['compulsory_join']='✅';
			}else{
				if($groups[$chatid]!='english'){
					answerCallbackQuery("📋 برای اینکه بتوانید این گزینه را تغییر دهید، ابتدا باید کانال خود را برای عضویت اجباری تنظیم کنید

⭐️ دقت کرده ربات باید در کانال ادمین باشد",true);
				}else{
					answerCallbackQuery("⭐️ To be able to change this option, you must first set up your channel for compulsory join !",true);
				}
			}
		}
		saveJson("data/groups/$chatid/oders.json",$oders);
		editMessageReplyMarkup($chatid,$message_id2,buttonCompulsoryJoin($oders));
	}
}
//=======================================================//
if($data=='set_channel_c_join'){
	if($situation=='ok'){
		$oders['step']='set_channel_c_join';
		saveJson("data/groups/$chatid/oders.json",$oders);
		if($groups[$chatid]!='english'){
			editMessageText($chatid,$message_id2,"📍 لطفا نام کاربری کانال خود را ارسال کنید.\n\nنام کاربری کانال باید با @ آغاز شود ",'HTML',$button_chancel_compulsory_join);
		}else{
			editMessageText($chatid,$message_id2,"📍 Please submit your channel username.\n\nChannel username must be started with @",'HTML',$button_chancel_compulsory_join);
		}
	}
}
//===================================================//
if(isset($text) && $oders['step']=='set_channel_c_join'){
	if($situation=='ok'){
		if(substr($text,0,1)=='@'){
			$substr=substr($text,1,2);
			if(preg_match('/^[A-Z]|[a-z]|[0-9]|_/',$text) && strstr($text,' ')==false && !preg_match('/^[0-9]|_/',$substr) && strlen($text) >= 6){
				$oders['step']='none';
				$oders['channel_compulsory_join']=$text;
				saveJson("data/groups/$chatid/oders.json",$oders);
				if($groups[$chatid]!='english'){
					sendMessage($chatid,"📍 کانال شما با موفقیت تنظیم شد !",'HTML',buttonCompulsoryJoin($oders),$message_id);
				}else{
					sendMessage($chatid,"📍 Your channel successfully set !",'HTML',buttonCompulsoryJoin($oders),$message_id);
				}
			}else{
				if($groups[$chatid]!='english'){
					sendMessage($chatid,"📍 این نام کاربری معتبر نیست!\nلطفا نام کاربری خود را با دقت بیشتری ارسال کنید ️",'HTML',$button_chancel_compulsory_join,$message_id);
				}else{
					sendMessage($chatid,"📍 This username is not valid !\nPlease send your channel more username carefully ",'HTML',$button_chancel_compulsory_join,$message_id);
				}
			}
		}else{
			if($groups[$chatid]!='english'){
				sendMessage($chatid,"📍 یوزرنیم کانال باید با @ شروع شود !",'HTML',$button_chancel_compulsory_join,$message_id);
			}else{
				sendMessage($chatid,"📍 Username Channel must start with @ !",'HTML',$button_chancel_compulsory_join,$message_id);
			}
		}
	}
}
///=====================================================//
if($data=='delete_channel_c_join'){
	if($situation=='ok'){
		if($oders['channel_compulsory_join']!='No set'){
			if($groups[$chatid]!='english'){
				$button_sure_compulsory_join=json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
				[['text'=>"بله, من مطمئعنم",'callback_data'=>"sure_channel_c_join"]],
				[['text'=>"لغو",'callback_data'=>"chancel_compulsory_join"]]
				]]);
				editMessageText($chatid,$message_id2,"📍 مطمئنید که میخواهید کانال را حذف کنید?",'HTML',$button_sure_compulsory_join);
			}else{
				$button_sure_compulsory_join=json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
				[['text'=>"Yes, I sure ",'callback_data'=>"sure_channel_c_join"]],
				[['text'=>"Cancel",'callback_data'=>"chancel_compulsory_join"]]
				]]);
				editMessageText($chatid,$message_id2,"📍 Are you sure you want to delete the channel?",'HTML',$button_sure_compulsory_join);
			}
		}else{
			if($groups[$chatid]!='english'){
				answerCallbackQuery("📍 شما هیچ کانالی تنظیم نکرده اید !",true);
			}else{
				answerCallbackQuery("📍 You have not set any channel !",true);
			}
		}
	}
}
//=======================================================//
if($data=='sure_channel_c_join'){
	if($situation=='ok'){
		$oders['channel_compulsory_join']='No set';
		$oders['compulsory_join']='☑️';
		saveJson("data/groups/$chatid/oders.json",$oders);
		if($groups[$chatid]!='english'){
			answerCallbackQuery("😕 کانال تنظیم شده حذف شد !",true);
		}else{
			answerCallbackQuery("😕 The tuned channel has been deleted !",true);
		}
		if($groups[$chatid]!='english'){
			editMessageText($chatid,$message_id2,$text_panel_fa,'HTML',buttonCompulsoryJoin($oders));
		}else{
			editMessageText($chatid,$message_id2,$text_panel_en,'HTML',buttonCompulsoryJoin($oders));
		}
	}
}
//======================================================//
if($data=='chancel_compulsory_join'){
	if($situation=='ok'){
		if($oders['step']!='none'){
			$oders['step']='none';
			saveJson("data/groups/$chatid/oders.json",$oders);
		}
		if($groups[$chatid]!='english'){
			editMessageText($chatid,$message_id2,$text_panel_fa,'HTML',buttonCompulsoryJoin($oders));
		}else{
			editMessageText($chatid,$message_id2,$text_panel_en,'HTML',buttonCompulsoryJoin($oders));
		}
	}
}
/*
بسم الله الرحمن الرحیم 
--------------------
برای دریافت کلی سورس و قالب و افزونه حتما داخل کانال عضو شوید 

حمایت کنید تا بیشتر افزونه و سورس و قالب درکانال قرار بدیم

کانال کلبه ی سورس ! پر از سورس هاي ربات هاي تلگرامي !
لطفا در کانال ما عضو شويد 

@source_hut

https://t.me/source_hut
*/
//==================================================//
if(strstr($data,'f_message')!=false){
	if($situation=='ok'){
		$position=str_replace('f_message','',$data);
		if($position=='+'){
			$new_number=$oders['number_frequent_message'] + 1;
		}else{
			$new_number=$oders['number_frequent_message'] - 1;
		}
		$oders['number_frequent_message']=$new_number;
		if($new_number >= 1 && $new_number <= 10){
			saveJson("data/groups/$chatid/oders.json",$oders);
			editMessageReplyMarkup($chatid,$message_id2,buttonFrequentMessage($oders));
		}
	}
}
//====================================================//
if($data=='reaction_frequent_message'){
	if($situation=='ok'){
		if($oders['reaction_frequent_message']=='Silent user'){
			$oders['reaction_frequent_message']='Kick user';
		}else{
			$oders['reaction_frequent_message']='Silent user';
		}
		saveJson("data/groups/$chatid/oders.json",$oders);
		editMessageReplyMarkup($chatid,$message_id2,buttonFrequentMessage($oders));
	}
}
///=====================================================//
if(strstr($data,'high_c_constraint_1')!=false){
	if($situation=='ok'){
		$position=str_replace('high_c_constraint_1','',$data);
		if($position=='+'){
			$new_number=$oders['highest_number_character_constraint'] + 10;
		}else{
			$new_number=$oders['highest_number_character_constraint'] - 10;
		}
		$oders['highest_number_character_constraint']=$new_number;
		if($new_number >= 10 && $new_number <= 500){
			saveJson("data/groups/$chatid/oders.json",$oders);
			editMessageReplyMarkup($chatid,$message_id2,buttonCharacterConstraint($oders));
		}else{
			if($groups[$chatid]!='english'){
				answerCallbackQuery("📋 بالاترین تعداد باید بین 10 و 500 باشد !",true);
			}else{
				answerCallbackQuery("📋 Highest Number should be between 10 and 500 !",true);
			}
		}
	}
}
//================================================//
if(strstr($data,'high_c_constraint_2')!=false){
	if($situation=='ok'){
		$position=str_replace('high_c_constraint_2','',$data);
		if($position=='+'){
			$new_number=$oders['highest_number_character_constraint'] + 100;
		}else{
			$new_number=$oders['highest_number_character_constraint'] - 100;
		}
		$oders['highest_number_character_constraint']=$new_number;
		if($new_number >= 10 && $new_number <= 500){
			saveJson("data/groups/$chatid/oders.json",$oders);
			editMessageReplyMarkup($chatid,$message_id2,buttonCharacterConstraint($oders));
		}else{
			if($groups[$chatid]!='english'){
				answerCallbackQuery("📋 بالاترین تعداد باید بین 10 و 500 باشد !",true);
			}else{
				answerCallbackQuery("📋 Highest Number should be between 10 and 500 !",true);
			}
		}
	}
}
//-----------------------------------------------------///
if($data=='silent_group'){
	if($situation=='ok'){
		if($oders['silent_group']=='✅'){
			$oders['silent_group']='☑️';
			saveJson("data/groups/$chatid/oders.json",$oders);
		}else{
			$oders['silent_group']='✅';
			saveJson("data/groups/$chatid/oders.json",$oders);
		}
		editMessageReplyMarkup($chatid,$message_id2,buttonSilent($oders));
	}
}
//======================================================//
if(strstr($data,'silent_start')){
	if($situation=='ok'){
		$pos=str_replace('silent_start',null,$data);
		if($pos=='+'){
			$number=$oders['silent_start']+1;
		}else{
			$number=$oders['silent_start']-1;
		}
		if($number>=0 && $number<=24 && $number<$oders['silent_stop']){
			$oders['silent_start']=$number;
			saveJson("data/groups/$chatid/oders.json",$oders);
			editMessageReplyMarkup($chatid,$message_id2,buttonSilent($oders));
		}
	}
}
////////////////////////////////////////////////////////////////////
if(strstr($data,'silent_stop')){
	if($situation=='ok'){
		$pos=str_replace('silent_stop',null,$data);
		if($pos=='+'){
			$number=$oders['silent_stop']+1;
		}else{
			$number=$oders['silent_stop']-1;
		}
		if($number>=0 && $number<=24 && $number>$oders['silent_start']){
			$oders['silent_stop']=$number;
			saveJson("data/groups/$chatid/oders.json",$oders);
			editMessageReplyMarkup($chatid,$message_id2,buttonSilent($oders));
		}
	}
}
///////////////////////////////////////////////////////////////
if($data=='silent_list'){
	if($situation=='ok'){
		if($silent_list!=null){
			if($groups[$chatid]!='english'){
				editMessageText($chatid,$message_id2,"🌹 لیست سکوت گروه :",'HTML',buttonSilentList($silent_list));
			}else{
				editMessageText($chatid,$message_id2,"🌹 Silent list :\n",'HTML',buttonSilentList($silent_list));
			}
		}else{
			if($groups[$chatid]!='english'){
				answerCallbackQuery('لیست سکوت خالی است !',true);
			}else{
				answerCallbackQuery('Silent list is empty !',true);
			}
		}
	}
}
if(strstr($data,'info-')){
	if($situation=='ok'){
		$id=str_replace('info-',null,$data);
		$first_name=json_decode(file_get_contents('https://api.telegram.org/bot'.API_KEY.'/getChat?chat_id='.$id))->result->first_name;
		$username=json_decode(file_get_contents('https://api.telegram.org/bot'.API_KEY.'/getChat?chat_id='.$id))->result->username;
		$time=$silent_list[$id];
		if($groups[$chatid]!='english'){
			$username=$username==null?'ندارد':'@'.$username;
			answerCallbackQuery("نام : $first_name\nیوزرنیم : $username\nتاریخ شروع محدودیت : $time",true);
		}else{
			$username=$username==null?"Don\'t have":'@'.$username;
			answerCallbackQuery("Name : $first_name\nUsername : $username\nStart date limit : $time",true);
		}
	}
}
if(strstr($data,'delete-')){
	if($situation=='ok'){
		$id=str_replace('delete-',null,$data);
		bot('RestrictChatMember',[
		'chat_id'=>$chatid,
		'user_id'=>$id,
		'can_post_messages'=>true,
		'can_add_web_page_previews'=>true,
		'can_send_other_messages'=>true,
		'can_send_media_messages'=>true,
		'can_edit_messages'=>true
		]);
		unset($silent_list[$id]);
		saveJson("data/groups/$chatid/silent_list.json",$silent_list);
		if($silent_list!=null){
			if($groups[$chatid]!='english'){
				editMessageReplyMarkup($chatid,$message_id2,buttonSilentList($silent_list));
			}else{
				editMessageReplyMarkup($chatid,$message_id2,buttonSilentList($silent_list));
			}
		}else{
			if($groups[$chatid]!='english'){
				editMessageText($chatid,$message_id2,$text_panel_fa,'HTML',buttonSilent($oders));
			}else{
				editMessageText($chatid,$message_id2,$text_panel_en,'HTML',buttonSilent($oders));
			}
		}
	}
}
if($data=='delete_all_silent'){
	if($situation=='ok'){
		foreach($silent_list as $key=>$value){
			bot('RestrictChatMember',[
			'chat_id'=>$chatid,
			'user_id'=>$key,
			'can_post_messages'=>true,
			'can_add_web_page_previews'=>true,
			'can_send_other_messages'=>true,
			'can_send_media_messages'=>true,
			'can_edit_messages'=>true
			]);
			unset($silent_list[$key]);
		}
		saveJson("data/groups/$chatid/silent_list.json",$silent_list);
		if($groups[$chatid]!='english'){
			answerCallbackQuery("تمام کاربران از لیست سکوت گروه حذف شدند 🚀",true);
			editMessageText($chatid,$message_id2,$text_panel_fa,'HTML',buttonSilent($oders));
		}else{
			answerCallbackQuery("All users deleted from silent list 🚀",true);
			editMessageText($chatid,$message_id2,$text_panel_en,'HTML',buttonSilent($oders));
		}
	}
}
//////////////////////////////////////////////////
if($data=='selected_persian'){
	if($situation=='ok'){
		$groups[$chatid]='فارسی';
		saveJson('data/bot/groups.json',$groups);
		answerCallbackQuery("زبان گروه فارسی تنظیم شد !🚀",false);
		editMessageText($chatid,$message_id2,"🤓👇 از کیبورد زیر برای فعال یا غیر فعال کردن یک گزینه استفاده کنید",'HTML',buttonPanel($groups[$chatid]));
	}
}
/////////////////////////////////////////////////////////
if($data=='selected_english'){
	if($situation=='ok'){
		$groups[$chatid]='english';
		saveJson('data/bot/groups.json',$groups);
		answerCallbackQuery("English group language set up !🚀",false);
		editMessageText($chatid,$message_id2,"🤓👇 Welcome to the admin menu🌺\n\nUse the keyboard below ",'HTML',buttonPanel($groups[$chatid]));
	}
}
/////////////////////////////////////////////////////////////
if($data=='cmd_guide'){
	if($situation=='ok'){
		if($groups[$chatid]!='english'){
			$button_back=json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
			[['text'=>"خانه 🏛",'callback_data'=>"managemant_group"]]
			]]);
			editMessageText($chatid,$message_id2,"📋| راهنمای دستورات ربات📙\n\n• دریافت منوی مدیریت :\n`penel` | `مدیرت`\n\n—----------------------------------------------------------\n\n• فعال کردن یک قفل :\n`lock` | `قفل`\n\n• غیر فعال کردن یک قفل :\n`unlock` | `بازکردن` \n\n[[ sticker | photo | gif | video | videoselfi | voice | music | document | contact | location | game | text | link | username | Hashtag | bold | italic | coding | forward | tgservice | reply | caption | bot | join ]]\n\n[[ استیکر | عکس | گیف | فیلم | ویدئوسلفی | صدا | موسیقی | فایل | مخاطب | مکان | بازی | متن | لینک | یوزرنیم | هشتگ | بولد | ایتالیک | کدینگ | فوروارد | سرویس | ریپلای | کپشن | ربات | عضویت ]]\n\n—----------------------------------------------------------\n\n• نظارت بر یک قفل :\n\nشما با فراخوانی نام آن قفل می توانید بر آن نظارت کنید !\n(نام قفل ها در بالا ذکر شده است !)\n\n—----------------------------------------------------------\n\n1- شما می توانید دستورات را با حروف کوچک یا بزرگ ارسال کنید.\nربات هیچ تفاوتی بین حروف کوچک و بزرگ قاعل نمی شود !\nمثال :\nLOCK STICKER \nو\nlock sticker\nهیچ فرقی با یکدیگر ندارند.\n\n2-شما می توانید دستورات را به هرگونه که مایلید ارسال کنید.\nربات می تواند آنها را تفسیر کند !\nمثال :\nLock استیکر\nو\nقفل sticker\nهیچ فرقی با یکدیگر ندارند.\n\n3- شما می توانید داخل دستورات خود از علامت های ! و / و # استفاده کنید.\nمثال :\n/lock sticker\nو\nlo#ck sticker\nهیچ تفاوتی با هم ندارند.\n\nاستفاده از این علامت ها باعث میشود تا دستورات این ربات با دیگر ربات های درون گروه شما متمایز شود !\n\n —➖➖➖ \n\nشما میتوانید با این دستور چند پیام را بصورت متوالی حذف کنید :\n\ndelete [[number]]\nو یا\nحذف [[number]]\nبجای number می توانید عددی بین 1 تا 100 بگذارید !\n\n —➖➖➖ \n\nسکوت کاربر با دستور :\nsilent + [[reply]]\nویا\nسکوت + [[reply]]\n\n —➖➖➖ \n\nلغو سکوت افراد با دستور :\n\nunsilent + [[reply]]\nو یا\nلغو سکوت + [[reply]]\n\n —➖➖➖ \n\nبرای معاف کردن یک فرد از اد کردن اجباری به گروه دستور زیر را ارسال کنید :\n\nمعاف +  [[reply]]\nو یا\nexempt + [[reply]]\n\n —➖➖➖ \n\nبرای  حذف معافیت یک فرد از اد کردن اجباری به گروه دستور زیر را ارسال کنید :\n\nاجبار +  [[reply]]\nو یا\ncompulsor + [[reply]]\n\n[🌐کـــانال اطلاع رسانی🌐](https://telegram.me/$channel)",'MarkDown',$button_back);
		}else{
			$button_back=json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
			[['text'=>"Back 🏛",'callback_data'=>"managemant_group"]]
			]]);
			editMessageText($chatid,$message_id2,"Robot Command Guide \n \n • Get the Admin Menu: \n`panel` | `Management` \n \n ➖➖➖ \n \n • Enable a lock: \n`lock` | `Lock` \n \n • Disable a lock: \n`unlock` | `Open` \n \n [[sticker | Photo | Gif | video | videoselfi | Voice | Music | document | contact | location | Game | Text | link | username | Hashtag | bold | Italic | Coding | Forward | tgservice | reply | Caption | bot | join]] \n \n ➖➖➖ \n \n • Monitor a lock: \n \nYou can locate it by calling it! \n (lock name above Cited!) \n \n ➖➖➖ \n \n1- You can send commands in lowercase or uppercase. \nBot no difference between uppercase and lowercase! \n Example: \nLOCK STICKER \n and \nlock sticker \n are no different. \n \n2- You can send commands as you like. \n The robot can interpret them! \n Example: \nLock Sticker \n and \n lock the sticker \n are no different. \n \n3- You can insert your own commands from the characters! And / and #. \n Example: \n / lock sticker \n and \nlo # ck sticker \n are no different. \n \n Use of these tags makes the robot commands with other robots within your group Be distinctive! \n \n ➖➖➖ \n\nYou should delete message by this command :\n\ndelete [[number]]\nInsert number instead of number !\nThe number should be between 1 and 100 !\n\n----------------------------------------------------------\n\nsilent users by :\nsilent\n\n----------------------------------------------------------\n\nunsilent users by : \n unsilent\n\n ----------------------------------------------------------- \n\nIf you want to exempt a person from compulsory adding, send the following command:\n\n exempt + [[reply]]\n\n ----------------------------------------------------------- \n\nTo remove the impersonation of a person from the mandatory submission to the group, submit the following command: \n\ncompulsor + [[reply]] \n\n[🌐کـــانال اطلاع رسانی🌐](https://telegram.me/$channel)",'MarkDown',$button_back);
		}
	}
}
/////////////////////////////////////////////////
if($data=='exit'){
	if($situation=='ok'){
		deleteMessage($chatid,$message_id2);
	}
}
////////////////////////////////////////////////////
if(isset($update->message)){
	foreach($update->message as $key=>$value){
		if(($key=='new_chat_member' || $key=='left_chat_member' || $key=='new_chat_photo' || $key=='delete_chat_photo' || $key=='pinned_message' || $key=='new_chat_title') && $settings['tgservice']=='✅'){
			deleteMessage($chatid,$message_id);
		}
	}
}
if(isset($update->message)){
	if($situation3=='ok'){
		foreach($update->message as $key=>$value){
			if($settings[$key]=='✅'){
				deleteMessage($chatid,$message_id);
			}
			elseif($key=='video_note' && $settings['videoselfi']=='✅'){
				deleteMessage($chatid,$message_id);
			}
			elseif($key=='audio' && $settings['music']=='✅'){
				deleteMessage($chatid,$message_id);
			}
			elseif($key=='reply_to_message' && $settings['reply']=='✅'){
				deleteMessage($chatid,$message_id);
			}
			elseif($key=='caption' && $settings['caption']=='✅'){
				deleteMessage($chatid,$message_id);
			}
			elseif(($key=='forward_from' || $key=='forward_from_chat' || $key=='forward_signature') && $settings['forward']=='✅'){
				deleteMessage($chatid,$message_id);
			}
		}
	}
}
if($update->message->entities){
	if($situation3=='ok'){
		foreach($update2['message']['entities'] as $key=>$value){
			$e=$update2['message']['entities'][$key]['type'];
			if($e=='bold' && $settings['bold']=='✅'){
				deleteMessage($chatid,$message_id);
			}
			elseif($e=='italic' && $settings['italic']=='✅'){
				deleteMessage($chatid,$message_id);
			}
			elseif($e=='hashtag' && $settings['hashtag']=='✅'){
				deleteMessage($chatid,$message_id);
			}
			elseif($e=='url' && $settings['link']=='✅'){
				deleteMessage($chatid,$message_id);
			}
			elseif($e=='text_link' && $settings['link']=='✅'){
				deleteMessage($chatid,$message_id);
			}
			elseif($e=='mention' && $settings['username']=='✅'){
				deleteMessage($chatid,$message_id);
			}
			elseif($e=='text_mention' && $settings['username']=='✅'){
				deleteMessage($chatid,$message_id);
			}
			elseif($e=='code' && $settings['coding']=='✅'){
				deleteMessage($chatid,$message_id);
			}
		}
	}
}
if($update2->message->caption_entities){
	if($situation3=='ok'){
		foreach($update2['message']['caption_entities'] as $key=>$value){
			$e=$update2['message']['caption_entities'][$key]['type'];
			if($e=='bold' && $settings['bold']=='✅'){
				deleteMessage($chatid,$message_id);
			}
			elseif($e=='italic' && $settings['italic']=='✅'){
				deleteMessage($chatid,$message_id);
			}
			elseif($e=='hashtag' && $settings['hashtag']=='✅'){
				deleteMessage($chatid,$message_id);
			}
			elseif($e=='url' && $settings['link']=='✅'){
				deleteMessage($chatid,$message_id);
			}
			elseif($e=='text_link' && $settings['link']=='✅'){
				deleteMessage($chatid,$message_id);
			}
			elseif($e=='mention' && $settings['username']=='✅'){
				deleteMessage($chatid,$message_id);
			}
			elseif($e=='text_mention' && $settings['username']=='✅'){
				deleteMessage($chatid,$message_id);
			}
			elseif($e=='code' && $settings['coding']=='✅'){
				deleteMessage($chatid,$message_id);
			}
		}
	}
}
if($update->message->new_chat_member->is_bot==true && $settings['bot']=='✅' && $situation3=='ok'){
	kickChatMember($chatid,$new_chat_member_id);
}
if($update->message->from->is_bot==true && $settings['bot']=='✅' && $situation3=='ok'){
	kickChatMember($chatid,$fromid);
}
if($oders['compulsory_add']=='✅' && in_array($fromid,$exempt_list)==false){
	if($situation3=='ok'){
		if($number_add[$fromid]==null){
			$number_add[$fromid][]=0;
			$number_add[$fromid][]='no';
		}
		if($number_add[$fromid][0]<$oders['number_compulsory_add']){
			if($new_chat_member_id!=$fromid && isset($update->message->new_chat_member) && $update->message->new_chat_member->is_bot==false){
				$new_number=$number_add[$fromid][0]+1;
				$number_add[$fromid][0]=$new_number;
				$new_count=$oders['statistics_compulsory_add']+1;
				$oders['statistics_compulsory_add']=$new_count;
				saveJson("data/groups/$chatid/oders.json",$oders);
				if($number_add[$fromid][0]>=$oders['number_compulsory_add']){
					if($groups[$chatid]!='english'){
						sendMessage($chatid,"کاربر $first_name\nشما $oders[number_compulsory_add] عضو را به گروه دعوت کردید و شما مبتوانید اکنون در گروه چت کنید !",'HTML',null,null);
					}else{
						sendMessage($chatid,"User $first_name\nYou invited $oders[number_compulsory_add] members to the group and you can now chat in the group.🌹",'HTML',null,null);
					}
				}else{
					$sould_num=$oders['number_compulsory_add']-$number_add[$fromid][0];
					$my_add=$number_add[$fromid][0];
					if($groups[$chatid]!='english'){
						sendMessage($chatid,"کاربر $first_name\nشما یک نفر را به گروه دعوت کردید.🤠\nشما باید $sould_num عضو دیگر را به گروه دعوت کنید تا بتوانید چت کنید♨️\n🐾تعداد نفراتی که توسط شما دعوت شده اند : $my_add",'HTML',null,null);
					}else{
						sendMessage($chatid,"User $first_name\nYou invited someone to the group.🤠\nYou still have to invite $sould_num others to chat so that you can chat♨️\n🐾Number of members invited by you : $my_add",'HTML',null,null);
					}
					deleteMessage($chatid,$message_id);
				}
			}
			elseif(empty($update->message->left_chat_member)){
				if($number_add[$fromid][1]!='yes'){
					$number_add[$fromid][1]='yes';
					if($groups[$chatid]!='english'){
						sendMessage($chatid,"کاربر $first_name\nشما باید $oders[number_compulsory_add] عضو را به گروه دعوت کنید تا بتوانید چت کنید !📋 \nدر غیر این صورت پیام شما از گروه حذف میشود !💢",'HTML',null,null);
					}else{
						sendMessage($chatid,"User $first_name\nYou must invite $oders[number_compulsory_add] members to group in order to be able to chat!📋 \nOtherwise, your message will be deleted from the group !💢",'HTML',null,null);
					}
				}
				deleteMessage($chatid,$message_id);
			}
			saveJson("data/groups/$chatid/number_add.json",$number_add);
		}
	}
}
if($oders['compulsory_join']=='✅'){
	if($situation3=='ok'){
		$join=json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=".$oders['channel_compulsory_join']."&user_id=".$fromid))->result->status;
		if($join!='member' && $join!='administrator' && $join!='creator'){
			deleteMessage($chatid,$message_id);
			$join=json_decode(file_get_contents("data/groups/$chatid/join.json"),true);
			if($join[$fromid]==null){
				$join[$fromid]='ok';
				saveJson("data/groups/$chatid/join.json",$join);
				$username=str_replace('@','',$oders['channel_compulsory_join']);
				if($groups[$chatid]!='english'){
					$button_join=json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
					[['text'=>"🍃برای عضویت کلیک کنید🍃",'url'=>"https://t.me/".$username]]
					]]);
					sendMessage($chatid,"🌹سلام $first_name\nشما باید در کانال ما عضو شوید تا بتوانید در گروه چت کنید.در غیر این صورت پیام شما از گروه حذف میشود.\nبرای عضویت در کانال ما روی دکمه زیر کلیک کنید !⬇️",'HTML',$button_join,null);
				}else{
					$button_join=json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
					[['text'=>"🍃Click to join🍃",'url'=>"https://t.me/".$username]]
					]]);
					sendMessage($chatid,"🌹Hello $first_name\nYou must be a member of our channel to be able to chat in the group. Otherwise your message will be deleted.\nClick the button below to subscribe to our channel !⬇️",'HTML',$button_join,null);
				}
			}
		}
	}
}
if($oders['frequent_message']=='✅'){
	if($situation3=='ok'){
		$time=date('Y-m-d-h-i-sa');
		$time=str_replace('am',null,$time);
		if(!array_key_exists($fromid,$spam)){
			$spam[$fromid][]=$time;
			$spam[$fromid][]=1;
		}else{
			if($spam[$fromid][0]==$time){
				$spam[$fromid][1]=$spam[$fromid][1]+1;
			}else{
				$spam[$fromid][0]=$time;
				$spam[$fromid][1]=1;
			}
		}
		saveJson('data/groups/'.$chatid.'/spam.json',$spam);
		$number=$spam[$fromid][1];
		if($number>=$oders['number_frequent_message'] && $spam[$fromid][0]==$time){
			if($oders['reaction_frequent_message']=='Silent user'){
				bot('RestrictChatMember',[
				'chat_id'=>$chatid,
				'user_id'=>$fromid,
				'can_post_messages'=>false,
				'can_add_web_page_previews'=>false,
				'can_send_other_messages'=>false,
				'can_send_media_messages'=>false,
				'can_edit_messages'=>false
				]);
				$silent_list[$fromid]=date('Y/m/d');
				saveJson('data/groups/'.$chatid.'/silent_list.json',$silent_list);
				if($groups[$chatid]!='english'){
					sendMessage($chatid,"کاربر $first_name بدلیل ارسال بیش از حد پیام در یک ثانیه توانایی چت خود را از دست داد !🔓",'HTML',null,$message_id);
				}else{
					sendMessage($chatid,"The user $first name lost the ability to chat due to over-message sending in a second! 🔓",'HTML',null,$message_id);
				}
			}
			elseif($oders['reaction_frequent_message']=='Kick user'){
				kickChatMember($chatid,$fromid);
				if($groups[$chatid]!='english'){
					sendMessage($chatid,"کاربر $first_name بدلیل ارسال بیش از حد پیام در 1 ثانیه از گروه اخراج شد 🔓",'HTML',null,$message_id);
				}else{
					sendMessage($chatid,"The user $first name was expelled from the group because of an over-message sending in the group 🔓",'HTML',null,$message_id);
				}
			}
		}
	}
}
if($oders['character_constraint']=='✅'){
	if($situation3=='ok'){
		if(strlen($text)>$oders['highest_number_character_constraint']){
			deleteMessage($chatid,$message_id);
			$e=$oders['highest_number_character_constraint'];
			if($groups[$chatid]!='english'){
				sendMessage($chatid,"کاربر $first_name\nتعداد کاراکتر های پیام شما بیش از حد 📋 \nشما می توانید پیام هایی با حداکثر طول $e کاراکتر ارسال کنید‼️",'HTML',null,null);
			}else{
				sendMessage($chatid,"User $first_name\nThe number of characters in your message exceeds the limit⚠️\nYou can send messages with a length of $e characters‼️",'HTML',null,null);
			}
		}
	}
}
if($oders['silent_group']=='✅'){
	if($situation3=='ok'){
		if($oders['silent_start']<=date('H') && $oders['silent_stop']>=date('H')){
			deleteMessage($chatid,$message_id);
		}
	}
}
if($oders['silent_group']=='✅'){
	if($oders['silent_start']==date('H') && $oders['silent_ok']!='✅'){
		$oders['silent_ok']='✅';
		saveJson("data/groups/$chatid/oders.json",$oders);
		$start=$oders['silent_start'];
		$stop=$oders['silent_stop'];
		if($groups[$chatid]!='english'){
			sendMessage($chatid,"گروه بصورت خودکار در حال سکوت قرار گرفت \n\nتمامی پیام هایی که از ساعت `$start` تا `$stop` ارسال شوند توسط ربات حذف خواهند شد !🗑",'MarkDown',null,null);
		}else{
			sendMessage($chatid,"The group was automatically silent !🚀\n\nAll messages sent from the `$start` to `$stop` will be deleted by the robot! 🗑",'MarkDown',null,null);
		}
	}
}
if(($oders['silent_start']>date('H') && $oders['silent_stop']>date('H')) || ($oders['silent_start']<date('H') && $oders['silent_stop']<date('H')) || $oders['silent_group']=='☑️'){
	if($oders['silent_ok']=='✅'){
		$oders['silent_ok']='☑️';
		saveJson("data/groups/$chatid/oders.json",$oders);
	}
}
#join channel
if($chatid!=$dev && $tc=='private'){
	if($join_channel!='member' && $join_channel!='administrator' && $join_channel!='creator'){
		if($members[$chatid]!='english'){
			$text="Dear user🌹\nYou must be a member of our channel to get the latest robot news and information !\n⬇️ Click the button below to subscribe to our channel ⬇️";
			$button_join=json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
			[['text'=>"📋 Join to our channel 📋",'url'=>"https://telegram.me/$channel"]]
			]]);
		}
		elseif($members[$chatid]=='english'){
			$text="Dear user🌹\nYou must be a member of our channel to get the latest robot news and information !\n⬇️ Click the button below to subscribe to our channel ⬇️";
			$button_join=json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
			[['text'=>"📋 Join to our channel 📋",'url'=>"https://telegram.me/$channel"]]
			]]);
		}
		elseif($members[$chatid]==null){
			$text="کاربر گرامی 🌹 \nشما باید حتما عضو کانال ما شوید تا از آخرین اخبار و اطلاعات ربات برخوردار شوید !\n ⬇️ برای عضویت در کانال ما روی دکمه زیر کلیک کنید ⬇️ \n\n➖➖➖➖➖➖➖➖➖➖➖➖➖➖\n\nDear user 🌹 \nYou must be a member of our channel to get the latest robot news and information !\n⬇️Click the button below to subscribe to our channel ⬇️";
			$button_join=json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
			[['text'=>"📋 پیوستن به کانال ما 📋",'url'=>"https://telegram.me/$channel"]],
			[['text'=>"📋 Join to our channel 📋",'url'=>"https://telegram.me/$channel"]]
			]]);
		}
		sendMessage($chatid,$text,'HTML',$button_join,$message_id);
		die;
	}
}
if($chatid!=$dev && $tc2=='private'){
	if($join_channel!='member' && $join_channel!='administrator' && $join_channel!='creator'){
		if($members[$chatid]!='english'){
			$text="کاربر گرامی 🌹 \nشما باید حتما عضو کانال ما شوید تا از آخرین اخبار و اطلاعات ربات برخوردار شوید !\n ⬇️ برای عضویت در کانال ما روی دکمه زیر کلیک کنید ⬇️";
			$button_join=json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
			[['text'=>"🎗پیوستن به کانال ما🎗",'url'=>"https://telegram.me/$channel"]]
			]]);
		}
		elseif($members[$chatid]=='english'){
			$text="Dear user🌹\nYou must be a member of our channel to get the latest robot news and information !\n⬇️Click the button below to subscribe to our channel⬇️";
			$button_join=json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
			[['text'=>"🎗Join to our channel🎗",'url'=>"https://telegram.me/$channel"]]
			]]);
		}
		elseif($members[$chatid]==null){
			$text="کاربر گرامی🌹\nشما باید حتما عضو کانال ما شوید تا از آخرین اخبار و اطلاعات ربات برخوردار شوید !\n⬇️برای عضویت در کانال ما روی دکمه زیر کلیک کنید⬇️\n\n➖➖➖➖➖➖➖➖➖➖➖➖➖➖\n\nDear user🌹\nYou must be a member of our channel to get the latest robot news and information !\n⬇️Click the button below to subscribe to our channel⬇️";
			$button_join=json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
			[['text'=>"📋 پیوستن به کانال ما 📋",'url'=>"https://telegram.me/$channel"]],
			[['text'=>"📋 Join to our channel 📋",'url'=>"https://telegram.me/$channel"]]
			]]);
		}
		editMessageText($chatid,$message_id2,$text,'HTML',$button_join);
		die;
	}
}
////////////////////////////////////////////////////////////
if($filter_cmd=='start' || $filter_cmd=='panel'){
	if($tc=='private'){
		if($chatid==$dev){
			file_put_contents('data/bot/step.txt','home');
		}
		if($members[$chatid]!=null){
			if($members[$chatid]!='english'){
				sendMessage($chatid,$text_start_fa,'MarkDown',buttonPanelPrivate($chatid),$message_id);
			}else{
				sendMessage($chatid,$text_start_en,'MarkDown',buttonPanelPrivate($chatid),$message_id);
			}
		}else{
			sendMessage($chatid,"select your language :\n\n➖➖➖➖➖➖➖➖➖➖➖➖➖➖\n\nPlease choose your language :",'HTML',$button_select_lan,$message_id);
		}
		die;
	}
}
/////////////////////////////////////////////////////////
if($data=='selected_persian'){
	if($tc2=='private'){
		if($chatid==$dev){
			file_put_contents('data/bot/step.txt',$data);
		}
		$members[$chatid]='فارسی';
		saveJson('data/bot/members.json',$members);
		answerCallbackQuery("زبان ربات فارسی تنظیم شد !🚀",false);
		editMessageText($chatid,$message_id2,$text_start_fa,'MarkDown',buttonPanelPrivate($chatid));
	}
}
////////////////////////////////////////////////////////////////////
if($data=='selected_english'){
	if($tc2=='private'){
		if($chatid==$dev){
			file_put_contents('data/bot/step.txt',$data);
		}
		$members[$chatid]='english';
		saveJson('data/bot/members.json',$members);
		answerCallbackQuery("English robot language set up !🚀",false);
		editMessageText($chatid,$message_id2,$text_start_en,'MarkDown',buttonPanelPrivate($chatid));
	}
}
///////////////////////////////////////////////////////////
if($data=='hamed'){
	if($tc2=='private'){
		if($chatid==$dev){
			file_put_contents('data/bot/step.txt',$data);
		}
		if($members[$chatid]!='english'){
			$button_guide=json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
			[['text'=>"راهنمای قابلیت ها 🔆",'callback_data'=>"feature_guide"],['text'=>"راهنمای نصب🛠",'callback_data'=>"نصب_guide"]],
			[['text'=>"برگشت به منو 🔙",'callback_data'=>"managemant_group_private"]]
			]]);
			editMessageText($chatid,$message_id2,"🔸را$channel صورتی که نمی دانید چگونه ربات را در گروه خود نصب کنید از این بخش استفاده کنید.\n\n🔹راهنمای قابلیت ها :\nدرصورتی که نمی دانید چگونه از دستورات و قابلیت های ربات استفاده کنید از این بخش استفاده کنید.\n\n[🌐کـــانال اطلاع رسانی🌐](https://telegram.me/$channel)",'MarkDown',$button_guide);
		}else{
			$button_guide=json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
			[['text'=>"Feature Guide 🔆",'callback_data'=>"feature_guide"],['text'=>"install Guide🛠",'callback_data'=>"نصب_guide"]],
			[['text'=>"Back to menu 🔙",'callback_data'=>"managemant_group_private"]]
			]]);
			editMessageText($chatid,$message_id2,"🔸install Guide :\nIf you do not know how to install the robot in your group, use this section.\n\n🔹Feature Guide :\nIf you do not know how to use robot commands and capabilities, use this section.\n\n[🌐our channel🌐](https://telegram.me/$channel)",'MarkDown',$button_guide);
		}
	}
}
//////////////////////////////////////////////////////////////////
if($data=='نصب_guide'){
	if($tc2=='private'){
		if($chatid==$dev){
			file_put_contents('data/bot/step.txt',$data);
		}
		if($members[$chatid]!='english'){
			$button_back_guide=json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
			[['text'=>"خانه 🏛",'callback_data'=>"hamed"]]
			]]);
			editMessageText($chatid,$message_id2,"راهنماینصب ربات در گروه :🔓\n\n1 . روی [این لینک](https://telegram.me/$usernamebot?startgroup=new) کلیک کنید و ربات را به گروه خود اضافه کنید.\n\n2 . سپس ربات را مدیر گروه خود کنید و دسترسی های کامل به آن بدهید.(دسترسی آخر یا همان اضافه کردن مدیر اجباری نیست !)\n\n3 . سپس دستور `نصب` و یا `پیکربندی` را داخل گروه خود ارسال کنید.\n\nربات به $usernamebotین راحتی داخل گروه شما نصب شد :)\n\n[🌐کـــانال اطلاع رسانی🌐](https://telegram.me/$channel)",'MarkDown',$button_back_guide);
		}else{
			$button_back_guide=json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
			[['text'=>"Back 🏛",'callback_data'=>"hamed"]]
			]]);
			editMessageText($chatid,$message_id2,"The robot installation guide for the group: 🔓 \n\n1. Click [This Link] (https://telegram.me/$usernamebot?startgroup=new) and add the robot to your group.\n\n2. Then manage your robot and give it full access. (The last access is the addition of a compulsory manager!) \n\n3. Then send the `install` command in your group. \n\nThe robot is installed within your group just as easily :) \n\n [$channel] (https://telegram.me/$channel)",'MarkDown',$button_back_guide);
		}
	}
}
/////////////////////////////////////////////////////////////////
if($data=='feature_guide'){
	if($tc2=='private'){
		if($chatid==$dev){
			file_put_contents('data/bot/step.txt',$data);
		}
		if($members[$chatid]!='english'){
			$button_back_guide=json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
			[['text'=>"خانه 🏛",'callback_data'=>"hamed"]]
			]]);
			editMessageText($chatid,$message_id2,"راهنمای استفاده از دستورات و قابلیی ربات :🔓\n\n• شما می توانید قبل از دستورات ربات علامت های ! / # را بگذارید و حتی می توانید بدون گذاشتن علامت دستوراات را ارسال کنید. مثال :\n`/panel` - `!panel` - `#panel` - `panel`\n\n• ربات اصلا به کوچکی و بزرگی حروف حساس نیست و شما می توانید دستورات را به هر نحوی که مایلید ارسال کنید. مثال :\n\n`PANEl` - `panel`\n\nدر کنار برخی دستورات کلماتی مانند :\n[[reply]] - [[username]] - [[id]]\nوجود دارد.\nشما نباید عینا آنها را قرار دهید. بلکه باید جایگزین آنها را قرار دهید.\n\n〰> [[reply]]\nیعنی شما باید روی پیام یک کاربر ریپلای کنید.\n\n〰> [[username]]\nیعنی باید یوزرنیمی را قرار دهید.\n\n〰> [[id]]\nیعنی باید شناسه عددی یک فرد را قرار دهید.(برای بدست آورردن شناسه یک فرد کافی است روی آن کاربر ریپلای کنید و دستور `id` را ارسال کنید.)\n\n• شما نباید از علامت های [[ و ]] استفاده کنید !\n\n• می توانید با ارسال `panel` تنظیمات گروه |⚙️ خود را دریافت کنید .\n\n[🌐کـــانال اطلاع رسانی🌐](https://telegram.me/$channel)",'MarkDown',$button_back_guide);
		}else{
			$button_back_guide=json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
			[['text'=>"Back 🏛",'callback_data'=>"hamed"]]
			]]);
			editMessageText($chatid,$message_id2,"A guide to using robot commands and capabilities: 🔓\n\n• You can mark robots before orders ! / # And you can even send commands without leaving the check mark. Example :\n`/panel` - `!panel` - `#panel` - `panel`\n\n• The robot is not at all small and large, and you can send commands in any way you like. Example :\n\n`PANEL` - `panel`\n\nAlong with some commands like:\n[[reply]] - [[username]] - [[id]]\nThere is.\nYou do not have to put them right. Instead, you must replace them.\n\n〰> [[reply]]\nThat is, you have to replay a user's message.\n\n〰> [[username]]\nThat means you have to put your username.\n\n〰> [[id]]\nThat is, you must place a person's numeric identifier (to get a person's identifier, simply click on that user and submit the `id` statement.)\n\n• You should not use the '[[' and ']]' symbols!\n\n• You can get group settings by sending the panel.\n\n[🌐کـــانال اطلاع رسانی🌐](https://telegram.me/$channel)",'MarkDown',$button_back_guide);
		}
		
	}
}
//////////////////////////////////////////////////////////////
if($data=='managemant'){
	if($tc2=='private'){
		if($chatid==$dev){
			file_put_contents('data/bot/step.txt',$data);
		}
		$button_managemant=buttonManagemant($chatid);
		if($members[$chatid]!='english'){
			editMessageText($chatid,$message_id2,"🏆مدیریت ربات شما🏆",'HTML',$button_managemant);
		}else{
			editMessageText($chatid,$message_id2,"🏆Your robot management🏆",'HTML',$button_managemant);
		}
	}
}
///////////////////////////////////////////////////////////////
if($data=='managemant_group_private'){
	if($tc2=='private'){
		if($chatid==$dev){
			file_put_contents('data/bot/step.txt',$data);
		}
		$button_panel_private=buttonPanelPrivate($chatid);
		if($members[$chatid]!='english'){
			editMessageText($chatid,$message_id2,$text_start_fa,'MarkDown',$button_panel_private);
		}else{
			editMessageText($chatid,$message_id2,$text_start_en,'MarkDown',$button_panel_private);
		}
	}
}
///////////////////////////////////////////////////////////////
if($data=='forward'){
	if($tc2=='private'){
		file_put_contents('data/bot/step.txt',$data);
		if($members[$chatid]!='english'){
			$button=json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
			[['text'=>'🔙برگشت','callback_data'=>'managemant']]
			]]);
			editMessageText($chatid,$message_id2,'🔻لطفا پیام خود را ارسال کنید :','HTML',$button);
		}else{
			$button=json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
			[['text'=>'🔙Back','callback_data'=>'managemant']]
			]]);
			editMessageText($chatid,$message_id2,'🔻Please send your message :','HTML',$button);
		}
	}
}
if(isset($update->message) && $chatid==$dev && file_get_contents('data/bot/step.txt')=='forward'){
	file_put_contents('data/bot/step.txt','managemant');
	$members=array_keys($members);
	foreach($members as $key){
		bot('forwardMessage',[
		'chat_id'=>$key,
		'from_chat_id'=>$chatid,
		'message_id'=>$message_id
		]);
	}
	if($members[$update->message->chat->id]!='english'){
		sendMessage($update->message->chat->id,'پیام شما به همه ارسال شد :)','HTML',buttonManagemant($update->message->chat->id),null);
	}else{
		sendMessage($update->message->chat->id,'Your message sent to all :)','HTML',buttonManagemant($update->message->chat->id),null);
	}
	die;
}
//////////////////////////////////////////////////////////////////////////////////////////////
if($data=='forward_group'){
	if($tc2=='private'){
		file_put_contents('data/bot/step.txt',$data);
		if($members[$chatid]!='english'){
			$button=json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
			[['text'=>'🔙برگشت','callback_data'=>'managemant']]
			]]);
			editMessageText($chatid,$message_id2,'🔻لطفا پیام خود را ارسال کنید :','HTML',$button);
		}else{
			$button=json_encode(['resize_keyboard'=>true,'inline_keyboard'=>[
			[['text'=>'🔙Back','callback_data'=>'managemant']]
			]]);
			editMessageText($chatid,$message_id2,'🔻Please send your message :','HTML',$button);
		}
	}
}
if(isset($update->message) && $chatid==$dev && file_get_contents('data/bot/step.txt')=='forward_group'){
	file_put_contents('data/bot/step.txt','managemant');
	$groups=array_keys($groups);
	foreach($groups as $key){
		bot('forwardMessage',[
		'chat_id'=>$key,
		'from_chat_id'=>$chatid,
		'message_id'=>$message_id
		]);
	}
	if($members[$update->message->chat->id]!='english'){
		sendMessage($update->message->chat->id,'پیام شما به همه ارسال شد :)','HTML',buttonManagemant($update->message->chat->id),null);
	}else{
		sendMessage($update->message->chat->id,'Your message sent to all :)','HTML',buttonManagemant($update->message->chat->id),null);
	}
	die;
}
?>