<?php
	function sendMail() {
		$to = $_POST['to'];
		$from = $_POST['from'];
		$subj = $_POST['subj'];
		$msg = $_POST['msg'];
		$headers = "From: $from" . "\r\n" .
					"Reply-To: $from" . "\r\n";
		if (mail($to, $subj, $msg, $headers)) {
			echo '<p style="color:seagreen;">Success!</p>';
		} else {
			echo '<p style="color:red;">End with error.</p>';
		}
	}
?>
<html>
	<head></head>
	<body>
	<?php if (empty($_POST)): ?>
		<form action="/php/mail_sender.php" method="POST">
			<p>
				Кому:<br>
				<input type="text" name="to" value="german-startcev@ya.ru">
			</p>
			<p>
				Сообщение:<br>
				<textarea name="msg">Сообщение</textarea>
			</p>
			<input type="hidden" name="from" value="no-reply@gmail.com">
			<input type="hidden" name="subj" value="Test message">
			<input type="submit" value="Send">
		</form>
	<?php else: sendMail(); endif; ?>
	</body>
</html>