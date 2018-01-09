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
	<body>


<?php
include('menu.php');
echo "
<form name='myForm' action=update_user.php method=post enctype=multipart/form-data>
<table>
	<input type=hidden name=id2 value=".$_POST['ID'].">
	<tr>
		<td width=100px>Név:</td>
		<td><input type=text name=name2 value=".$_POST['name']."></td>
	</tr>
	<tr>
		<td width=100px>Felhasználónév:</td>
		<td><input type=text name=username2 value=".$_POST['username']."></td>
	</tr>
	<tr>
		<td width=100px>Email:</td>
		<td><input type=text name=email2 value=".$_POST['email']."></td>
	</tr>
	<tr>
		<td width=100px>Szerepkör:</td>
		<td> 
			<select name=role2>
				<option value=1>Adminisztrátor</option>
				<option value=2>Szerkesztő</option>
				<option value=3>Látogató</option>
			</select>
		</td>
	</tr>
	<tr>
		<td width=100px>Tiltott:</td>
		<td>";
		if(isset($_POST['disabled']) && $_POST['disabled'])
		{
			echo "<input type=checkbox name=disabled2 value=1 checked ></td>";
		}
		else
		{
			echo "<input type=checkbox name=disabled2 value=0></td>";
		}
	echo"</tr>

	<tr>
		<td><input type=submit value=Mentés></td>
	</tr>
</table>	
</form>
</body>
</html>
";
?>