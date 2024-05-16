<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>



</head>

<body>
    <form action="calc.php" method="POST">
        NUM1: <input type="number" step="0.0001" name="num1"><br><br>
        OP:<input type="text" name="op"><br><br>
        NUM2:<input type="number" step="0.0001" name="num2"><br><br>
        <input type="submit">

    </form>
    <?php
    $num1 = $_POST["num1"];
    $op = $_POST["op"];
    $num2 = $_POST["num2"];

    if ($op == "+") {
        echo $num1 + $num2;
    } elseif ($op == "-") {
        echo $num1 - $num2;
    } elseif ($op == "/") {
        echo $num1 / $num2;
    } elseif ($op == "*") {
        echo $num1 * $num2;
    } else
        echo "invalid operator";



    ?>












</body>

</html>