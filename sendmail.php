<!--SendMail-->
<?php
	if (isset($_POST)){
	
		$name_U=$_POST['name_U'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		
		$result = mail('kirillkoshel0108@gmail.com', 'Повідомлення з сайту', $name_U."\n".$phone."\n".$email."\n".$pass);
		if($result) {
			echo 'Дані відправлено на mail';
		}
		else {
			echo 'Вийшла помилка';
		}
	}
?>

<!--SendFile-->
<?php
	$data = array($name_U, $phone, $email, $pass);
	$str = implode(' ', $data);
	$h = fopen('quest_book.txt', 'a');
	fwrite($h, $str);
	echo 'Дані записано у файл quest_book.txt';
?>