<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>日曆自主練習</title>
</head>
<body>
    <h1>日期練習</h1>
    <h2>需要資訊:</h2>
    <p>
        1.表格:除了標題欄，至少要有日~六及月分總天數的表格數(至少7+31個格數)<br>
        2.月分:當月分是?月(=> $month=date('n');)<br>
        3.當月首日:當月1號在星期日~星期六的哪一天?(=> $firstday=date('t');)<br>
        4.當月最後一天:即當月天數(=> $monthdays=date('t');)<br>
        5.若date函數(Y)沒特別指定則會自動去取系統時間的當前年份<br>
        6.以下為php相關日期變數及應用<br>
    </p>
    <?php
        $month=date('n');//當前月分
        $firstDay=date("Y-").$month."-1";//當月首日
        $firstWeekday=date("w",strtotime($firstDay));//當月1號是星期幾
        $monthDays=date("t",strtotime($firstDay));//當月總共有幾天
        $lastDay=date("Y-").$month."-".$monthDays;//當月最後一天是幾月幾號
        $today=date("Y-m-d");//今天日期
        $lastWeekday=date("w",strtotime($lastDay));//最後一天是星期幾
        //設陣列放中文的星期日~六，因為陣列key value預設值和date函數的(w)一樣都是從0開始，所以可以直接用(w)來對應陣列的值
        $b=['星期日','星期一','星期二','星期三','星期四','星期五','星期六'];
        echo "<hr>";
        echo "今天是 $month 月， $month 月第一天是:".$firstDay;
        echo "<br>";
        echo "<br>";
        echo "當月(".$month."月)第一天是在星期: $firstWeekday "."(date的w屬性值)，換成中文是:".$b[date("w",strtotime($firstDay))];
        echo "<br>";
        echo "<br>";
        echo "當月(".$month."月)總共有: ".$monthDays." 天";
        echo "<br>";
        echo "<br>";
        echo "今天是 $month 月， $month 月最後一天是:".$lastDay;
        echo "<br>";
        echo "<br>";
        echo "今天日期是: ".$today;
        echo "<br>";
        echo "<br>";
        echo "當月(".$month."月)最後一天是在星期: $lastWeekday "."(date的w屬性值)，換成中文是:".$b[date("w",strtotime($lastDay))];
        echo "<hr>";
        echo "<hr>";
    ?>
</body>
</html>