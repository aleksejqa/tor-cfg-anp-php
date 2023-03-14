<!DOCTYPE html>
<html>
<head>
    <title>Запуск скрипта</title>
	
	<script>
	function getData() {
document.getElementById('ipp').innerHTML="";
  fetch('http://ipwho.is/')
    .then(response => response.json())
    .then(data => {
      // Вывод информации на страницу
	document.getElementById('ipp').innerHTML = 'IP: ' + data.ip;
      document.getElementById('country').innerHTML = 'Страна: ' + data.country +" " + data.flag.emoji;
      document.getElementById('state').innerHTML = 'Штат: ' + data.region;
    })
    .catch(error => {
      console.error('Ошибка:', error);
    });
}


</script>
</head>
<body>
  
    <form method="post">
        <button type="submit" name="run_script">Сменить TOR ip</button>
    </form>
	
	
	   <form method="post">
        <button type="submit" name="run_script2">Перезапуск тора</button>
    </form>
	
	<button onclick="getData()">Получить информацию об IP-адресе</button>
	<br><br>
<div id="ipp"></div>
<div id="country"></div>
<div id="state"></div>
<pre>

<?php

if (isset($_POST['run_script2'])) {
	echo shell_exec("whoami");
	
		//echo "<pre>".print_r(system('sudo killall tor') )."</pre>";
	echo "<pre>".print_r(system('nohup killall tor') )."</pre>";
		
		

	echo system('nohup /usr/local/bin/tor -f /usr/local/etc/tor/torrc') ;



	//echo "<pre>".print_r(hell_exec('service tor reload >/dev/null 2>/dev/null &') )."</pre>";
}


if (isset($_POST['run_script'])) {
	

	

$fp = fsockopen('127.0.0.1', 31151, $errno, $errstr, 30);
$auth_code = 'my_password';

fputs($fp, "AUTHENTICATE \"".$auth_code."\"\r\n");
$response = fread($fp, 1024);
list($code, $text) = explode(' ', $response, 2);
if ($code = '250')     echo "Подключение Успешно..";


fputs($fp, "SIGNAL NEWNYM\r\n");
$response = fread($fp, 1024);
list($code, $text) = explode(' ', $response, 2);
if ($code = '250') {
    echo "Ип изменён";
}
else {
    echo "eroor";
    die();       
}
fclose($fp);


}


?>

	</pre>
	
</body>
</html>
