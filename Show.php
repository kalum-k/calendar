<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include "Calendar.php";
    $Calendar = new Calendar();
    $month = $_POST["month"];
    $date = $_POST["date"];
    $result = $Calendar->showday($date, $month);
    echo $result;
    ?><h1></h1>
</body>

</html>