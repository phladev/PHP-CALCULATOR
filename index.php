<?php 
    $number1 = 0;
    $number2 = 0;
    $result = 0;
    $calc = "somar";

    if (isset($_GET["number1"], $_GET["number2"], $_GET["calculate"])) {
        $number1 = $_GET["number1"];
        $number2 = $_GET["number2"];
        $calc = $_GET["calculate"];

        switch($calc) {
            case "sum":
                $result = $number1 + $number2;
            break;
            case "sub":
                $result = $number1 - $number2;
            break;
            case "mult":
                $result = $number1 * $number2;
            break;
            case "divi":
                $result = $number1 / $number2;
            break;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CALCULATOR</title>

</head>
<body>
    <form>
        Primeiro Número: <input type="number" name="number1" value=<?=$number1 ?> required> <br> <br>
        Segundo Número: <input type="number" name="number2" value=<?=$number2 ?> required> <br> <br>
        <select name="calculate" id="calculate">
            <option value="sum" <?= ($calc == "sum")? "Selected":""; ?>>+</option>
            <option value="sub" <?= ($calc == "sub")? "Selected":""; ?>>-</option>
            <option value="mult" <?= ($calc == "mult")? "Selected":""; ?>>*</option>
            <option value="divi" <?= ($calc == "divi")? "Selected":""; ?>>/</option>
        </select> <br> <br> 
        <button type="submit">Calcular</button> <br> <br>
        <p>O Resultado é <?php echo $result; ?></p>
    </form>
</body>
</html>