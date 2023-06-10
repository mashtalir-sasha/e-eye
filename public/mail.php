<?
if(isset ($_POST['title'])) {$title=$_POST['title'];}
if(isset ($_POST['name'])) {$name=$_POST['name'];}
if(isset ($_POST['phone'])) {$phonenum=$_POST['phone'];}
if(isset ($_POST['email'])) {$email=$_POST['email'];}


$to = "mashtalir.sasha@gmail.com";

$message = "Форма: $title <br><br>";
if ( $page || $name || $phonenum || $email ) {
	$message .= ""
		. ( $name ?" Имя:  $name <br>" : "")
		. ( $phonenum ?" Телефон:  $phonenum <br>" : "")
		. ( $service ?" E-mail:  $email <br>" : "");
}

$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= 'From: "Заявки с сайта" <no-reply@u-eye.com.ua>';

if (!$title || !$phonenum) {
} else {
	mail($to,"New lead(u-eye)",$message,$headers);
}

?>