<h1>迴圈</h1>
<?php
/*for($i=1;$i<=100;$i++){
    echo $i."<br>";
    $i++;
}*/
/*for($i=1;$i<=100;$i++){
    //echo "第".$i."次迴圈"."<br>";
    if($i%2==1){
        echo $i.",";
    }
}
echo "<br>";
for($i=1;$i<=100;$i=$i+2){
    echo $i.",";
}
echo "<br>";
for($i=1;$i<=100;$i=$i+2){
    echo ($i+1).",";
}*/
?>
<h1>while/do...while</h1>
<hr>
<?php
/*$i=1;
while($i<100){
    echo $i.'<br>';
    $i=$i+1;
    
}
echo "<hr>";
$i=1;
do{
    echo $i.'<br>';
    $i=$i+1;
}while($i<100);*/

//1.3.5.7....n
$n=100;//隨機定義一個數值(變數)
for($i=1;$i<$n;$i=$i+2){
echo $i,",";
}

//10.20.30....n
$n=10;//隨機定義一個數值(變數)
echo "<br>";

for($i=1;$i<$n;$i++){
    echo ($i*10).",";
    }
    echo "<hr>";

//質數判斷
$n=1000;
for($j=3;$j<$n;$j++){
    $test=true;//預設數值為質數
    $sqrt=ceil(sqrt($j));//開根號(sqrt) 無條件進位(ceil)
    for($i=2;$i<=$sqrt;$i++){
        if($j%$i==0){ //餘數為0(可整除)
            $test=false;//測試結果(其中)有不符合，則終止迴圈
            break;
        }
    }
    if($test==true){ //測試結果都為符合條件，印出結果(數值)
        echo $j.",";
    }
}
echo ($test==true)?'是一個質數':'不是一個質數';


?>