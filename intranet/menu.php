<?php  
	session_start();
	include('config/dbconnect.php');

	$query = "select title, link, role_id from menu";  
	$result = mysqli_query($con,$query) or die ("Nem sikerült".$query); 
	mysqli_close($con);  
?>

<header>
	<div class="blog-masthead">
		<div class="container">
		<!-- Név + Logout -->
		<div class="float-right">
				<span class="username"><?php echo $_SESSION['name']?></span>
				<a class="menu" href="ch_password.php">Jelszó módosítás</a>
				<a href="logout.php" class="logout">Kijelentkezés</a>
			</div>
			<nav class="nav">
				<?php
				while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))   
				{     
					if ($_SESSION['role_id'] <= $row['role_id'])
					{
						echo "<a class='nav-link' href='".$row['link']."'>".$row['title']."</a>";
					} 
				}
				?>
			</nav>
			
		</div>
	</div>

	
</header>