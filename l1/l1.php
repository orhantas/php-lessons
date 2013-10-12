<?php
//oturumu başlatıyoruz
session_start();
//post ile gönderilmiş gönderilerimizi kontrol ediyoruz
if($_POST)
{
	//posttan gelen verileri değişkenlere atıyoruz
	$user = $_POST["user"];
	$pass = $_POST["pass"];
	//kullanıcı adı admin şifre 1234 mü kontrolü yapıyoruz
	if($user == "admin" && $pass == "1234")
	{
		//şifre doğru ise idsini atıyoruz
		$_SESSION["id"]="loggedin";
	}
	else
	{
		//değil ise bilgilendirme yapıyoruz
		echo "pass is wrong";
	}
}
//get ile gönderilmiş gönderilerimizi kontrol ediyoruz
//cikis anahtarınıda kontrol ediyoruz
if($_GET && isset($_GET["cikis"]))
{
	unset($_SESSION["id"]);
}
//oturumdaki id anahtarını kontrol ediyoruz ve varsa hatırlama mesajı görüntülüyoruz
if(isset($_SESSION["id"]))
{
	echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">';
	echo "biz sizi hatırladık <a href='?cikis'>cikis</a>";
	//siteyi bu noktada durduruyoruz.
	die();
}
 ?>