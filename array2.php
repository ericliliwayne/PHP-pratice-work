<h2>陣列</h2>
<?php
$a=[];
echo var_dump($a);
echo "<hr>";
print_r($a);
echo "<hr>";

$a[1]="A";
$a[5]="B";
$a['大明']=59;
echo var_dump($a);
echo "<hr>";
print_r($a);
echo "<hr>";
echo "<h3>取用方式</h3>";
echo '$a[5] =>'.$a[5]; 
echo "<br>";
echo '$a[大明] =>'.$a['大明'];
echo "<hr>";

$a=[];//重置陣列
$a[]="泰山";
$a[]="新北";
$a[]="台北";
$a[]="高雄";
$a[]="台中";
echo var_dump($a);
echo "<hr>";
print_r($a);
echo "<hr>";
echo "<h3>取用方式</h3>";

echo '$a[0] =>'.$a[0];
echo "<br>";
echo '$a[1] =>'.$a[1];
echo "<br>";

?>