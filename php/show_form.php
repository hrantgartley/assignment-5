<main>
    <div id="slot-machine">
        <div class="reel" id="reel1">---</div>
        <div class="reel" id="reel2">---</div>
        <div class="reel" id="reel3">---</div>
    </div>
    <form method="POST" action="index.php">
        <p>Enter your bet (less than $1,000.01): <input type="number" name="bet" min="0.01" max="1000" step="0.01"></p>
        <button type="submit" name="play-button">Play</button>
    </form>
</main>
