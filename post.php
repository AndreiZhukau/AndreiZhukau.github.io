<?php
 /* Здесь проверяется существование переменных */
  if (isset($_POST['phoneFF'])) {$phoneFF = $_POST['phoneFF'];}
 if (isset($_POST['nameFF'])) {$nameFF = $_POST['nameFF'];}

 if (isset($_POST['mailFF'])) {$mailFF = $_POST['mailFF'];}
if (isset($_POST['messageFF'])) {$messageFF = $_POST['messageFF'];}
 
/* Сюда впишите свою эл. почту */
 $address = "test@bk.ru";

/* А здесь прописывается текст сообщения, \n - перенос строки */
 $mes = "\nТелефон: $phoneFF\nИмя: $nameFF\nmail: $mailFF\nВопрос: $messageFF";

/* А эта функция как раз занимается отправкой письма на указанный вами email */
$sub='Заявка с сайта Ремонт ванных комнат и санузлов'; //сабж
$email=''; // от кого
 $send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = utf-8\r\nFrom:$email");

ini_set('short_open_tag', 'On');

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>Спасибо за заказ!</title>
<script type="text/javascript">
setTimeout('location.replace("./")', 5000);
/*Изменить текущий адрес страницы через 3 секунды (3000 миллисекунд)*/
</script> 
</head>
<body>
<style>body{background:url(acss/fon.png) repeat scroll 0 0 rgba(0,0,0,0);color:#313E47;font-family:Arial;font-size:15px;height:100%;line-height:1;width:100%}html{height:100%}ol,ul{list-style:none outside none}h2{color:#313E47;font-size:36px;font-weight:700;line-height:44px;text-align:center;text-transform:uppercase}h3{font-size:18px;font-weight:700;text-align:center;margin:20px 0}a{color:#69B9FF}.order_number{color:#424242;font-family:Arial;font-size:30px;line-height:38px;text-align:center;text-transform:uppercase;margin:25px 0}.url_more_info{display:block;font-size:20px;text-align:center;margin:20px 0}.block_success{max-width:960px;margin:0 auto;padding:0 30px}.list_info{display:inline-block;text-align:left}.list_info li{margin:11px 0}.list_info li span{display:inline-block;font-style:normal;font-weight:700;width:150px}.fail{text-align:center;margin:25px 0 50px}.email{margin-top:40px;position:relative;text-align:center}.error{color:#CA3F3F;display:none;position:absolute;top:-28px}.mail_block{display:inline-block}.email input{border:1px solid #B6B6B6;border-radius:5px;font-size:14px;height:30px;margin-bottom:10px;outline:medium none;padding-left:10px;padding-right:10px;width:200px}.button{background:0 repeat scroll 0 0 rgba(0,0,0,0);border:1px solid #0076A3;border-radius:.5em;box-shadow:0 1px 2px rgba(0,0,0,0.2);color:#D9EEF7;cursor:pointer;display:inline-block;font:15px/100% Arial,Helvetica,sans-serif;outline:medium none;text-align:center;text-decoration:none;text-shadow:0 1px 1px rgba(0,0,0,0.3);padding:.55em 2em .6em}.button:hover{background:0 repeat scroll 0 0 rgba(0,0,0,0);color:#D9EEF7;text-decoration:none}.button:active{background:0 repeat scroll 0 0 rgba(0,0,0,0);color:#80BED6;position:relative;top:1px}.disabled{background:0 repeat scroll 0 0 rgba(0,0,0,0);color:#80BED6}.disabled:hover{background:0 repeat scroll 0 0 rgba(0,0,0,0);color:#80BED6;cursor:default}.disabled:active{top:0}.mail_s{color:green;position:inherit;top:0}a:hover,.order_number span,.url_more_info:hover{color:#E14740}.success,.wrap_list_info{text-align:center}</style>
<br/>
<center>
<img align='center' src='acss/index.png'></center>
<div class='wrap_block_success'>
<div class='block_success'><h2>Поздравляем! Ваш заказ принят!</h2>
<p class='success'>В ближайшее время с вами свяжется оператор для подтверждения заказа. Пожалуйста, включите ваш контактный телефон.</p><h1 style='color:#FF0000; text-align: center;' >Спасибо что выбрали нас!</h1></div>

</body>
</html>