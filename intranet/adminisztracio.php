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
	echo"<form action=new_user.html method=post>
    <input type='submit' value='Új felhasználó'/>
	</form>";

	mysqli_close($con);
}


?>
