<!DOCTYPE html>
<html lang="vi-VN">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Trắc nghiệm tính cách</title>
</head>

<body>
    <?php
    $dataQuestion = file('questions.txt') or die("Can't read file!");
    $dataOption = file('options.txt') or die("Can't read file!");

    array_shift($dataQuestion);
    array_shift($dataOption);

    $arrQuestion = array();

    foreach ($dataQuestion as $value) {
        $questionId = explode('|', $value)[0];
        $question = explode('|', $value)[1];
        $arrQuestion[$questionId]['question'] = $question;
    }

    foreach ($dataOption as $value) {
        $questionId = explode('|', $value)[0];
        $optionId = explode('|', $value)[1];
        $option = explode('|', $value)[2];
        $point = explode('|', $value)[3];

        $arrQuestion[$questionId]['sentences'][$optionId]['option'] = $option;
        $arrQuestion[$questionId]['sentences'][$optionId]['point'] = $point;
    }
    ?>
    <div class="content">
        <h1>Trắc nghiệm tính cách</h1>
        <form action="result.php" method="POST">

            <?php
            foreach ($arrQuestion as $i => $item) {
                echo '<div class="question">';
                echo '<p><span>Câu ' . $i . ': </span>' . $item['question'] . '</p>';
                echo '<ul style="list-style-type: none;">';
                foreach ($item['sentences'] as $key => $option) {
                    echo '<li><label><input type="radio" name="' . 'question' . $i . '" value="' . $option['point'] . '">' . $option['option'] . '</label></li>';
                }
                echo '</ul>';
                echo '</div>';
            }
            ?>

            <input type="submit" value="Xem kết quả" name="submit" style="display: flex; margin: 0 auto;">
        </form>
    </div>
</body>

</html>