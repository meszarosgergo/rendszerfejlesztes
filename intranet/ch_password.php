<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<link rel="stylesheet" type="text/css" href="mystyle.css">
		<title>Jelszó változtatás</title>
		<script type="text/javascript">
		<!--		  
		  function validate()
		  {
			var txt = document.myForm.oldPass.value;
			if (txt.indexOf('(') > -1 || txt.length < 8)	
			{
				alert( "Hibás jelszó!" );
				document.myForm.oldPass.focus() ;
				return false;
			}
			

			var txt2 = document.myForm.newPass.value;
			if (txt2.indexOf('(') > -1 || txt2.length < 8)	
			{
				alert( "Hibás jelszó!" );
				document.myForm.newPass.focus() ;
				return false;
			}
			 
			var txt3 = document.myForm.newPass.value;
			if( txt3.indexOf('(') > -1 || document.myForm.newPass2.value != document.myForm.newPass.value)
			{
				alert( "A két jelszó nem egyezik!" );
				document.myForm.newPass2.focus() ;
				return false;
			}
			return true;
		  }
	//-->
	</script>
	</head>
<body>
	<div class="wrapper">
	<form action="change_password.php" name="myForm" method="post" onsubmit="return(validate());">
		<table>
		<tr><td>Régi jelszó: </td><td><input type="password" id="oldPass" name="oldPass"></tr>
		<tr><td>Új jelszó: </td><td><input type="password" id="newPass" name="newPass"></br></tr>
		<tr><td>Új jelszó ismét: </td><td><input type="password" id="newPass2" name="newPass2"></br></tr>
		<tr><td></td><td><input type="submit" value="Módosít"></td></tr>
		</table>
	</form>
	<a href="menu.php?d=2">Vissza</a>
	</div>
</body>
</html>