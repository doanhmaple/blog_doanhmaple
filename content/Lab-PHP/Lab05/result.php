<!DOCTYPE html>
<html lang="vi-VN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Trắc nghiệm tính cách - Kết quả tính cách</title>
</head>
<body>
    <?php
    $dataResult = file('result.txt') or die("Can't read file!");
    $dataQuestion = file('questions.txt') or die("Can't read file!");
    array_shift($dataResult);
    array_shift($dataQuestion);

    $totalPoint = 0;
    $result = '';

    foreach($dataQuestion as $item) {
        $id = explode('|', $item)[0];
        $point = (int)$_POST['question' . $id];
        $totalPoint += $point;
    }

    foreach($dataResult as $item) {
        $min = (int)explode('|', $item)[0];
        $max = (int)explode('|', $item)[1];

        if($min <= $totalPoint && $totalPoint <= $max) {
            $result = explode('|', $item)[2];
            break;
        }
    }
    ?>

    <div class="content">
        <h1>Kết quả trắc nghiệm tính cách</h1>
        <h2>Số điểm của bạn là: <?php echo '<span style="color: red">' . $totalPoint . '</span>'; ?></h2>
        <h3>Kết quả trắc nghiệm tính cách:</h3>
        <?php
        echo '<p style="font-size: 18px">' . $result . '</p>';
        ?>
        <form action="index.php" method="POST">
            <input type="submit" value="Quay lại" name="submit" style="display: flex; margin: 0 auto;">
        </form>
    </div>
</body>
</html>