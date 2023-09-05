<?php
    $month = intval(date('m'));
    $year = date('Y');

    if($_SERVER['REQUEST_URI'] == '/calendario/'){
        header("Location: http://localhost/calendario/$year/$month");
    }

    $m_URL = $_GET['m'];
    $y_URL = $_GET['y'];

    $days = date('t',strtotime("1-$m_URL-$y_URL"));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/calendario/media/style.css">
</head>
<body>
    <div>
        <p>Monday</p>
        <p>Tuesday</p>
        <p>Wednesday</p>
        <p>Thursday</p>
        <p>Friday</p>
        <p>Saturday</p>
        <p>Sunday</p>
        <?php for($i = 1; $i <= $days; $i++) : ?>
            <p><?php echo($i) ?></p>
        <?php endfor ?>
    </div>
</body>
</html>