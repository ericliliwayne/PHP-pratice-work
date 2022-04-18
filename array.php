<style>
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
    /*td:nth-child(2n){
        background-color: lightgreen;
    }
    tr:nth-child(2n){
        background-color: lightpink;
    }*/
</style>

<h1>九九乘法表</h1>
<?php
echo "<table>"; 
for($i=1;$i<=9;$i++){ 

    /*偶數行改變顏色
    if($i%2==0){
        echo "<tr style='background:lightgreen'>";
    }else{ 
        echo "<tr>";
    }*/
    

for($j=1;$j<=9;$j++){

    //偶數列改變顏色
    if($j%2 == 0){ 
        echo "<td style='background:lightgreen'>";
    }else{ 
        echo "<td>";
    }
    echo "{$i}x{$j}=";//大括號適用於PHP7以上
    echo $i*$j;
    echo "</td>";
}
echo "</tr>";
}
echo "</table>";
?>
<?php
echo "<hr>";
echo "<table>"; 
for($i=1;$i<=9;$i++){ 

for($j=1;$j<=9;$j++){

    //偶數十字列改變顏色
    /*if($j%2 == 0 && $i%2 == 0)*/
    /*if((($i-1)*9+$j) == 30)*///特定格數上色
    if($i==$j){ //對角線上色
        echo "<td style='background:lightblue'>";
    }else{ 
        echo "<td>";
    }
    echo "{$i}x{$j}=";//大括號適用於PHP7以上
    echo $i*$j;
    echo "</td>";
}
echo "</tr>";
}
echo "</table>";
?>
<?php
echo "<hr>";
echo "<table>";
for($i=1;$i<=9;$i++){ 

for($j=1;$j<=$i;$j++){

    //偶數十字列改變顏色
    /*if($j%2 == 0 && $i%2 == 0)*/
    /*if((($i-1)*9+$j) == 30)*///特定格數上色
    if($i==$j){ //對角線上色
        echo "<td style='background:lightgray'>";
    }else{ 
        echo "<td>";
    }
    echo "{$i}x{$j}=";//大括號適用於PHP7以上
    echo $i*$j;
    echo "</td>";
}
echo "</tr>";
}
echo "</table>";
?>
<?php
echo "<hr>";
echo "<table>";
//加上抬頭並改色
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
echo "</table>";
?>

<!-- <table>
    <tr>
        <td>1X1=1</td>
        <td>1X2=2</td>
        <td>1X3=3</td>
        <td>1X4=4</td>
        <td>1X5=5</td>
        <td>1X6=6</td>
        <td>1X7=7</td>
        <td>1X8=8</td>
        <td>1X9=9</td>
    </tr>
    <tr>
        <td>2X1=2</td>
        <td>2X2=4</td>
        <td>2X3=6</td>
        <td>2X4=8</td>
        <td>2X5=10</td>
        <td>2X6=12</td>
        <td>2X7=14</td>
        <td>2X8=16</td>
        <td>2X9=18</td>
    </tr>
    <tr>
        <td>3X=</td>
        <td>3X=</td>
        <td>3X=</td>
        <td>3X=</td>
        <td>3X=</td>
        <td>3X=</td>
        <td>3X=</td>
        <td>3X=</td>
        <td>3X=</td>
    </tr>
    <tr>
        <td>4X=</td>
        <td>4X=</td>
        <td>4X=</td>
        <td>4X=</td>
        <td>4X=</td>
        <td>4X=</td>
        <td>4X=</td>
        <td>4X=</td>
        <td>4X=</td>
    </tr>
    <tr>
        <td>5X=</td>
        <td>5X=</td>
        <td>5X=</td>
        <td>5X=</td>
        <td>5X=</td>
        <td>5X=</td>
        <td>5X=</td>
        <td>5X=</td>
        <td>5X=</td>
    </tr>
    <tr>
        <td>6X=</td>
        <td>6X=</td>
        <td>6X=</td>
        <td>6X=</td>
        <td>6X=</td>
        <td>6X=</td>
        <td>6X=</td>
        <td>6X=</td>
        <td>6X=</td>
    </tr>
    <tr>
        <td>7X=</td>
        <td>7X=</td>
        <td>7X=</td>
        <td>7X=</td>
        <td>7X=</td>
        <td>7X=</td>
        <td>7X=</td>
        <td>7X=</td>
        <td>7X=</td>
    </tr>
    <tr>
        <td>8X=</td>
        <td>8X=</td>
        <td>8X=</td>
        <td>8X=</td>
        <td>8X=</td>
        <td>8X=</td>
        <td>8X=</td>
        <td>8X=</td>
        <td>8X=</td>
    </tr>
    <tr>
        <td>9X=</td>
        <td>9X=</td>
        <td>9X=</td>
        <td>9X=</td>
        <td>9X=</td>
        <td>9X=</td>
        <td>9X=</td>
        <td>9X=</td>
        <td>9X=</td>
    </tr>
</table> -->
