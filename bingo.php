<?php
	//Tino Greving, 14.02.2022
	//Bingo.php

$werte = array();
	$werte[0]="Fremwörk";
	$werte[1]="AMD Reisen";
	$werte[2]="hardcore";
	$werte[3]="*FDP-Propaganda*";
	$werte[4]="Sörwa";
	$werte[5]="IBM";
	$werte[6]="Gehmink";
	$werte[7]="Java";
	$werte[8]="Prohgrämmink";
	$werte[9]="Mac";
	$werte[10]="*Andeutung, dass ein Macbook besser sei als ein Windows-Notebook*";
	$werte[11]="Notebook";
	$werte[12]="Apache";
	$werte[13]="*veraltete Technologien/Programmiersprachen*";
	$werte[14]="*komische Lache*";
	$werte[15]="Cisco";

shuffle($werte);
?>
<html>
<head>
	<style type="text/css">
		table{
			border: 1px solid;
			border-color: red;
		}
		td{
			border-color: red;
			border: 1px dotted red;
			height: 200px;
			width: 20%;
			text-align: center;
			vertical-align: middle;
			padding: 40px;
			margin: 40px;
		}
		h3{
			text-align: center;
			font-size: xx-large;
		}
		body{
			font-family: sans-serif;
		}
		button{
			height: max;
			widht: max;
		}
		button:active{
			background-color: red;
		}
		input[type=checkbox]:checked + label{
			color: red;
		}
		.container {
  			display: block;
  			position: relative;
  			padding-left: 35px;
 			margin-bottom: 12px;
  			cursor: pointer;
  			font-size: 22px;
  			-webkit-user-select: none;
  			-moz-user-select: none;
  			-ms-user-select: none;
 			user-select: none;
		}
		.container input {
  			position: absolute;
  			opacity: 0;
  			cursor: pointer;
  			height: 0;
  			width: 0;
		}
		.checkmark {
  			position: absolute;
  			top: 0;
  			left: 0;
  			height: 25px;
  			width: 25px;
  			background-color: #eee;
		}
		.container:hover input ~ .checkmark {
  			background-color: #ccc;
		}
		.container input:checked ~ .checkmark {
  			background-color: #f5aa32;
		}
		.checkmark:after {
  			content: "";
  			position: absolute;
  			display: none;
		}
		.container input:checked ~ .checkmark:after {
  			display: block;
		}
		.container .checkmark:after {
  			left: 9px;
  			top: 5px;
  			width: 5px;
  			height: 10px;
  			border: solid white;
  			border-width: 0 3px 3px 0;
  			-webkit-transform: rotate(45deg);
  			-ms-transform: rotate(45deg);
  			transform: rotate(45deg);
		}
	</style>
	<title>Göhler-Bingo</title>
</head>
<body>
	<script type="text/javascript">
		$("table tr td").click(function() {
        	$(this).css("background", "#fff");
    	});
	</script>
	<script type="text/javascript">
		$("button").click(function(){
			$("td").css("background-color", "red");
		})
	</script>
	<h3>Göhler-Bingo</h3>
	<br><br>
	<table>
		<tr>
			<td><label class="container"><?php echo $werte[0] ?><input type="checkbox"><span class="checkmark"></span></td>
			<td><label class="container"><?php echo $werte[1] ?><input type="checkbox"><span class="checkmark"></span></td>
			<td><label class="container"><?php echo $werte[2] ?><input type="checkbox"><span class="checkmark"></span></td>
			<td><label class="container"><?php echo $werte[3] ?><input type="checkbox"><span class="checkmark"></span></td>
		</tr>
		<tr>
			<td><label class="container"><?php echo $werte[4] ?><input type="checkbox"><span class="checkmark"></span></td>
			<td><label class="container"><?php echo $werte[5] ?><input type="checkbox"><span class="checkmark"></span></td>
			<td><label class="container"><?php echo $werte[6] ?><input type="checkbox"><span class="checkmark"></span></td>
			<td><label class="container"><?php echo $werte[7] ?><input type="checkbox"><span class="checkmark"></span></td>
		</tr>
		<tr>
			<td><label class="container"><?php echo $werte[8] ?><input type="checkbox"><span class="checkmark"></span></td>
			<td><label class="container"><?php echo $werte[9] ?><input type="checkbox"><span class="checkmark"></span></td>
			<td><label class="container"><?php echo $werte[10] ?><input type="checkbox"><span class="checkmark"></span></td>
			<td><label class="container"><?php echo $werte[11] ?><input type="checkbox"><span class="checkmark"></span></td>
		</tr>
		<tr>
			<td><label class="container"><?php echo $werte[12] ?><input type="checkbox"><span class="checkmark"></span></td>
			<td><label class="container"><?php echo $werte[13] ?><input type="checkbox"><span class="checkmark"></span></td>
			<td><label class="container"><?php echo $werte[14] ?><input type="checkbox"><span class="checkmark"></span></td>
			<td><label class="container"><?php echo $werte[15] ?><input type="checkbox"><span class="checkmark"></span></td>
		</tr>
	</table>
</body>
</html>
