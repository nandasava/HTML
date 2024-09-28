<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $num1 = floatval($_POST['number1']);
    $num2 = isset($_POST['number2']) ? floatval($_POST['number2']) : 0;
    $operation = $_POST['operation'];

    $result = "";

    switch($operation) {
        case "add":
            $result = $num1 + $num2;
            break;
        case "subtract":
            $result = $num1 - $num2;
            break;
        case "multiply":
            $result = $num1 * $num2;
            break;
        case "divide":
            $result = ($num2 != 0) ? $num1 / $num2 : "Division by zero error!";
            break;
        case "exponentiate":
            $result = pow($num1, $num2);
            break;
        case "percentage":
            $result = ($num1 / 100) * $num2;
            break;
        case "sqrt":
            $result = ($num1 >= 0) ? sqrt($num1) : "Square root of negative number!";
            break;
        case "log":
            $result = ($num1 > 0) ? log($num1) : "Logarithm of non-positive number!";
            break;
        default:
            $result = "Invalid operation!";
            break;
    }
    
    echo "Result: " . $result;
}
?>
