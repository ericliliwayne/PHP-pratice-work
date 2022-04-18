<h1>潤年的判斷</h1>
<?php
$year=1596;
echo '年=>'.$year."<br>";

if((($year%4!=0) && ($year%100!=0)) || ($year%400!=0)){
    echo "這是潤年";
}else{
    echo "這是平年";
}

/*if($year%4!=0){
    echo "這是平年";
}else if($year%100!=0){
    echo "這是潤年";
}else if($year%400!=0){
    echo "這是平年";
}else{
    echo "這是潤年";
    
}*/

?>