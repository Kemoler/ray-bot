<?php 
ini_set("display_errors",1);
error_reporting(E_ALL);
if (!isset($_REQUEST)) { 
  return; 
} 
$stf = '{ 
    "one_time": true, 
    "buttons": [ 
      [{ 
        "action": { 
          "type": "text", 
          "payload": "{\"button\": \"1\"}", 
          "label": "Да" 
        }, 
        "color": "positive" 
      }, 
     { 
        "action": { 
          "type": "text", 
          "payload": "{\"button\": \"2\"}", 
          "label": "Нет" 
        }, 
        "color": "negative" 
      }],[
     { 
        "action": { 
          "type": "text", 
          "payload": "{\"button\": \"4\"}", 
          "label": "Меню" 
        }, 
        "color": "primary" 
      }]  
    ] 
  } ';
$a0 = '{ 
    "one_time": false, 
    "buttons": [ 
      [{ 
        "action": { 
          "type": "text", 
          "payload": "{\"button\": \"1\"}", 
          "label": "Добавить задание" 
        }, 
        "color": "positive" 
      }],[ 
     { 
        "action": { 
          "type": "text", 
          "payload": "{\"button\": \"2\"}", 
          "label": "Удалить задание" 
        }, 
        "color": "negative" 
      }],[
     { 
        "action": { 
          "type": "text", 
          "payload": "{\"button\": \"4\"}", 
          "label": "Выставить баллы" 
        }, 
        "color": "primary" 
      },{ 
        "action": { 
          "type": "text", 
          "payload": "{\"button\": \"4\"}", 
          "label": "Меню" 
        }, 
        "color": "primary" 
      }]  
    ] 
  } ';
$s0 = '{ 
    "one_time": false, 
    "buttons": [ 
      [{ 
        "action": { 
          "type": "text", 
          "payload": "{\"button\": \"1\"}", 
          "label": "Помощь" 
        }, 
        "color": "negative" 
      }, 
     { 
        "action": { 
          "type": "text", 
          "payload": "{\"button\": \"2\"}", 
          "label": "Подписаться на рассылку" 
        }, 
        "color": "positive" 
      }], 
      [{ 
        "action": { 
          "type": "text", 
          "payload": "{\"button\": \"3\"}", 
          "label": "Заполнить данные" 
        }, 
        "color": "default" 
      }, 
     { 
        "action": { 
          "type": "text", 
          "payload": "{\"button\": \"4\"}", 
          "label": "Рейтинг" 
        }, 
        "color": "primary" 
      }] 
    ] 
  } ';
$s1 = '{ 
    "one_time": false, 
    "buttons": [ 
      [{ 
        "action": { 
          "type": "text", 
          "payload": "{\"button\": \"1\"}", 
          "label": "Срочно требуется помощь" 
        }, 
        "color": "negative" 
      }, 
     { 
        "action": { 
          "type": "text", 
          "payload": "{\"button\": \"2\"}", 
          "label": "Показать задания" 
        }, 
        "color": "positive" 
      }], 
      [{ 
        "action": { 
          "type": "text", 
          "payload": "{\"button\": \"3\"}", 
          "label": "Предложения исходя из моих данных" 
        }, 
        "color": "default" 
      }, 
     { 
        "action": { 
          "type": "text", 
          "payload": "{\"button\": \"4\"}", 
          "label": "Задонатить деньги" 
        }, 
        "color": "primary" 
      }],[
     { 
        "action": { 
          "type": "text", 
          "payload": "{\"button\": \"4\"}", 
          "label": "Меню" 
        }, 
        "color": "primary" 
      }]  
    ] 
  } ';
$s2 = '{ 
    "one_time": false, 
    "buttons": [ 
      [{ 
        "action": { 
          "type": "text", 
          "payload": "{\"button\": \"1\"}", 
          "label": "Уведомлять сразу при появлении заявки" 
        }, 
        "color": "negative" 
      }], 
      [{ 
        "action": { 
          "type": "text", 
          "payload": "{\"button\": \"6\"}", 
          "label": "Уведомлять о срочных сразу" 
        }, 
        "color": "positive" 
      }], 
      [{ 
        "action": { 
          "type": "text", 
          "payload": "{\"button\": \"2\"}", 
          "label": "Уведомлять раз в день" 
        }, 
        "color": "default" 
      }],[ 
     { 
        "action": { 
          "type": "text", 
          "payload": "{\"button\": \"3\"}", 
          "label": "Уведомлять раз в неделю" 
        }, 
        "color": "primary" 
      }],[{ 
        "action": { 
          "type": "text", 
          "payload": "{\"button\": \"5\"}", 
          "label": "Отписаться" 
        }, 
        "color": "negative" 
      },
     { 
        "action": { 
          "type": "text", 
          "payload": "{\"button\": \"4\"}", 
          "label": "Меню" 
        }, 
        "color": "primary" 
      }]  
    ] 
  } ';
  $s3 = '{ 
    "one_time": false, 
    "buttons": []}';
$v = '5.87';

//Ключ доступа сообщества 
$token = '85cda2b85f46db1792f54b7dcb0ea90be1ed7fd505e030182df2ba98c1c37c490d423112d70791ad8d11b'; 

function send_mes($user_id,$mes){
	$request_params = array( 
      'message' => "$mes", 
      'user_id' => $user_id, 
      'access_token' => '85cda2b85f46db1792f54b7dcb0ea90be1ed7fd505e030182df2ba98c1c37c490d423112d70791ad8d11b', 
      'v' => '5.87'
    ); 
    
	$get_params = http_build_query($request_params); 

	file_get_contents('https://api.vk.com/method/messages.send?'. $get_params); 
}
function send_bom($user_id,$mes,$board){
	$request_params = array( 
      'message' => "$mes", 
      'user_id' => $user_id, 
      'access_token' => '85cda2b85f46db1792f54b7dcb0ea90be1ed7fd505e030182df2ba98c1c37c490d423112d70791ad8d11b', 
      'v' => '5.87',
      'keyboard'=>$board
    ); 
    
	$get_params = http_build_query($request_params); 

	file_get_contents('https://api.vk.com/method/messages.send?'. $get_params); 
}

//Строка для подтверждения адреса сервера из настроек Callback API 
$confirmation_token = 'd2084927'; 

//Получаем и декодируем уведомление 
$data = json_decode(file_get_contents('php://input')); 

//Проверяем, что находится в поле "type" 
switch ($data->type) { 
  //Если это уведомление для подтверждения адреса... 
  case 'confirmation': 
    //...отправляем строку для подтверждения 
    echo $confirmation_token; 
    break; 

//Если это уведомление о новом сообщении... 
  case 'message_new': 
    //...получаем id его автора 
	$user_id = $data->object->from_id; 
	$text = $data->object->text; 
	//print_r($data);
	//затем с помощью users.get получаем данные об авторе 
	$user_info = json_decode(file_get_contents("https://api.vk.com/method/users.get?user_ids={$user_id}&access_token={$token}&v={$v}")); 
	
	//и извлекаем из ответа его имя 
	$user_name = $user_info->response[0]->first_name . ' '.  $user_info->response[0]->last_name; 
	
	//send_mes($user_id,$user_name);
	$link = mysqli_connect('127.0.0.1','cr59443_rays','1qwe23','cr59443_rays') or die('4234' . mysql_error());
	$query = "SELECT * FROM `users` WHERE `user_id` = {$user_id}";
	$res = mysqli_query($link,$query) or die('111' . mysql_error());
	if (!($res->num_rows)){
		$query = "INSERT INTO `users`(`user_id`) VALUES ({$user_id})";
		$res = mysqli_query($link,$query) or die('111' . mysql_error());
		send_mes($user_id,'Поздравсляем, вы теперь можете выполнять задания и помогать бездобным животным. Советуем указать данные о себе для того, чтобы мы могли подбирать вам ревальвантные задания.');
		send_bom($user_id,'Список команд доступен прикреплен в кнопочных вложениях',$s0);
	}else{
		while ($row = mysqli_fetch_assoc($res)) {
	    	$rate =  $row['rate'];
	    	$count =  $row['count'];
	    	$adm =  $row['is_adm'];
	    	$states =  $row['state'];
		}
		if (($adm == 1) && ($text!="codsec")|| ($text == "secretcod")){
			if ($text == "secretcod"){
				$query = "UPDATE `users` SET `is_adm`=1  WHERE `user_id`={$user_id}";
				$res = mysqli_query($link,$query) or die('111' . mysql_error());
				send_bom($user_id,"Поздравляем! Вы назначены администратором и теперь можете создавать свои задания!",$a0);
			} else{
				switch($text){
					case "Меню":
						send_bom($user_id,"Вы можете использовать следующие команды:",$a0);
						break;
					case "Добавить задание":
						$query = "UPDATE `users` SET `state`=222  WHERE `user_id`={$user_id}";
						$res = mysqli_query($link,$query) or die('111' . mysql_error());
						send_bom($user_id,"Отлично! Теперь опишите задание и отправьте описание следующим сообщением",$s3);
						break;
					case "Выставить баллы":
						$query = "SELECT * FROM `ret` WHERE `req_id` = {$user_id}";
						$res = mysqli_query($link,$query) or die('111' . mysql_error());
						$query = "SELECT `id`,  `descr`, `place` FROM `req`  WHERE `id_au`={$user_id} ";
						$res = mysqli_query($link,$query) or die('1121' . mysql_error());
						$ans = "ВВедите номер задания.\n";
						while ($row = mysqli_fetch_assoc($res)) {
							$ans.=$row['id'].'  -  '. substr($row['descr'],0,50).';'.substr($row['place'],0,50)."\n";
						}
						$query = "UPDATE `users` SET `state`=999  WHERE `user_id`={$user_id}";
						$res = mysqli_query($link,$query) or die('111' . mysql_error());
						send_mes($user_id,$ans);
						break;
					case "Удалить задание":
						$query = "UPDATE `users` SET `state`=146  WHERE `user_id`={$user_id}";
						$res = mysqli_query($link,$query) or die('111' . mysql_error());
						send_bom($user_id,"Советуем проставить баллы до удаления задания. Укажите номер задания, которое хотите удалить или введите 'Меню' чтобы вернуться",$s3);
						$query = "SELECT `id`,  `descr`, `place` FROM `req`  WHERE `id_au`={$user_id} AND `ena`=1";
						$res = mysqli_query($link,$query) or die('1121' . mysql_error());
						$ans = "ВВедети номер задания \n";
						while ($row = mysqli_fetch_assoc($res)) {
							$ans.=$row['id'].'  -  '. substr($row['descr'],0,50).';'.substr($row['place'],0,50)."\n";
						}
						send_mes($user_id,$ans);
						break;
				}
				switch($states){
					case 146:
						if (is_numeric($text)){
							$query = "UPDATE `req` SET `ena`=0  WHERE `id`={$text}";
							$res = mysqli_query($link,$query) or die('111' . mysql_error());
						$query = "UPDATE `users` SET `state`=0  WHERE `user_id`={$user_id}";
						$res = mysqli_query($link,$query) or die('111' . mysql_error());
							send_bom($user_id,"Готово. Вы можете использовать следующие команды:",$a0);
						}
						else{
							send_bom($user_id,"Не было введено числа. Вы можете использовать следующие команды:",$a0);
						}
						break;
					case 404:
						if (is_numeric($text)){
							$query = "UPDATE `ret` SET `points`=2 WHERE `id` = $text";
							$res = mysqli_query($link,$query) or die('111' . mysql_error());
							$query = "SELECT `user_id` FROM `ret` WHERE `id` = $text";
							$res = mysqli_query($link,$query) or die('111' . mysql_error());
							while ($row = mysqli_fetch_assoc($res))
						{$uset = $row['ures_id'];}
							$query = "SELECT  `rate` FROM `users` WHERE `user_id` =  $uset";
							$res = mysqli_query($link,$query) or die('111' . mysql_error());
							while ($row = mysqli_fetch_assoc($res))
						{$rrat = $row['rate']+2;}
							$query = "UPDATE `users` SET `rate`=$rrat WHERE `user_id` = $uset";
							$res = mysqli_query($link,$query) or die('111' . mysql_error());
						$query = "UPDATE `users` SET `state`=0  WHERE `user_id`={$user_id}";
						$res = mysqli_query($link,$query) or die('111' . mysql_error());
							send_bom($user_id,"Готово. Вы можете использовать следующие команды:",$a0);
						}
						else{
							send_bom($user_id,"Не было введено числа. Вы можете использовать следующие команды:",$a0);
						}
						break;
					case 999:
						if (is_numeric($text)){$query = "SELECT * FROM `ret` WHERE req_id={$text} ";
						$res = mysqli_query($link,$query) or die('1121' . mysql_error());
						$ans = "ВВедите номер человека, кооторому вы хотите выставить баллы\n.";
						while ($row = mysqli_fetch_assoc($res))
						{$uset = json_decode(file_get_contents("https://api.vk.com/method/users.get?user_ids=".$row['user_id']."&access_token={$token}&v={$v}")); 
	
	//и извлекаем из ответа его имя 
	$useg = $uset->response[0]->first_name . ' '.  $uset->response[0]->last_name; 
							$ans.=$row['id'].'  -  '. "[id".$row['user_id']."|".$useg."]\n";
						}
						$query = "UPDATE `users` SET `state`=404  WHERE `user_id`={$user_id}";
						$res = mysqli_query($link,$query) or die('111' . mysql_error());
							send_mes($user_id,$ans);
						}
						else{
							send_bom($user_id,"Не было введено числа. Вы можете использовать следующие команды:",$a0);
						}
						break;
					case 222:
						$query = "INSERT INTO `req`( `id_au`, `descr`) VALUES ($user_id,'$text')";
						$res = mysqli_query($link,$query) or die('111' . mysql_error());
						$query = "UPDATE `users` SET `state`=223  WHERE `user_id`={$user_id}";
						$res = mysqli_query($link,$query) or die('111' . mysql_error());
						send_bom($user_id,"Отлично! Теперь отправьте следующим сообщением название места",$s3);
						break;
					case 223:
						$query = "SELECT `id` FROM `req` WHERE `id_au`= {$user_id} ORDER BY `id` DESC LIMIT 1";
						$res = mysqli_query($link,$query) or die('111' . mysql_error());
						$idid = 0;
						while ($row = mysqli_fetch_assoc($res)) {
							$idid = $row['id'];
						}
						$query = "UPDATE `req` SET `place`='{$text}' WHERE `id`={$idid}";
						$res = mysqli_query($link,$query) or die('111' . mysql_error());
						$query = "UPDATE `users` SET `state`=224  WHERE `user_id`={$user_id}";
						$res = mysqli_query($link,$query) or die('111' . mysql_error());
						send_bom($user_id,"Отлично! Теперь прикрепите к следующему сообщению координаты места или отправьте сообщение с любым текстом.",$s3);
						break;
					case 224:
						$query = "SELECT `id` FROM `req` WHERE `id_au`= {$user_id} ORDER BY `id` DESC LIMIT 1";
						$res = mysqli_query($link,$query) or die('111' . mysql_error());
						$idid = 0;
						while ($row = mysqli_fetch_assoc($res)) {
							$idid = $row['id'];
						}
						//print_r($data);
						$lat = $data->object->geo->coordinates->latitude;
						$long = $data->object->geo->coordinates->longitude;
						$query = "UPDATE `req` SET `lat`='{$lat}', `lon`='{$long}' WHERE `id`={$idid}";
						$res = mysqli_query($link,$query) or die('111' . mysql_error());
						$query = "UPDATE `users` SET `state`=225  WHERE `user_id`={$user_id}";
						$res = mysqli_query($link,$query) or die('111' . mysql_error());
						send_bom($user_id,"Отлично! Теперь ответьте на вопрос только Да или Нет. Срочная ли помощь требуется?.",$stf);
						break;
					case 225:
						$query = "SELECT * FROM `req` WHERE `id_au`= {$user_id} ORDER BY `id` DESC LIMIT 1";
						$res8 = mysqli_query($link,$query) or die('111' . mysql_error());
						$idid = 0;
						while ($row = mysqli_fetch_assoc($res8)) {
							$idid = $row['id'];
						}
						$ands = 0;
						if ($text == 'Да'){$ands = 1;}
						$query = "UPDATE `req` SET `urg`={$ands} WHERE `id`={$idid}";
						$res = mysqli_query($link,$query) or die('111' . mysql_error());
						$query = "UPDATE `users` SET `state`=0  WHERE `user_id`={$user_id}";
						$res = mysqli_query($link,$query) or die('111' . mysql_error());
						send_bom($user_id,"Отлично! Запрос помощи добавлен.",$a0);
						if ($ands ==1){$query = "SELECT `user_id` FROM `users` WHERE `subs` = 4";}
						else {$query = "SELECT `user_id` FROM `users` WHERE `subs` = 3";}
						$res4 = mysqli_query($link,$query) or die('111' . mysql_error());
						$idid = 0;
						while ($row = mysqli_fetch_assoc($res4)) {
							$idid = $row['user_id'];
							send_mes($idid,"Пользователь ".$user_name."(vk.com/id".$user_id." только что добавил задание:\n".$res8['descr']."\n".$res8['place']."\nВы можете связаться с ним для того, чтобы выполнить задание");
						}
						break;
				}
				}
		} else{
			$state =  5;
			if ($states==641){
				if (is_numeric($text)){
							$query = "INSERT INTO `ret`(`user_id`, `req_id`) VALUES ($user_id,$text)";
							$res = mysqli_query($link,$query) or die('111' . mysql_error());
						$query = "UPDATE `users` SET `state`=0  WHERE `user_id`={$user_id}";
						$res = mysqli_query($link,$query) or die('111' . mysql_error());
							send_bom($user_id,"Готово. Вы можете использовать следующие команды:",$a0);
						}
						else{
							send_bom($user_id,"Не было введено числа. Вы можете использовать следующие команды:",$s0);
						}
			}else
			if ($states >110){
				if ($text=='Да'){
					if ($states == 111){
						$query = "UPDATE `users` SET `car`=1,`state`=112  WHERE `user_id`={$user_id}";
						$res = mysqli_query($link,$query) or die('111' . mysql_error());
						send_bom($user_id,"Можете ли вы физически тяжелую работу?",$stf);
					}else if ($states == 112){
						$query = "UPDATE `users` SET `hard`=1,`state`=113  WHERE `user_id`={$user_id}";
						$res = mysqli_query($link,$query) or die('111' . mysql_error());
						send_bom($user_id,"Можете ли вы выезжать куда-нибудь для помощи?",$stf);
					}else if ($states == 113){
						$query = "UPDATE `users` SET `offline`=1,`state`=0  WHERE `user_id`={$user_id}";
						$res = mysqli_query($link,$query) or die('111' . mysql_error());
						send_bom($user_id,"Спасибо что заполнили данные о себе",$s0);
					}
				} else if ($text=='Нет'){
					if ($states == 111){
						$query = "UPDATE `users` SET `car`=0,`state`=112  WHERE `user_id`={$user_id}";
						$res = mysqli_query($link,$query) or die('111' . mysql_error());
						send_bom($user_id,"Можете ли вы физически тяжелую работу?",$stf);
					}else if ($states == 112){
						$query = "UPDATE `users` SET `hard`=0,`state`=113  WHERE `user_id`={$user_id}";
						$res = mysqli_query($link,$query) or die('111' . mysql_error());
						send_bom($user_id,"Можете ли вы выезжать куда-нибудь для помощи?",$stf);
					}else if ($states == 113){
						$query = "UPDATE `users` SET `offline`=0,`state`=0  WHERE `user_id`={$user_id}";
						$res = mysqli_query($link,$query) or die('111' . mysql_error());
						send_bom($user_id,"Спасибо что заполнили данные о себе",$s0);
					}
				} else {
						$query = "UPDATE `users` SET `state`=0  WHERE `user_id`={$user_id}";
						$res = mysqli_query($link,$query) or die('111' . mysql_error());
					send_bom($user_id,"Ответ не распознан.",$s0);
				}
			} else {
				switch($text){
					case 'codsec':
						$query = "UPDATE `users` SET `is_adm`=0  WHERE `user_id`={$user_id}";
						$res = mysqli_query($link,$query) or die('111' . mysql_error());
				send_bom($user_id,"Вы не администратор.",$s0);
					case 'Меню':
						$state = 0;
						break;
					case 'Помощь':
						$state = 1;
						break;
					case 'Подписаться на рассылку':
						$state = 2;
						break;
					case 'Уведомлять сразу при появлении заявки':
						$query = "UPDATE `users` SET `subs`=3 WHERE `user_id`={$user_id}";
						$res = mysqli_query($link,$query) or die('111' . mysql_error());
						send_bom($user_id,"Спасибо что подписались на нашу рассылку)",$s0);
						break;
					case 'Показать задания':
						$query = "UPDATE `users` SET `state`=641  WHERE `user_id`={$user_id}";
						$res = mysqli_query($link,$query) or die('111' . mysql_error());
						send_bom($user_id,"Советуем проставить баллы до удаления задания. Укажите номер задания, которое хотите удалить или введите 'Меню' чтобы вернуться",$s3);
						$query = "SELECT `id`,  `descr`, `place` FROM `req`  WHERE `id_au`={$user_id} AND `ena`=1";
						$res = mysqli_query($link,$query) or die('1121' . mysql_error());
						$ans = "ВВедети номер задания \n";
						while ($row = mysqli_fetch_assoc($res)) {
							$ans.=$row['id'].'  -  '. substr($row['descr'],0,50).';'.substr($row['place'],0,50)."\n";
						}
						send_mes($user_id,$ans);
						break;
					case 'Уведомлять раз в день':
						$query = "UPDATE `users` SET `subs`=1 WHERE `user_id`={$user_id}";
						$res = mysqli_query($link,$query) or die('111' . mysql_error());
						send_bom($user_id,"Спасибо что подписались на нашу рассылку)",$s0);
						break;
					case 'Уведомлять раз в неделю':
						$query = "UPDATE `users` SET `subs`=2 WHERE `user_id`={$user_id}";
						$res = mysqli_query($link,$query) or die('111' . mysql_error());
						send_bom($user_id,"Спасибо что подписались на нашу рассылку)",$s0);
						break;
					case 'Уведомлять о срочных сразу':
						$query = "UPDATE `users` SET `subs`=4 WHERE `user_id`={$user_id}";
						$res = mysqli_query($link,$query) or die('111' . mysql_error());
						send_bom($user_id,"Спасибо что подписались на нашу рассылку)",$s0);
						break;
					case 'Отписаться':
						$query = "UPDATE `users` SET `subs`=0 WHERE `user_id`={$user_id}";
						$res = mysqli_query($link,$query) or die('111' . mysql_error());
						send_bom($user_id,"Очень жаль, что вы отписались от рассылки(",$s0);
						break;
					case 'Задонатить деньги':
						send_bom($user_id,"Вот ссылка для доната через ВК vk.cc/8Gogan",$s0);
						break;
					case 'Заполнить данные':
						$query = "UPDATE `users` SET `state`=111 WHERE `user_id`={$user_id}";
						$res = mysqli_query($link,$query) or die('111' . mysql_error());
						send_bom($user_id,"Анкета из трех вопросов. Отвечайте только Да или Нет.\nВы можете помочь автомобилем?",$stf);
						break;
					case 'Рейтинг':
						$query = "SELECT user_id, rate FROM `users` ORDER BY rate DESC";
						$res = mysqli_query($link,$query) or die('111' . mysql_error());
						$ans = '';
						$me = 0;
						$i = 0;
						while ($row = mysqli_fetch_assoc($res)) {
							$i++;
							if ($row['user_id'] == $user_id){
								$me = $i;
							}
							if ($i<=5){
						    	$uid =  $row['user_id'];
								$user_info = json_decode(file_get_contents("https://api.vk.com/method/users.get?user_ids={$uid}&access_token={$token}&v={$v}")); 
								$ans.= "$i".') '.$user_info->response[0]->first_name . ' '.  $user_info->response[0]->last_name."\n"; 
							}
							
						}
						send_bom($user_id,$ans,$s0);
						break;
				}
				switch($state){
					case 0:
						send_bom($user_id,"Вы можете использовать следующие команды:",$s0);
						break;
					case 1:
						send_bom($user_id,"Выберете, какая помощь вас интересует?",$s1);
						break;
					case 2:
						send_bom($user_id,"Выберете, как часто вы хотите получать уведомления",$s2);
						break;
				}
			}
		}
	}
	//Возвращаем "ok" серверу Callback API 
	
	echo('ok'); 
	break;
}

// $link = mysqli_connect('127.0.0.1','cr59443_rays','1qwe23','cr59443_rays')
//    or die('4234' . mysql_error());
//    $query = "SELECT DISTINCT `word` from `send` ";
//	$res = mysqli_query($link,$query) or die('111' . mysql_error());

 
?> 