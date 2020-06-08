<?php
include_once __DIR__ . '/partials/hrdb.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="app">
        <?php
        foreach ($staff as $hr){
            $hr->showAnagraphical();
            $hr->applyLeaves(-18);
            } ?>
    </div>
</body>
</html>