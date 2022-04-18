<h1>運算子</h1>
<h3>一元運算子</h3>
<?php
$a=false;
echo !$a;
echo "<hr>";
$b=1;
//$b=$b+1,$b=$b-1
echo ++$b;
echo "<br>";
echo --$b;
echo "<br>";
?>
<h3>三元運算子</h3>
<?php
$score=80;
$level=($score>=60)?'及格':'不及格';
echo $level;
echo "<br>";
//變數交換基礎練習
$a = 10; $b = 50;
$tmp=$a;
$a=$b;
$b=$tmp;
echo 'a='.$a;
echo "<br>";
echo 'b='.$b;
echo "<br>";


?>