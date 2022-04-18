<style>
    *{
        font-family: 'Courier New', Courier, monospace;
    }
</style>
<h1>畫星星</h1>
<h3>直角三角形</h3>
<?php
echo "<hr>";
//直角三角形
for($i=0;$i<5;$i++){ 

    for($j=0;$j<=$i;$j++){    
    echo "*";
    
}
echo "<br>";
}
?>
<h3>倒直角三角形</h3>
<?php
echo "<hr>";
//倒直角三角形
for($i=0;$i<5;$i++){ 

    for($j=5;$j>$i;$j--){    
    echo "*";
    
}
echo "<br>";
}
?>
<h3>正三角形</h3>
<?php
echo "<hr>";
//正直角三角形
for($i=0;$i<5;$i++){ 

    for($k=5;$k>$i;$k--){    
        echo "&nbsp;";
        
    }

    for($j=0;$j<($i*2+1);$j++){    
    
        echo "*";
    
}
echo "<br>";
}
?>
<h3>倒正三角形</h3>
<?php
echo "<hr>";
//倒直角三角形
for($i=0;$i<6;$i++){ 

    for($k=0;$k<$i;$k++){    
        echo "&nbsp;";
        
    }

    for($j=9;$j>($i*2);$j--){    
    
        echo "*";
    
}
echo "<br>";
}
?>
<h3>菱形</h3>
<?php
echo "<hr>";
/*菱形(上三角)
for($i=0;$i<5;$i++){ 

    for($k=5;$k>$i;$k--){    
        echo "&nbsp;";
        
    }

    for($j=0;$j<($i*2+1);$j++){    
    
        echo "*";
    
}
echo "<br>";
}
//下三角
for($i=0;$i<6;$i++){ 
    echo "&nbsp;&nbsp;";
    for($k=0;$k<$i;$k++){    
        echo "&nbsp;";
        
    }

    for($j=8;$j>($i*2+1);$j--){    
    
        echo "*";
    
}*/
/*for($i=0;$i<9;$i++){ 
    if($i<=4){//或<5
        //印空白
        for($k=0;$k<(4-$i);$k++){    
            echo "&nbsp;";
            
        }
        //印星星
        for($j=0;$j<($i*2+1);$j++){    
        
            echo "*";
        
    }

    }else{  
            //印空白
            for($k=0;$k<($i-4);$k++){    
                echo "&nbsp;";
                
            }
            //印星星
            for($j=0;$j<((8-$i)*2+1);$j++){    
            
                echo "*";
            
        }
    }
    
    echo "<br>";
}*/
$size=31;
for($i=0;$i<$size;$i++){

    if($i<=(($size-1)/2)){
        //印空白
        for($k=0;$k<(($size-1)/2-$i);$k++){
            echo "&nbsp;";
        }

        //印星星
        for($j=0;$j<($i*2+1);$j++){
            echo "*";
        }
    }else{
        //印空白
        for($k=0;$k<($i-($size-1)/2);$k++){
            echo "&nbsp;";
        }

        //印星星
        for($j=0;$j<(($size-$i)*2-1);$j++){
            echo "*";
        }
    }
    echo "<br>";
}
?>

<h3>菱形程式變化</h3>
<?php
echo "<hr>";
//上面
$size=10;
//先判斷是否為基數
if($size%2==0){
    $size=$size+1;
    
}else if($size<3){//數值不能小於3
    $size=3;
}
      for($i=0;$i<$size;$i++){

      if($i<=(($size-1)/2)){
        $space=($size-1)/2-$i;
        $stars=$i*2+1; 
     }else{
        $space=$i-($size-1)/2;
        $stars=($size-$i)*2-1; 
     }

    //印空白
     for($k=0;$k<$space;$k++){
        echo "&nbsp;";
    }

    //印星星
     for($j=0;$j<$stars;$j++){
        echo "*";
    }
     echo "<br>";
}
?>
<h3>矩形</h3>
<?php
echo "<hr>";
/*for($i=0;$i<5;$i++){

    if($i==0 || $i==4){
        for($j=0;$j<5;$j++){
            echo"*";
    }
    }else{
        for($j=0;$j<5;$j++){
            if($j==0 || $j==4){
                echo "*";
            }else{
                echo "&nbsp";
            }
    }echo "<br>";
}
    }*/
    //簡化版
for($i=0;$i<5;$i++){

    
    for($j=0;$j<5;$j++){
        
        if($i==0 || $i==4 || $j==0 || $j==4){ //
            echo "*";
        }else{
            echo "&nbsp";
        }
    }
    echo "<br>";
}
    
?>

<h3>矩形+對角線</h3>
<?php
echo "<hr>";
$size=21;
for($i=0;$i<$size;$i++){

    
    for($j=0;$j<$size;$j++){
        
        if($i==0 || $i==($size-1) || $j==0 || $j==($size-1) || $i==$j || $i==(($size-1)-$j)){ //判斷式可多接
            echo "*";
        }else{
            echo "&nbsp";
        }
    }
    echo "<br>";
}
?>

<h3>菱形挖空</h3>
<?php
echo "<hr>";
$size=10;
//先判斷是否為基數
if($size%2==0){
    $size=$size+1;
    
}else if($size<3){//數值不能小於3
    $size=3;
}
      for($i=0;$i<$size;$i++){

      if($i>0 && $i<($size-1)){
        if($i<=(($size-2)/2)){
            $space=($size-1)/2-$i;
            $stars=$i*2+1; 
         }else{
            $space=$i-($size-2)/2;
            $stars=($size-$i)*2-1; 
         }
    
        //印空白
         for($k=0;$k<$space;$k++){
            echo "&nbsp;";
        }
    
        //印星星
         for($j=0;$j<$stars;$j++){
            echo "&nbsp;";
        }
      }else{
          echo "*";
      }
     echo "<br>";
}

?>