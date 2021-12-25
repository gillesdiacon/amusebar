<?php
    require_once("init.php");

    $staffService = new StaffService();

	$loginError = "";

	if(isset($_POST['userName']) && isset($_POST['userPass'])){
		$userName = $_POST['userName'];
		$userPass = md5($_POST['userPass']);

		$staff=$staffService->login($userName, $userPass);

		if($staff){
			$_SESSION['staffId']=$staff->id;
			$_SESSION['staffName']=$staff->username;
			$_SESSION['staffFirstName']=$staff->first_name;
			$_SESSION['staffLastName']=$staff->last_name;

            header("Location: /admin/admin.php");
		}else{
			$loginError = "Username ou mot de passe incorrecte";
		}
	}
?>
<br/>
<div class="content">
<p>
Please enter here your name and password for a secure access to the administration area.
</p>
<form name="login" method="post">
	<table width="500" border="0" cellspacing="10" cellpadding="10">
	  <tr>
		<td width="40">&nbsp;</td>
		<td align="center">
			<table width="300" border="0" cellspacing="0" cellpadding="2">
			  <tr>
				<td align="right">Name&nbsp;:&nbsp;</td>
				<td align="left"><input name="userName" type="text" size="20" maxlength="50"></td>
			  </tr>
			  <tr>
				<td align="right">Password&nbsp;:&nbsp;</td>
				<td align="left"><input name="userPass" type="password" size="20" maxlength="32"></td>
			  </tr>			  
			</table>
		</td>
	  </tr>
	  <tr>
	  	<td>&nbsp;</td>
		<td align="center">
			<input name="login" type="submit" value="Login">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input name="reset" type="reset" value="Reset">
		</td>
	  </tr>
	</table>
</form>
</div>