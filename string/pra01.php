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
    $array=explode(",",$str);//explode
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
        $str="this,is,a,book";
        $array=explode(",",$str);
        //echo "<pre>";
        //print_r($array);
        //echo "</pre>";

        $newstr=join(" ",$array);//或用implode(" ",$array)也可達成相同結果
        echo $newstr;
    ?>
    <hr>
    <h1>子字串取用</h1>
    <article>
        <h3>子字串取用</h3>
        <div>
        將” The reason why a great man is great is that he resolves to be a great man”只取前十字成為” The reason…”
        </div>
    </article>
    <?php
        //$str="The reason why a great man is great is that he resolves to be a great man";
        $str="有志者事竟成";
        echo $str;
        echo "<br>";
        //$newstr=substr($str,0,10);//從0開始取10個字(字元)
        $newstr=mb_substr($str,0,3);//有中文字用mb系列比較好，主流用法
        echo $newstr."...";

    ?>
    <hr>
    <h1>尋找字串與HTML、css整合應用</h1>
    <article>
        <h3>尋找字串與HTML、css整合應用</h3>
        <div>
        給定一個句子，將指定的關鍵字放大
        “學會PHP網頁程式設計，薪水會加倍，工作會好找”
        請將上句中的 “程式設計” 放大字型或變色.
        </div>
    </article>
    <?php
        $str="學會PHP網頁程式設計，薪水會加倍，工作會好找";
        echo $str;
        echo "<br>";
        $search="程式設計";
        $pos=mb_strpos($str,$search);
        $hand=mb_substr($str,0,$pos);
        $tail=mb_substr($str,$pos+mb_strlen($search));
        $str=$hand
        ."<span style='font-size:2rem;color:red'>"
        .$search
        ."</span>"
        ."，薪水會加倍，工作會好找";
        echo $str;
        echo "<br>";
        //echo "學會PHP網頁<span style='font-size:2rem;color:red'>程式設計</span>，薪水會加倍，工作會好找";
    ?>

</body>
</html>