<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>高考加油</title>
    <meta charset="UTF-8">
</head>

<body>
<!-- Page Content -->
<main class="container">


    <div class="btn-group countryButtons" role="group" aria-label="...">
        <?php
        $d1 = strtotime("June 6");
        $d2 = ceil(($d1 - time()) / 60 / 60 / 24);
        echo "距离高考还有：" . $d2 . " 天。";
        ?>

    </div>
</main>

<footer>

</footer>
</body>

</html>