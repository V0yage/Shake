<?php
	declare(strict_types=1);
	
	include __DIR__ . '/functions.php';
	
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
			25 id <?= isEven(25) ? 'even' : 'odd' ?>
		</div>
	</body>
</html>
	