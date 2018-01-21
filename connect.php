<?
$inputuser = $_POST["user"];
$inputpassword = $_POST["password"];
if($user == "pankaj" && $password == "123")
{
	echo "welcome";	
	header ('Location: home.html')
}
else
{
	echo "inocorrect login";
	header ('Location: fail.html')
}
?>