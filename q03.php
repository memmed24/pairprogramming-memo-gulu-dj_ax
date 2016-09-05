<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		input{
			display:block;
			padding:5px 10px;
			margin:5px;
		}
		input[type="radio"]{
			display:inline-block;
		}
		p{
			background:gray;
		}
	</style>
</head>
<body>
<form action="" method="post">
	<input type="number" name="num01">
	<input type="number" name="num02">
	<span>+</span><input type="radio" name="topla">
	<span>-</span><input type="radio" name="cix">
	<span>*</span><input type="radio" name="vur">
	<span>/</span><input type="radio" name="bol">
<?php 
	
	if(isset($_POST['topla'])){
		$val01 = $_POST['num01'];
		$val02 = $_POST['num02'];
		$a = $val01 + $val02;
	}
	if (isset($_POST['cix'])) {
		$val01 = $_POST['num01'];
		$val02 = $_POST['num02'];
		$a = $val01 - $val02;
	}
	if(isset($_POST['vur'])){
		$val01 = $_POST['num01'];
		$val02 = $_POST['num02'];
		$a = $val01 * $val02;
	}
	if (isset($_POST['bol'])) {
		$val01 = $_POST['num01'];
		$val02 = $_POST['num02'];
		$a = $val01 / $val02;
	}
	
?>
	<input type="submit" value="Hesabla">
	<p>Netice: <?php echo $a; ?></p>
</form>
</body>
</html>
