<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fahrenheit to Celsius</title>
    <style>
        .wl{
            background-color: brown;
            color: white;
            display: inline-block;
            text-align: center;
            width: 300px;
        }
        .dwl{
            background-color: aquamarine;
            color: black;
            display: inline-block;
            text-align: center;
            width: 300px;
        }
        .fl{
            background-color: blueviolet;
            color: yellow;
            display: inline-block;
            text-align: center;
            width: 300px;
        }
    </style>
</head>

<body>
    <div class="wl">
    <?php
    echo "<h2>Using while loop <br></h2>";
    $fahrenheit = 0;
    while ($fahrenheit <= 100) {
        $celsius = ($fahrenheit - 35) * 0.55;
        echo "{$fahrenheit} &#8457 = {$celsius} &#8451";
        echo "<br>";
        $fahrenheit++;
    }
    ?>
    </div>

    <div class="dwl">
    <?php
    echo "<h2>Using do-while loop <br></h2>";
    $fahrenheit = 0;
    do {
        $celsius = ($fahrenheit - 35) * 0.55;
        echo "{$fahrenheit} &#8457 = {$celsius} &#8451";
        echo "<br>";
        $fahrenheit++;
    } while ($fahrenheit <= 100);
    ?>
    </div>

    <div class="fl">
    <?php
    echo "<h2>Using for loop<br></h2>";
    for ($fahrenheit = 0; $fahrenheit <= 100; $fahrenheit++) {
        $celsius = ($fahrenheit - 35) * 0.55;
        echo "{$fahrenheit} &#8457 = {$celsius} &#8451";
        echo "<br>";
    }
    ?>
    </div>
</body>

</html>