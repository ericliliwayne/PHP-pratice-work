<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>日曆練習-陣列</title>
    <style>
        .table{
            width:560px;
            height:560px;
            /* border:1px solid green; */
            display:flex;
            flex-wrap:wrap;
            align-content: baseline;
            margin-left:1px;
            margin-top:1px;
            font-family: '標楷體';
            font-size: 50px;
            text-align: center;
        }

        .table div{
            display:inline-block;
            width:80px;
            height:80px;
            border:1px solid #999;
            box-sizing: border-box;
            margin-left:-1px;
            margin-top:-1px;
        }
        .table div.header{
            background:black;
            color:white;
            height: 70px;
        }
        .header01{
            background:black;
            color:white;
            width: 554px;
            height: 80px;
            font-size: 50px;
            font-family:Arial, Helvetica, sans-serif;
            text-align: center;
        }
        .weekend{
            background:pink;
        }
        .workday{
            background:lightgoldenrodyellow;
        }
        .today{
            background:lightseagreen;
        }
    </style>
</head>
<body>
    <h1>使用陣列來做月曆</h1>
<?php
date_default_timezone_set("Asia/Taipei");//調整時區
$month=date('n');//取當月分的數字
$a=date('Y/n/j');//取今天日期
$b=['星期日','星期一','星期二','星期三','星期四','星期五','星期六'];
echo "<p style='font-size:45px;font-family:標楷體;color:red'>今天是 $a ".$b[date('w')]."</p>";//輸出今天日期星期

$firstDay=date("Y-").$month."-1";
$firstWeekday=date("w",strtotime($firstDay));
$monthDays=date("t",strtotime($firstDay));
$lastDay=date("Y-").$month."-".$monthDays;
$today=date("Y-m-d");
$lastWeekday=date("w",strtotime($lastDay));
$dateHouse=[];

for($i=0;$i<$firstWeekday;$i++){//1號已前設為空白
    $dateHouse[]="";
}

for($i=0;$i<$monthDays;$i++){//將日期存為陣列
    $date=date("Y-m-d",strtotime("+$i days",strtotime($firstDay)));
    $dateHouse[]=$date;
}

for($i=0;$i<(6-$lastWeekday);$i++){//當月最後一天設為空白
    $dateHouse[]="";
}

?>
<?php
    echo "<table class='table02'>";
    echo "<div class='header01'>西元 ".date('Y')." 年 ".$month." 月份</div>";
    echo "</table>";
?>
<div class="table">

<div class='header'>日</div>
<div class='header'>一</div>
<div class='header'>二</div>
<div class='header'>三</div>
<div class='header'>四</div>
<div class='header'>五</div>
<div class='header'>六</div>
<?php
foreach($dateHouse as $k => $day){
    $hol=($k%7==0 || $k%7==6)?'weekend':'workday';//判定假日與非假日套用CSS
    //$hol2=($k%7!=0 || $k%7!=6)?'workday':"";
    if(!empty($day)){
        $dayFormat=date("j",strtotime($day));
        echo "<div class='{$hol}'>{$dayFormat}</div>";
    }else{
        echo "<div class='{$hol}'></div>";

    }
    
}



?>
</div>



</body>
</html>