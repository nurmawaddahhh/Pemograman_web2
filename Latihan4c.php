<?php

echo "<b> Daftar Negara ASEAN dan Ibukota </b>";

$ASEAN = [
		"Indonesia" => "D.K.I. Jakarta",
		"Singapura" => "Singapura",
		"Malaysia"  => "Kuala Lumpur",
		"Brunei"	=> "Bandar Seri Begawan",
		"Thailand"	=> "Bangkok",
		"Laos"		=> "Vientine",
		"Filiphina" => "Manila",
		"Myanmar"   => "Naypyidaw"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Daftar negara ASEAN</title>
</head>
<body>
	<?php foreach ($ASEAN as $negara => $ibukota) : ?>
		<li><?php echo "$negara : $ibukota" ?></li>
	<?php endforeach ?>

</body>
</html>