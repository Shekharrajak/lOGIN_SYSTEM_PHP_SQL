<? php
include("config.php");
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$myusername=addslashes($_POST['username']);
	$mypassword=addslashes($_POST['password']);

	$sql="Select id from admin where username='$myusername' and password ='$mypassword'";
	$result =mysql_query($sql);
	$row=mysql_fetch_array($result);
	$active =$row['active'];
	$count =mysql_num_rows($result);

	if($count==1){
		session_register("myusername");
		$_SESSION['login_user']=$myusername;

		header("location:welcome.php");
	}
	else{
		$error ="your login Namr or password is invalid";
	}

}
?>
<form action ="" method ="post">
	<label>UserName :</label>
	<input type ="text" name="username"/><br/>
	<label>Password :</label>
	<input type="password" name="password"/><br/>
	<input type ="submit" value =" Submit "/><br/>
</form>
