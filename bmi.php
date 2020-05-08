<?php 
echo '身長を入力してください: ';
$height=trim(fgets(STDIN));
echo '体重を入力してください: ';
$weight=trim(fgets(STDIN));
$height=$height/100;
$result=$weight/($height*$height);
if($result<=18.5){
    echo 'あなたは、低体重です。';
}
else if($result>18.5 && $result<25){
    echo 'あなたは、普通体重です。';
}
else{
    echo 'あなたは、肥満です。';
}
?>