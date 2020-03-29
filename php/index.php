<?php
	declare(strict_types=1);
	
	function getSum(int $x, int $y) {
		return $x + $y;
	}
	
	$x = 5.5;
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
	</body>
</html>
	