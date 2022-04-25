<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>線上月曆</title>
    <style>
        table{
            border-collapse: collapse;
            font-family:Arial, Helvetica, sans-serif;
        }
        table td{
            padding: 5px;
            text-align: center;
            border: 1px solid #aaa;
        }
    </style>
</head>
<body>
    <?php
    $month=4;
    ?>
    <table>
        <tr>
            <td>日</td>
            <td>一</td>
            <td>二</td>
            <td>三</td>
            <td>四</td>
            <td>五</td>
            <td>六</td>
        </tr>
    <?php
        $firstday=date("Y-").$month."-1";
        $firstweekday=date("w",strtotime($firstday));//計算當月第一天是星期幾
        $monthdays=date("t",strtotime($firstday));//第一天的日期並轉成秒數
        $lastday=date("Y-").$month."-".$monthdays;
        echo "當月分是:".$month."月";
        echo "<br>";
        echo "第一天是:".$firstday;
        echo "<br>";
        echo "第一天是星期:".$firstweekday;
        echo "<br>";
        echo "最後一天是:".$lastday;
        echo "<br>";
        echo "當月天數共:".$monthdays."天";
        echo "<br>";
        for($i=0;$i<6;$i++){
            echo "<tr>";

            for($j=0;$j<7;$j++){
                $d=$i*7+($j+1)-$firstweekday-1;
                echo "<td>";
                //echo $d;
                if($d>=0 && $d<$monthdays){
                    $fs=strtotime($firstday);
                    $shiftd=strtotime("+$d days",$fs);
                    $date=date("j",$shiftd);
                    $w=date("w",$shiftd);
                    $today=date("Y-m-j");
                    $chktoday="";
                    if(date("Y-m-j",$shiftd)==$today){
                        $chktoday="today";
                    }
                    //$date=date("Y-m-d",strtotime("+$d days",strtotime($firstday)));
                    if($w==0 || $w==6){
                        echo "<td class='weekend $chktoday'>";
                    }else{
                        echo "<td class='weekday $chktoday'>";
                    }
                    echo $date;
                    echo "</td>";
            }else{
            
            echo "<td></td>";
            
        }
        
    }
    echo "</tr>";
}
    ?>

    </table>
</body>
</html>