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
				<a href="logout.php" class="logout">Kijelentkezés</a>
				<a class="menu" href="change_password.html">Jelszó módosítás</a>
			</div>
			<nav class="nav">
				<?php
				while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))   
				{     
					if ($_SESSION['role_id'] <= $row['role_id'])
					{
						echo "<a class='nav-link' href='menu.php?d=".$row['link']."'>".$row['title']."</a>";
					} 
				}
				?>
			</nav>
			
		</div>
	</div>

	<div class="blog-header">
		<div class="container">
			<h1 class="blog-title">XY IntraNet</h1>
			<p class="lead blog-description">Belső weboldal a XY Kft dolgozóinak.</p>
		</div>
	</div>
</header>