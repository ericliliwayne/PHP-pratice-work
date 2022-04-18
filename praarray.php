<h2>建立學生成績陣列</h2>
<?php
$a=[
    [22,33,44,55],
    [29,12,33,77],
    [98,22]
  ];
$a=[
    '國文'=>[
                [
                    '姓名'=>'小明',
                    '成績'=>58
                ],
                [
                    '姓名'=>'小美',
                    '成績'=>73
                ],
                [
                    '姓名'=>'阿明',
                    '成績'=>90
                ]
        
                ],
    '英文'=>[
                [
                    '姓名'=>'小明',
                    '成績'=>98
                ],
                [
                    '姓名'=>'小美',
                    '成績'=>22
                ],
                [
                    '姓名'=>'阿明',
                    '成績'=>60
                ]
        
            ],
    '數學'=>[
                [
                    '姓名'=>'小明',
                    '成績'=>98
                ],
                [
                    '姓名'=>'小美',
                    '成績'=>22
                ],
                [
                    '姓名'=>'阿明',
                    '成績'=>60
                ]
        
            ],
    '地理'=>[
                [
                    '姓名'=>'小明',
                    '成績'=>98
                ],
                [
                    '姓名'=>'小美',
                    '成績'=>22
                ],
                [
                    '姓名'=>'阿明',
                    '成績'=>60
                ]
        
            ],
    '歷史'=>[
                [
                    '姓名'=>'小明',
                    '成績'=>98
                ],
                [
                    '姓名'=>'小美',
                    '成績'=>22
                ],
                [
                    '姓名'=>'阿明',
                    '成績'=>60
                ]
        
            ],
];
?>

<h2>利用程式產生九九乘法表</h2>
<?php
//方法一
$nine=[];
for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        $nine[]="$i x $j =".($i*$j);
    }
}
for($i=0;$i<count($nine);$i++){
    echo $nine[$i]."&nbsp;&nbsp;";
    if($i%9==8){
        echo "<br>";
    }
}
echo "<hr>";
//方法2-key值下手
$nine=[];
for($i=1;$i<=9;$i++){
    for($j=1;$j<=9;$j++){
        $nine["{$i}x{$j}"]=$i*$j;
    }
}
$i=8;
$j=7;
echo "$i x $j =";
echo $nine["{$i}x{$j}"];
?>

<h2>威力彩號</h2>
<?php
echo "<h3>第一區</h3>";
echo rand(1,38).',';
echo rand(1,38).',';
echo rand(1,38).',';
echo rand(1,38).',';
echo rand(1,38).',';
echo rand(1,38).',';
echo "<h3>第二區</h3>";
echo rand(1,8);
echo "<hr>";
//
$a=[];
while(count($a)<6){//第一區抽6個號碼
    $num=rand(1,38);
    if(! in_array($num,$a)){//每次存入陣列中時會先檢查陣列中的資料有沒有重覆
        $a[]=$num;
    }
}
    echo "<br>開出號碼順序:";
for($i=0;$i<count($a);$i++){
    echo $a[$i].",";

}
    echo "<br>開出號碼大小順序:";
    sort($a);
    for($i=0;$i<count($a);$i++){
        echo $a[$i].",";

    }
echo "<h3>第二區</h3>";
echo rand(1,8);


?>

<h2>找閏年</h2>
<?php
$leapyear=[];
$start=2022;
$end=$start+500;
for($year=2022;$year<=$end;$year++){
    if((($year%4!=0) && ($year%100!=0)) || ($year%400!=0)){
        $leapyear[]=$year;
}
}
/*echo "<pre>";
print_r($leapyear);
echo "</pre>";*/
$leap=2108;
if(in_array($leap,$leapyear)){
    echo $leap.'年是閏年';
}else{
    echo $leap.'年不是閏年';
}
/*if((($year%4!=0) && ($year%100!=0)) || ($year%400!=0)){
    echo "這是潤年";
}else{
    echo "這是平年";
}*/
?>
<hr>
<h2>天干地支年</h2>
<pre>
天干：甲乙丙丁戊己庚辛壬癸
地支：子丑寅卯辰巳午未申酉戌亥
天干地支配對：甲子、乙丑、丙寅….甲戌、乙亥、丙子….
</pre>
<hr>
<?php
$sky=['甲','乙','丙','丁','戊','己','庚','辛','壬','癸'];
$land=['子','丑','寅','卯','辰','巳','午','未','申','酉','戌','亥'];
$skyland=[];

for($i=0;$i<count($sky);$i++){

    for($j=0;$j<count($land);$j++){
        $skyland[]=$sky[$i].$land[$j];
    }
}
/*echo "<pre>";
print_r($skyland);
echo "</pre>";
echo "<hr>";*/

$skyland2=[];
$year=(2022-1024);
echo $sky[$year%10].$land[$year%12];

for($i=1024;$i<=2048;$i++){
    $year=$i-1024;
    $skyland2[$i]=$sky[$year%10] . $land[$year%12];
}

echo "<pre>";
print_r($skyland2);
echo "</pre>";

echo "西元2022年是 [".$skyland2[2022]."] 年";

?>
<hr>
<h2>陣列元素反轉(迴圈)</h2>
<pre>
請設計一支程式，在不產生新陣列的狀況下，將一個陣列的元素順序反轉(利用迴圈)
例：$a=[2,4,6,1,8]    反轉後    $a=[8,1,6,4,2]
</pre>
<hr>
<?php
$a=[2,4,6,1,8];
for($i=0;$i<ceil(count($a)/2);$i++){//取天花板
    $t=$a[$i];
    $a[$i]=$a[count($a)-1-$i];
    $a[count($a)-1-$i]=$t;
    echo "$i => [{$a[0]},{$a[1]},{$a[2]},{$a[3]},{$a[4]}] <br>";
}
print_r(array_reverse($a));

?>