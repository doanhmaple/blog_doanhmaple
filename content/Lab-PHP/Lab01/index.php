<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Máy tính đơn giản</title>
</head>
<body>
    <?php
        $num1 = "";
        $num2 = "";
        $operator = "";
        $result = "";

        if(isset($_POST["firstNumber"]) == true && isset($_POST["secondNumber"]) == true && isset($_POST["operator"]) == true) {
            $num1 = $_POST["firstNumber"];
            $num2 = $_POST["secondNumber"];
            $operator = $_POST["operator"];

            if(is_numeric($num1) && is_numeric($num2)){
                switch($operator){
                    case "+":
                        $result = $num1 + $num2;
                        break;
                    case "-":
                        $result = $num1 - $num2;
                        break;
                    case "/":
                        $result = $num1 / $num2;
                        break;
                    case "%":
                        $result = $num1 % $num2;
                        break;
                    case "*":
                        $result = $num1 * $num2;
                        break;
                    case "x":
                        $result = $num1 * $num2;
                        break;
                    default:
                        $result = "";
                        break;
                }
            }
        }
    ?>
    <div class="content">
        <h1 id="title-calc">Mô phỏng máy tính điện tử</h1>
        <form action="#" method="post" name="main-form">
            <div class="row">
                <label for="firstNumber"><span>Số thứ nhất</span></label>
                <input type="text" id="firstNumber" name="firstNumber" placeholder="Nhập vào số thứ nhất" value="<?php echo $num1; ?>">
            </div>
            <div class="row">
                <label for="operator"><span>Phép tính</span></label>
                <input type="text" id="operator" name="operator" placeholder="Nhập phép toán" value="<?php echo $operator; ?>">
            </div>
            <div class="row">
                <label for="secondNumber"><span>Số thứ hai</span></label>
                <input type="text" id="secondNumber" name="secondNumber" placeholder="Nhập vào số thứ hai" value="<?php echo $num2; ?>">
            </div>
            <div class="row">
                <input type="submit" name="displayResult" value="Xem kết quả">
            </div>
            <div class="row">
                <p><?php if($result != ""){echo $num1 . " " . $operator . " " . $num2 . " = " . $result;}?></p>
            </div>
        </form>
    </div>
</body>
</html>