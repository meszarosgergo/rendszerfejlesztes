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
  </head>

  <body>
  <?php include('menu.php'); ?>

<?php
//csak módosító láthatja
function roleCheck ($role_id)
{
	switch ($role_id)
	{
		case 1: return "Adminisztrátor"; break;
		case 2: return "Szerkesztő"; break;
		case 3: return "Látogató"; break;
		default: break;
	}
};
function disabledCheck ($disabled)
{
	switch ($disabled)
	{
		case 0: return "Nem"; break;
		case 1: return "Igen"; break;
		default: break;
	}
};
if($_SESSION['role_id'] <= 1)
{
	//csatlakozás a db-hez
	include('config/dbconnect.php');
	$query="select ID, name, username, email, role_id, disabled from users";
	$result=mysqli_query($con, $query) or die ("Failed".$query);

	//adatok kiírása, szerkesztés gomb
	echo "<form action=edit_user.php method=post>";
	echo "<table width=100% border=1><tr>";
	echo "<tr><td>Név</td><td>Felhasználónév</td><td>Email cím</td><td>Szerepkör</td><td>Tiltott</td><td></td></tr>";
	while (list($ID, $name, $username, $email, $role_id, $disabled)=mysqli_fetch_row($result)){     
		echo "
		<tr>
			<form action=edit_user.php method=post>
				<input type=hidden name=ID value=$ID>
				<td><input type=hidden name=name value=$name>$name</td>
				<td><input type=hidden name=username value=$username>$username</td>
				<td><input type=hidden name=email value=$email>$email</td>
				<td><input type=hidden name=role value=$role_id>".roleCheck($role_id)."</td>
				<td>";
				if(!$disabled)
				{
					echo"<input type=checkbox name=disabled value=$disabled>";
				}
				else
				{
					echo"<input type=checkbox name=disabled value=$disabled checked>";
				}
				echo"</td>
				<td><input type=submit value=Szerkesztés></td>
			</form>
		</tr>";
	}
	
	echo "</form></table>";
	echo"<form action=newuser.php method=post>
    <input type='submit' value='Új felhasználó'/>
	</form>";

	mysqli_close($con);
}


?>

 <footer class="blog-footer">
      <p></p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
   <!--  <script src="assets/js/vendor/popper.min.js"></script> -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>

