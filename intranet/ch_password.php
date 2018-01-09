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

  <?php include('menu.php'); ?>
	<div class="wrapper">
	<form action="change_password.php" name="myForm" method="post" onsubmit="return(validate());">
		<table>
		<tr><td>Régi jelszó: </td><td><input type="password" id="oldPass" name="oldPass"></tr>
		<tr><td>Új jelszó: </td><td><input type="password" id="newPass" name="newPass"></br></tr>
		<tr><td>Új jelszó ismét: </td><td><input type="password" id="newPass2" name="newPass2"></br></tr>
		<tr><td></td><td><input type="submit" value="Módosít"></td></tr>
		</table>
	</form>
	<a href="hirek.php">Vissza</a>
	</div>
</body>
</html>