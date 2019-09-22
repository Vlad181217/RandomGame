<?php
error_reporting(-1);
$a=mt_rand(1,6);
$b=mt_rand(1,6);
$c=mt_rand(1,6);
$d=mt_rand(1,6);
 
$aa=$a+$b;
$bb=$c+$d;
 
echo "Бросаем 2 кубика, у тебя выпало число... $aa !!! \n";
echo "Неплохо! \n";
echo "Бросаем 2 кубика, у компьютера выпало число... $bb !!! \n";
echo "Неплохо! \n";
if ($aa > $bb) {
	echo "Ты победил! \n";
}
elseif ($aa < $bb) {
	echo "Победил компьютер! \n";
}
elseif ($aa = $bb) {
	echo "Ничья! \n";
}
