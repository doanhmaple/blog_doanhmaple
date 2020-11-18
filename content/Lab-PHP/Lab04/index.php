<!DOCTYPE html>
<html lang="vi-VN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Giả lập ATM</title>
</head>

<body>
    <?php
    $inputAmount;
    $arr = array(500000, 200000, 100000, 50000, 20000, 10000, 5000, 2000, 1000);
    $result = '';

    if (isset($_POST['inputAmount'])) {
        $inputAmount = $_POST['inputAmount'];
        $arrResult = processDeposit($inputAmount, $arr);
        $result = '';
        foreach ($arrResult as $item) {
            $result = $result . "<p>$item->faceValue</p><p>$item->amount</p><p>$item->total</p>";
        }
    }

    function processDeposit($inputAmount, $arr)
    {
        $num = 0;
        $outputArray = array();
        foreach ($arr as $item) {
            $entry = new stdClass();
            if ($inputAmount >= $item) {
                $num = floor($inputAmount / $item);
                $inputAmount = floor($inputAmount % $item);
                $entry->faceValue = formatCurrency($item, ' VNĐ');
                $entry->amount = $num;
                $entry->total = formatCurrency($num * $item, ' VNĐ');
                $outputArray[] = $entry;
            }
        }

        return $outputArray;
    }

    function formatCurrency($amount, $suffix)
    {
        $output = '';
        $index = 1;
        $amount = strval($amount);
        for ($i = strlen($amount) - 1; $i >= 0; $i--) {
            if ($index === 3 && $i > 0) {
                $output = '.' . $amount[$i] . $output;
                $index = 0;
            } else {
                $output = $amount[$i] . $output;
            }
            $index++;
        }

        return $output . $suffix;
    }
    ?>
    <div class="content">
        <div class="grid-container">
            <div class="grid-item">
                <img src="images/bg.jpg" alt="Ảnh ATM">
            </div>
            <div class="grid-item">
                <h1>Mô phòng máy ATM</h1>
                <p>Nhập vào số tiền muốn thực hiện giao dịch</p>
                <form action="#" method="post">
                    <input type="text" name="inputAmount" placeholder="Nhập vào số tiền">
                    <input type="submit" value="Rút tiền">
                </form>
            </div>
        </div>
        <div class="grid-container-result">
            <strong>Mệnh giá</strong>
            <strong>Số lượng</strong>
            <strong>Thành tiền</strong>
        </div>
        <div class="grid-container-result">
            <?php
            if ($result !== '') {
                echo $result;
            }
            ?>
        </div>
    </div>
</body>

</html>