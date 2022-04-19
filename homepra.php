<style>
*{
    font-family: 'Courier New', Courier, monospace;
}
table{
        color: blue;
        border: 1px solid black;
        border-collapse: collapse; /*摺疊*/
    }
    td{
        border: 1px solid gray;
        padding: 5px 10px;
        text-align: center;
    }
.header{
        background-color: lightgreen;
    }
    </style>
<H1>九九乘法表</H1>
<hr>
<?php
echo "<table>";
 for($i=1;$i<=9;$i++){
     echo "<tr>";
    for($j=1;$j<=9;$j++){
        echo "<td>";
        echo "{$j}x{$i}=".$i*$j;
        echo "</td>";
        
    }
    echo "</tr>";
    
 }
    echo "<br>";
    echo "</table>";
    echo "<hr>";
    echo"<h2>交叉計算結果呈現的九九乘法表</h2>";
    echo "<table>";
 for($i=0;$i<10;$i++){
     echo "<tr>";
    for($j=0;$j<10;$j++){
        if($i==0&&$j==0){ //空值
            echo "<td class='header'></td>";
        }
        else if($i==0){
            echo "<td class='header'>$j</td>";
        }else if($j==0){
            echo "<td class='header'>$i</td>";
        }else{
            echo "<td>";
            echo $i*$j;
            echo "</td>";
        }
        
    }
    echo "</tr>";
    
 }
    echo "<br>";
    echo "</table>";
    echo "<hr>";


?>
<hr>
<h1>成績判斷</h1>
<?php
$score=-1;
$level=($score<60)?5:floor(($score/10));
if($score>100 || $score<0){
    echo "輸入錯誤請重新輸入!";

}else{
    switch($level){
    case "5":
        echo "E";
    break;
    case "6":
        echo "D";
    break;
    case "7":
        echo "C";
    break;
    case "8":
        echo "B";
    break;
    case "9":
        echo "A";
    break;
    case "10":
        echo "A";
    break;
}
}
echo "<hr>";

?>
<h1>畫星星</h1>
<?php
echo"<h2>上直角三角形</h2>";
echo "<hr>";
$num=10;
for($i=0;$i<$num;$i++){
    
    for($j=0;$j<=$i;$j++){
        echo "*";
    }
    echo "<br>";
}

echo "<hr>";
echo"<h2>下直角三角形</h2>";
echo "<hr>";
$num=12;
for($i=0;$i<$num;$i++){
    
    for($j=$num;$j>$i;$j--){
        echo "*";
    }
    echo "<br>";
}
echo "<hr>";
echo"<h2>正三角形</h2>";
echo "<hr>";
$num=21;
if($num%2==0){
    $num=$num+1;
}
if($num<3){
    $num=3;
}else{
    for($i=0;$i<$num;$i++){
    for($k=($num-1);$k>$i;$k--){
        echo "&nbsp";
    }
    
    for($j=0;$j<($i*2+1);$j++){
        echo "*";
    }
    echo "<br>";
}
}

echo "<hr>";
echo"<h2>正下三角形</h2>";
echo "<hr>";
$num=21;
if($num%2==0){
    $num=$num+1;
}
if($num<3){
    $num=3;
}else{
    for($i=0;$i<$num;$i++){
    for($k=0;$k<$i;$k++){
        echo "&nbsp";
    }
    
    for($j=($num*2)-1;$j>($i*2);$j--){
        echo "*";
    }
    echo "<br>";
}
}
echo "<hr>";
echo"<h2>菱形</h2>";
echo "<hr>";
$num=31;
if($num%2==0){
    $num=$num+1;
}
if($num<3){
    $num=3;
}else{
    for($i=0;$i<$num;$i++){
    for($k=($num-1);$k>$i;$k--){
        echo "&nbsp";
    }
    
    for($j=0;$j<($i*2+1);$j++){
        echo "*";
    }
    echo "<br>";
}
}
//
$num=$num-1;

/*if($num%2==0){
    $num=$num+1;
}*/
if($num<3){
    $num=3;
}else{
    for($i=0;$i<$num;$i++){
    for($k=0;$k<=$i;$k++){
        echo "&nbsp";
    }
    
    for($j=($num*2)-1;$j>($i*2);$j--){
        echo "*";
    }
    echo "<br>";
}
}
echo "<hr>";
echo"<h2>矩形挖空</h2>";
echo "<hr>";
$num=20;
for($i=0;$i<$num;$i++){

    if($i==0 || $i==($num-1)){
        for($j=0;$j<$num;$j++){
            echo"*";
    }
    }else{
        for($j=0;$j<$num;$j++){
            if($j==0 || $j==($num-1)){
                echo "*";
            }else{
                echo "&nbsp";
            }
    }
}
echo "<br>";
}
    

echo "<hr>";
echo"<h2>矩形+對角線</h2>";
echo "<hr>";

?>
