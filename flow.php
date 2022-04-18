<h1>流程結構</h1>
<h3>if...else</h3>
<h3>switch...case</h3>
<?php
$score=90;
$level=($score>100 || $score<0)? 5 : floor($score/25);
/*if($score>100 || $score<0){
    $level=5;
}else{
    $level=floor($score/25);
}*/
echo $level;
echo "<br>";
echo $level%4;
//多選判斷式寫法
/*if($score>=85){
    $level="A";
}else if($score>=60){
    $level="B";
}else if($score>=30){
    $level="C";
}else{
    $level="D";
}*/

switch($level){
    case "4"://100+
    case "3"://75~99
        echo "厲害，超棒的!";
    break;
    case "2"://50~74
        echo "值得肯定但還可以更進步!";
    break;
    case "1"://25~49
        echo "不及格，再加油!";
    break;
    case "0"://0~24
        echo "不及格，請重讀!";
    break;
    default:
        echo "成績不合理(0~100)請重新輸入!!";
}
?>