<?php
if (isset($_POST['bet'])) {
	session_start();
	$bet = floatval($_POST['bet']);
	$reels = ["Cherries", "Oranges", "Plums", "Bells", "Melons", "Bars"];
	$spinResult = [];

	for ($i = 0; $i < 3; $i++) {
		$randomIndex = random_int(0, count($reels) - 1);
		$spinResult[] = $reels[$randomIndex];
	}
	$uniqueWords = array_unique($spinResult);
	$resultDisplay = "";

	if (count($uniqueWords) === 1) {
		$resultDisplay = "Congratulations! You win 3 times your bet: $" . number_format($bet * 3, 2);
	} elseif (count($uniqueWords) === 2) {
		$resultDisplay = "You win 2 times your bet: $" . number_format($bet * 2, 2);
	} else {
		$resultDisplay = "Sorry, you lost your bet of $" . number_format($bet, 2);
	}
}
if (count($uniqueWords) === 1) {
	$_SESSION['balance'] += $bet * 3;
} elseif (count($uniqueWords) === 2) {
	$_SESSION['balance'] += $bet * 2;
} else {
	$_SESSION['balance'] -= $bet;
}
$totalWinnings =  number_format($_SESSION['balance'], 2);
?>

<main>
	<div class="slot-machine">
		<div class="reel" id="reel1"><?php echo $spinResult[0]; ?></div>
		<div class="reel" id="reel2"><?php echo $spinResult[1]; ?></div>
		<div class="reel" id="reel3"><?php echo $spinResult[2]; ?></div>
	</div>
	<p class="slot-machine"><?php echo $resultDisplay; ?></p>
	<p id="total-winnings">Total Winnings so far:&nbsp;<?php echo $totalWinnings; ?></p>
	<a href="./index.php"><button type="button">Play again</button></a>
	<button type="button" onclick="refreshPage()">Refresh</button>

</main>
