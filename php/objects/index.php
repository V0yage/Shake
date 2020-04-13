<?php
	trait SayYourClassTrait {
		public function sayYourClass(): string {
			return 'My class name is ' . self::class;
		}
	}
	
	class Man {
		use SayYourClassTrait;
	}
	
	class Box {
		use SayYourClassTrait;
	}
	
	$man = new Man();
	$box = new Box();
	
	abstract class Human {
		private $name;
		
		public function __construct(string $name) {
			$this->name = $name;
		}
		
		public function getName(): string {
			return $this->name;
		}
		
		abstract public function getGreetings(): string;
		abstract public function getMyNameIs(): string;
		
		public function introduceYourself(): string {
			return $this->getGreetings() . '! ' . $this->getMyNameIs() . ' ' . $this->getName() . '.';
		}
	}
	
	class RussianHuman extends Human {
		public function getGreetings(): string {
			return 'Привет';
		}
		public function getMyNameIs(): string {
			return 'Моё имя';
		}
	}
	
	class EnglishHuman extends Human {
		public function getGreetings(): string {
			return 'Hi';
		}
		public function getMyNameIs(): string {
			return 'My name is';
		}
	}
	
	$russianHuman = new RussianHuman('Михаил');
	$englishHuman = new EnglishHuman('Charley');
?>

<!doctype html>
<html lang="ru">
	<head>
		<title>Работа с объектами в php</title>
		<meta charset="utf-8">
	</head>
	<body>
		<p>man say: <?= $man->sayYourClass() ?></p>
		<p>box say: <?= $box->sayYourClass() ?></p>
		<br>
		<p><?= $russianHuman->introduceYourself() ?></p>
		<p><?= $englishHuman->introduceYourself() ?></p>
	</body>
</html>