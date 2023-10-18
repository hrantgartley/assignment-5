<?php
if (isset($_POST['bet'])) {
    $bet = floatval($_POST['bet']);
    $reels = ["Cherries", "Oranges", "Plums", "Bells", "Melons", "Bars"];
    $spinResult = [];

    for ($i = 0; $i < 3; $i++) {
        $randomIndex = random_int(0, count($reels) - 1);
        $spinResult[] = $reels[$randomIndex];
    }
    // Determine the outcome
    $uniqueWords = array_unique($spinResult);
    $resultDisplay = "";

    if (count($uniqueWords) === 1) {
        // All three words match
        $resultDisplay = "Congratulations! You win 3 times your bet: $" . number_format($bet * 3, 2);
    } elseif (count($uniqueWords) === 2) {
        // Two words match
        $resultDisplay = "You win 2 times your bet: $" . number_format($bet * 2, 2);
    } else {
        // No words match
        $resultDisplay = "Sorry, you lost your bet of $" . number_format($bet, 2);
    }
}
?>
<main>
    <div id="slot-machine">
        <div class="reel" id="reel1"><?php echo $spinResult[0]; ?></div>
        <div class="reel" id="reel2"><?php echo $spinResult[1]; ?></div>
        <div class="reel" id="reel3"><?php echo $spinResult[2]; ?></div>
    </div>
    <p><?php echo $resultDisplay; ?></p>
</main>
