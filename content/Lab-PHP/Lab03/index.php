<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vẽ hình tam giác - Vòng lặp</title>
    <style>
        .triangle{
            border: 2px orange solid;
            border-radius: 8px;
        }

        #content h1{
            color: red;
        }
    </style>
</head>
<body>
    <div id="content">
        <h1>In Tam Giác</h1>
        <form action="#" method="post">
            <label>Chọn kiểu tam giác</label><br>
            <label for="type1">
                <img class="triangle" src="Images/triangle1.png" alt="Lỗi">
            </label>
            <input type="radio" id="type1" name="type" value="type1" checked>
            <label for="type1">Kiểu 1</label><br>

            <label for="type2">
                <img class="triangle" src="Images/triangle2.png" alt="Lỗi">
            </label>
            <input type="radio" id="type2" name="type" value="type2">
            <label for="type2">Kiểu 2</label><br>

            <label for="type3">
                <img class="triangle" src="Images/triangle3.png" alt="Lỗi">
            </label>
            <input type="radio" id="type3" name="type" value="type3">
            <label for="type3">Kiểu 3</label><br>

            <label for="numRow">Số hàng</label>
            <input type="text" name="numRow" value="" placeholder="Nhập vào số hàng">
            <input type="submit" name="dataSubmit" value="Tạo tam giác">
        </form>
        <div>
            <?php
                $numRow;
                $text = "triangle";

                if(!isset($_POST["numRow"]) || $_POST["numRow"] == ''){
                    $numRow = 6;
                } else {
                    $numRow = $_POST["numRow"];
                }

                if(isset($_POST["type"])){
                    $type = $_POST["type"];
                    $text = '';

                    switch($type){
                        case 'type1':
                            for ($i = 0; $i < $numRow; $i++){
                                $rowItem = str_repeat('*', $i+1);
                                $text = $text . $rowItem . "<br>";
                            }
                        break;
                        case 'type2':
                            for ($i = $numRow; $i > 0; $i--){
                                $rowItem = str_repeat('*', $i);
                                $text = $text . $rowItem . "<br>";
                            }
                        break;
                        case 'type3':
                            for ($i = 0; $i < $numRow; $i++){
                                $spacePrefix = str_repeat('&nbsp;&nbsp;', $numRow-$i);
                                $rowItem = str_repeat('*', ($i+1)*2-1);
                                $text = $text . $spacePrefix . $rowItem . "<br>";
                            }
                        break;
                        default:
                            alert('Chọn kiểu');
                        break;
                    }
                } else {
                    $text = '';
                    for ($i = 0; $i < $numRow; $i++){
                        $rowItem = str_repeat('*', $i+1);
                        $text = $text . $rowItem . "<br>";
                    }
                }
                
                echo $text;

                function alert($msg) {
                    echo "<script type='text/javascript'>alert('$msg');</script>";
                }
            ?>
        </div>
    </div>
</body>
</html>