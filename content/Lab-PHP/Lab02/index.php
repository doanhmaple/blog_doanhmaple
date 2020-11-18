<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>12 cung hoàng đạo</title>
</head>
<body>
    <?php
        $month = "";
        $day = "";
        $zodiac = "";
        $alert = "";
        $time = "";

        if(isset($_POST["month"]) && isset($_POST["day"])) {
            $month = $_POST["month"];
            $day = $_POST["day"];

            if(!is_numeric($month) && !is_numeric($day)){
                $alert = "Ngày/tháng sai định dạng!";
                $zodiac = "";
            } else {
                if($month < 1 || $month > 12 || $day < 1 || $day > 31){
                    $alert = "Ngày/tháng không hợp lệ";
                } else {
                    $time = mktime(0,0,0,$month, $day, 0);
                    $zodiac = getZodiac($time);
                }
            }
        }

        function getZodiac($time){
            if(makeTime(21,3) <= $time && $time <= makeTime(20,4)){
                return "aries";
            } else if(makeTime(21,4) <= $time && $time <= makeTime(21,5)){
                return "taurus";
            } else if(makeTime(22,5) <= $time && $time <= makeTime(21,6)){
                return "gemini";
            } else if(makeTime(22,6) <= $time && $time <= makeTime(22,7)){
                return "cancer";
            } else if(makeTime(23,7) <= $time && $time <= makeTime(22,8)){
                return "leo";
            } else if(makeTime(23,8) <= $time && $time <= makeTime(23,9)){
                return "virgo";
            } else if(makeTime(24,9) <= $time && $time <= makeTime(23,10)){
                return "libra";
            } else if(makeTime(24,10) <= $time && $time <= makeTime(22,11)){
                return "scorpio";
            } else if(makeTime(23,11) <= $time && $time <= makeTime(21,12)){
                return "sagittarius";
            } else if(makeTime(22,12) <= $time || $time <= makeTime(19,1)){
                return "capricorn";
            } else if(makeTime(20,1) <= $time && $time <= makeTime(19,2)){
                return "aquarius";
            } else if(makeTime(20,2) <= $time && $time <= makeTime(20,3)){
                return "pisces";
            }
            return "";
        }

        function makeTime($day, $month) {
            return mktime(0,0,0,$month, $day, 0);
        }
    ?>
    <div class="content">
        <h1 id="title-calc">Bạn thuộc chòm sao gì?</h1>
        <form action="#" method="post" name="main-form">
            <div class="row">
                <label for="month"><span>Ngày sinh</span></label>
                <input type="text" id="day" name="day" placeholder="Nhập ngày sinh" value="<?php echo $day?>">
            </div>
            <div class="row">
                <label for="year"><span>Tháng sinh</span></label>
                <input type="text" id="month" name="month" placeholder="Nhập tháng sinh" value="<?php echo $month?>">
            </div>
            <div class="row">
                <input type="submit" name="displayResult" value="Xem kết quả">
            </div>
            <div class="row">
                <?php if($zodiac !== ""){ echo '<img class="zodiac" src="Images/' . $zodiac . '.png" alt="' . ucfirst($zodiac) . '">';} ?>
                <p><?php if($zodiac !== ""){echo ucfirst($zodiac);}?></p>
                <p><?php if($alert !== ""){echo $alert;}?></p>
            </div>
        </form>
    </div>
</body>
</html>