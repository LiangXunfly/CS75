<?php

	error_reporting(E_ERROR | E_WARNING | E_NOTICE);
	if (empty($_POST["name"])) {
		echo "请填写用户名";
	}
	else {
		echo "Welcome to join in courser! " .  $_POST['name'];
	}
	if ($_POST['captain'] == '组') {
		echo "<br>And you are captain!<br/>";
	}
	foreach ($_POST['courses'] as $value) {
		echo $value . "<br/>";
	}


