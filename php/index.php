<?php
	//include __DIR__ . '/functions.php';
	//echo __DIR__;
	
	declare(strict_types=1);
	
	function getSum(int $x, int $y) {
		return $x + $y;
	}
	
	function getRandSin()
	{
		return sin(rand());
	}
	
	$x = 5;
	$y = 7;
?>

<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>php lessons</title>
		<meta charset="utf-8">
	</head>
	<body>
		<div>
			<?= "$x + $y = " . getSum($x, $y) ?>
		</div>
		<div>
			<?= 'Синус случайного числа: ' . getRandSin() ?>
		</div>
		<div>
			25 is even: <?= 5//isEven(25) ?>
		</div>
	</body>
</html>
	