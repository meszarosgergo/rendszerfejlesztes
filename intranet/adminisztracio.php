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
	  echo "<tr><input type=hidden name=id value=$ID><td>$name</td><td>$username</td><td>$email</td><td>".roleCheck($role_id)."</td><td>".disabledCheck($disabled)."</td><td><input type=submit value=Módosít></td></tr>";
	}
	
	echo "</form></table>";
	echo"<form action=new_user.html method=post>
    <input type='submit' value='Új felhasználó'/>
	</form>";
	//echo "<button onclick=window.location.href=/new_user.php>Continue</button>";

	mysqli_close($con);
}


?>
