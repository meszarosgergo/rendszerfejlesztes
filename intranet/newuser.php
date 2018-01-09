 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Blog XY KFT</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/blog.css" rel="stylesheet">
	
		<script type="text/javascript">
		<!--		  
		  function validate()
		  {
		  
			var txt = document.myForm.username.value;
			if (txt.indexOf('(') > -1 || txt.length == 0)
			{
				alert( "Add meg a felhasználóneved!" );
				document.myForm.username.focus() ;
				return false;
			}
			
			var email = document.myForm.email.value;
			if (email.indexOf('(') > -1 || email.indexOf('@') < 1 || email.length == 0)
			{
				alert( "Add meg az email címet!" );
				document.myForm.email.focus() ;
				return false;
			}
			 
			var fullname = document.myForm.fullname.value;
			if (fullname.indexOf('(') > -1 || fullname.indexOf(' ') <1 || fullname.length <8)
			{
				alert( "Add meg a teljes neved!" );
				document.myForm.fullname.focus() ;
				return false;
			}

			var txt2 = document.myForm.password.value;
			if (txt2.indexOf('(') > -1 || txt2.length < 8)	
			{
				alert( "Hibás jelszó!" );
				document.myForm.password.focus() ;
				return false;
			}
			 
			var txt3 = document.myForm.pw2.value;
			if( txt3.indexOf('(') > -1 || document.myForm.pw2.value != document.myForm.password.value)
			{
				alert( "A két jelszó nem egyezik!" );
				document.myForm.password.focus() ;
				return false;
			}
			return true;
		  }
	//-->
	</script>
	</head>
<body>
<?php include('menu.php'); ?>
	<div class="wrapper">
	<form action="new_user.php" name="myForm" method="post" onsubmit="return(validate());">
		<table>
		<tr><td>Felhasználónév: </td><td><input type="text" id="username" name="username"></tr>
		<tr><td>Teljes név: </td><td><input type="text" id="fullname" name="fullname"></br></tr>
		<tr><td>Email cím: </td><td><input type="text" id="email" name="email"></br></tr>
		<tr><td>Jelszó: </td><td><input type="password" id="password" name="password"></br></tr>
		<tr><td>Jelszó ismét: </td><td><input type="password" id="pw2" name="pw2"></br></tr>
		<tr><td></td><td><input type="submit" value="Felvétel"></td></tr>
		</table>
	</form>
	<a href="adminisztracio.php">Vissza</a>
	</div>
</body>
</html>