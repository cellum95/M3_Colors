<!DOCTYPE html>

<html>
<head>
    <meta charset = "utf-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <title>Color Table</title>
    <meta name = "description" content = "A webpage to store colors in PHP Session">
    <link href = "CSS/style.php" rel = "stylesheet" type = "text/css">
</head>
<body>

	<header class = "header-title">
		<h1>Color Submit</h1>
	</header>
	
	<main>
	<form action = "Pages/Second_Page.php" method = "post">
		<h2>Color Table</h2>
		
		<table class = "color-table">
			<tr>
				<th colspan = "2">Color Table</th>
			</tr>
			<tr>
				<td>Favorite Color: </td>
				<td><input type = "text" name = "Fav_Color_1" style = "width : 90%;"></td>
			</tr>
			<tr>
				<td>Favorite Color: </td>
				<td><input type = "text" name = "Fav_Color_2" style = "width : 90%;"></td>	
			</tr>
			<tr>
				<td>Favorite Color: </td>
				<td><input type = "text" name = "Fav_Color_3" style = "width : 90%;"></td>
			</tr>
			<tr>
				<td>Favorite Color: </td>
				<td><input type = "text" name = "Fav_Color_4" style = "width : 90%;"></td>
			</tr>
			<tr>
				<td>Favorite Color: </td>
				<td><input type = "text" name = "Fav_Color_5" style = "width : 90%;"></td>
			</tr>
			<tr>
				<td colspan = "2"><input type = "submit"></td>
			</tr>
		</table>
	</form>
		
	</main>
</body>
</html>
