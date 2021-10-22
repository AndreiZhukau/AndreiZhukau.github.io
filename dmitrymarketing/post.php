<?
$sendto = "test@bk.ru"; //Почта для приема заявок
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];

// Формирование заголовка письма
$subject = "Заявка с сайта Продвижение сайтов"; //Тема письма
$headers = ""; //От кого
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

// Формирование тела письма
$msg = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<p><strong>Имя:</strong> ".$name."</p>\r\n";
$msg .= "<p><strong>Телефон:</strong> ".$phone."</p>\r\n";
$msg .= "</body></html>";

mail($sendto, $subject, $msg, $headers);

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<title>С вами свяжутся</title>
<meta name="generator"><style type="text/css">

.style1 {font-size: 26px;
margin-top: 150px;}
.style3 {font-family: Arial, Helvetica, sans-serif;
background:#86e289;
padding:3px; width: 50px;
border-radius:5px;}
.style4 {font-family: Arial, Helvetica, sans-serif}
a { text-color:fff;
text-decoration:none;
}
.style5 {color: #FFFFFF}

</style>
<body>
<div align="center" class="style1">
  <p class="style4"><img class="" alt="" style="width: 134px;" src="ok.png"><p class="style4">Спасибо!
    <br/>Ваша заявка отправлена.<br/>В ближайшее время мы с Вами свяжемся!</p>
  <p class="style3"><a href="./" class="style5">OK</a></p>
</div>
<script type="text/javascript">

/*Изменить текущий адрес страницы через 3 секунды (3000 миллисекунд)*/
</script> 
</head>
</body>
</html>
      