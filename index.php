<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slot Machine Simulator</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="icon" type="image/x-icon" href="./slotMachine.ico">
    <script src="./script.js"></script>

</head>

<body>
    <?php
    require('head.php');
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        require('process_form.php');
    } else {
        require('show_form.php');
    }
    require('./foot.php');
    ?>
</body>

</html>
