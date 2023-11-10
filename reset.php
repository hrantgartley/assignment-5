<?php
if (isset($_POST['confirm_reset'])) {
	$_SESSION['balance'] = 0;
	header("Location: index.php");
	exit;
}

header("Location: index.php");
