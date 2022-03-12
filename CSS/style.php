<?php
	header('Content-type: text/css; charset: UTF-8');
?>

:root {
	font-size: 16px;
	font-family: 'Open Sans';
	--text-primary: #ffc20e;
	-text-secondary: #FFFFFF;
	--bg-primary: #009900;
	--bg-secondary: #818181;
}

body {
	color: black;
	background-color: white;
	margin: 0;
	padding: 0;
}

.header-title {
	background-color: var(--bg-primary);
	position: relative;
}

.header-title h1 {
	margin: 0;
	left: 3rem;
	padding: 1rem;
	color: var(--text-primary);
	text-align: center;
}

h2 {
	margin-top: 3rem;
	text-align: center;
}

.color-table {
	border: 3px solid black;
	align-items: center;
	margin-left: auto;
	margin-right: auto;
	border-collapse: collapse;
	width: 20%;
}

.color-table tr, th, td {
	border: 1px solid black;
	text-align: center;
}
