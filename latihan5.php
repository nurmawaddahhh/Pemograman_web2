<?php

 function styleText($text, $kelas) {
 	$styledText = '<b><span class="' . $kelas . '" style="font-size: 28px;
 	font-family: Arial; color: #1A0547; font-style: italic; border: 1px solid ;">' . $text . '</span></b>';
 	return $styledText;
 }

 // Contoh pemanggilan fungsi:
 $tulisan = "Hello World! here I come!";
 $kelas = "custom-style";
 $styledResult = styleText($tulisan, $kelas);
 echo $styledResult;

?>