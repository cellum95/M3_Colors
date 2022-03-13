<!DOCTYPE html>

<html>
<head>
    
    <meta charset = "utf-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <title>Color Table</title>
    <meta name = "description" content = "A webpage to store colors in PHP Session">
    <link href = "../CSS/style.php" rel = "stylesheet" type = "text/css">
    
</head>
<body>

	<header class = "header-title">
		<h1>Color Result</h1>
	</header>
	
	<main>
		<h2>Color Table</h2>
		
		<table class = "color-table">
			<tr>
				<th colspan = "2">Color Table</th>
			</tr>
			<tr>
				<td>Favorite Color: </td>
				<td>
					<?php
						echo $_POST["Fav_Color_1"];
					?>
				</td>
				
			</tr>
			<tr>
				<td>Favorite Color: </td>
				<td>
					<?php
						echo $_POST["Fav_Color_2"];
					?>
				</td>
				
			</tr>
			<tr>
				<td>Favorite Color: </td>
				<td>
					<?php
						echo $_POST["Fav_Color_3"];
					?>
				</td>
				
			</tr>
			<tr>
				<td>Favorite Color: </td>
				<td>
					<?php
						echo $_POST["Fav_Color_4"];
					?>
				</td>
			
			</tr>
			<tr>
				<td>Favorite Color: </td>
				<td>
					<?php
						echo $_POST["Fav_Color_5"];
					?>
				</td>
			
			</tr>
		</table>
	</main>
</body>
</html>
