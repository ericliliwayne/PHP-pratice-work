<h1>給定兩個日期，計算中間間隔天數</h1>
<?php
$day1="1993-10-07";
$day2="2022-04-25";
echo "日期->".$day1."<br>";
echo "日期->".$day2."<br>";

$time1=strtotime($day1);
$time2=strtotime($day2);
echo $time1;
echo "<br>";
echo $time2;
$gap=($time2-$time1-(24*60*60));
$gap=$gap/(24*60*60);

$duration=($time2-$time1+(24*60*60));
$duration=$duration/(24*60*60);

$diff=($time2-$time1);
$diff=$diff/(24*60*60);

echo "<hr>";
echo "中間間隔->".$gap."天";
echo "<br>";
echo "經過了->".$duration."天";
echo "<br>";
echo "相差了->".$diff."天";
?>
<h3>計算距離自己下一次生日還有幾天</h3>
<?php
$birthday="10-07";
//$now=strtotime('now');
$today=strtotime(date("Y-m-d"));
$mybirth=strtotime(date("Y-").$birthday);
$diff=0;
$result="";
if($mybirth-$today>0){
    $diff=($mybirth-$today)/(24*60*60);
    $result="距離您的生日天數還有<span style='color:red'>".$diff."</span>天";
}else if($mybirth-$today<0){
    $mybirth=strtotime("+1 year",$mybirth);
    $diff=($mybirth-$today)/(24*60*60);
    $result="距離您的生日天數還有<span style='color:red'>".$diff."</span>天";
}else{
    $result="恭喜您!今天是您的生日!!助您生日快樂~~~";
}
echo $result;

?>
<h3>利用date()函式的格式化參數，完成以下的日期格式呈現</h3>
<?php
date_default_timezone_set("Asia/Taipei");
echo "<hr>";
echo date('Y/m/d');
echo "<hr>";
echo date('n 月 j 日 l');
echo "<hr>";
echo date('Y-n-j G:').(int)date('i').":".(int)date('s');
echo "<hr>";
echo date('Y-n-j G:i:s');
echo "<hr>";
$workday="";
$W=date('w');
if($W==0 || $W==6){
    $workday="假日";
}else{
    $workday="上班日";
}
echo date('今天是西元Y年n月j日 ').$workday;
echo "<hr>";

?>
<h3>利用迴圈來計算連續五個周一的日期</h3>
<?php
$today=date('Y-m-d l');
echo "本周:".$today;
echo "<br>";
$todaytime=strtotime(date('Y-m-d l'));
$nextweek=strtotime("+1 week",$todaytime);

$n=52;
for($i=1;$i<=$n;$i++){
    $nextweek=strtotime("+$i week",$todaytime);
    echo date('Y-m-d l',$nextweek)."<br>";
}
?>