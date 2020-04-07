<?php
	function sendMail() {
		var_dump($_POST);
	}
?>	
<?php if (empty($_POST)): ?>
	<form action="/php/mail_sender.php">
		<p>
			Кому:<br>
			<input type="text" name="to" value="german-startcev@ya.ru">
		</p>
		<p>
			Сообщение:<br>
			<textarea name="msg">Сообщение</textarea>
		</p>
	</form>
<?php else: sendMail(); endif; ?>

