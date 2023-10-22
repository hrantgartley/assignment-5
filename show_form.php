<main>
    <div id="slot-machine">
        <div class="reel" id="reel1">
            <div class="form">
                <form method="POST" action="index.php" onsubmit="return validate()">
                    <p>Enter your bet (less than $1,000.01): <input type="number" id="meep" name="bet" step="0.01" placeholder="nnnn.nn" autofocus required></p>
                    <button type="submit" name="play-button" id="play-button">Play</button>
                    <button type="button" onclick="refreshPage()">Refresh</button>
                </form>
            </div>
        </div>
    </div>
</main>
