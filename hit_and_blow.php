<?php
    for($i=1;$i<=10;$i++){
        echo "□■□■□■□■□■□■□■□■□■□■□■□■□■□■\n";
        echo $i."回目のチャレンジ！\n";
        echo '3桁の半角数字を重複なしで入力してください：';
        $result=trim(fgets(STDIN));
        $array = str_split($result);
        $max =  max(array_count_values($array)); // 各値の出現回数を数える// 最大の出現回数を取得する
        //自動発生の数字
        //$pc=[1,2,4];
        for($i=0;$i<3;$i++){
            $pc[$i]=rand(1,9);
        }
        if(strlen($result)<=3 && $max===1){
            if($array==$pc){
                echo "正解です".$i."回目でクリアです\n";
                 break;
            }
            else{
                $int=0;
                for($l=0;$l<3;$l++){
                    if($array[$l]===$pc[$l]){
                        $int++;
                    }
                }
                $blow=0;
                for($m=0;$m<3;$m++){
                    for($n=0;$n<3;$n++){
                        if($m!=$n && $pc[$m]==$array[$n]){
                            $blow++;
                        }
                    }
                }
                echo "□■□■□■□■□■□■□■□■□■□■□■□■□■□■\n";
                echo $i."回目のチャレンジ！\n";
                echo $int."HIT".$blow."Blow\n";
            }
        }
        else{
            echo "エラー：3桁の半角数字を重複なしで入力してください!\n";
        }
        
    }
?>