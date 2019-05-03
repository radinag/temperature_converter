<?php

function  fahr_to_cel($num) {
    $celsius = ($num - 32) * 0.5556;
    return $celsius;
}

function cel_to_fahr ($num) {
    $fahrenheit = $num * 1.8 + 32;
    return $fahrenheit;
}

if( isset($_GET['btn']) )  {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $num = $_GET['num'];
    
if($num1=='fahrenheit')
     {
       $convert = fahr_to_cel( $num );
    }
    
if($num1=='celsius')
    {
        $convert = cel_to_fahr( $num );
    }
}
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> Temperature Converter</title>
</head>
<body>
    <h2>Temperature Converter</h2>
<p>
    Converted Temperature is: <?= $convert ?>&#176;
</p>
<form action="" method="GET">
        <select name="num1">
            <option value="celsius">Celsius </option>
            <option value="fahrenheit">Fahrenheit</option>
        </select>
        <input type="text" name="num">

        <select name="num2">
            <option value="fahrenheit">Fahrenheit</option>
            <option value="celsius">Celsius</option>
        </select>
        <input type="submit" name="btn" value="Convert">
    </form>

</body>
</html>
