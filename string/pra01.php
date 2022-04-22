<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>字串取代</h1>
    
    <article>
        <h3>字串取代</h3>
        <div>
            將”aaddw1123”改成”*********”
        </div>
    </article>
    <?php
    $password="aaddw1123";
    $srtrlen=mb_strlen($password);//計算字元長度
    //str_replace()
    //$password=str_replace("a","*",$password);
    $password=str_repeat("*",$srtrlen);
    echo $password;
    ?>
    <hr>
    <h1>字串分割</h1>
    <article>
        <h3>字串分割</h3>
        <div>
        將”this,is,a,book”依”,”切割後成為陣列
        </div>
    </article>
    <?php
    $str="this,is,a,book";
    $array=explode(",",$str);
    echo "<pre>";
    print_r($array);
    echo "</pre>";
    ?>
    <hr>
    <h1>字串組合</h1>
    <article>
        <h3>字串組合</h3>
        <div>
        將上例陣列重新組合成“this is a book”
        </div>
    </article>
    <?php

    ?>

</body>
</html>