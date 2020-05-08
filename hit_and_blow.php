<?php
    for($i=1;$i<=10;$i++){
        echo "□■□■□■□■□■□■□■□■□■□■□■□■□■□■\n";
        echo $i."回目のチャレンジ！\n";
        echo '3桁の半角数字を重複なしで入力してください：';
        $result=trim(fgets(STDIN));
        $array = str_split($result);
        $max =  max(array_count_values($array)); // 各値の出現回数を数える// 最大の出現回数を取得する
        //自動発生の数字
        $pc=[];
        for($i=0;$i<3;$i++){
            $pc[$i]=rand(1,9);
        }
        if(strlen($result)<=3 && $max===1){
            //配列に変更
            // if($result==="123"){
            // }
            // else{
            //      echo "正解です\n";
            //     break;
            // }
            if($array==$pc){
                echo "正解です\n";
                 break;
            }
            else{
                echo "□■□■□■□■□■□■□■□■□■□■□■□■□■□■\n";
                echo $i."回目のチャレンジ！\n";
                echo "Hit:0 Blow:2\n";

            }
        }
        else{
            echo "エラー：3桁の半角数字を重複なしで入力してください!\n";
        }
        
    }
?>