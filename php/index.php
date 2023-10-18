<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slot Machine Simulator</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <?php
    include('head.php');
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        include('process_form.php');
    } else {
        include('display_form.php');
    }
    include('footer.php');
    ?>

</body>

</html>
