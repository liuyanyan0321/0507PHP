<?php
//自動発生の数字
$array=[];
for($i=0;$i<3;$i++){
    $array[$i]=rand(1,9);
}
$resulr=[1,2,4];
$row=[1,2,3];
if($resulr===$row){
    echo "同じ";
}
else{
    echo "違う";
}
?>