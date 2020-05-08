<?php
/**
(1) 勝敗（勝ち・負け・あいこ）は$resultに代入してください
(2) プレイヤーの手は$player_handに代入してください
(3) コンピューターの手は$pc_handに代入してください
**/
$janken = array(
    'グー',
    'ちょき',
    'ぱー'
);
$pc_hand = $janken[array_rand($janken)];
$player_hand=$_POST['playerHand'];
if($player_hand==='0' && $pc_hand==='グー'){
    $result="あいこ";
}
else if($player_hand==='0' && $pc_hand=='ちょき'){
     $result="勝ち";
}
else if($player_hand==='0' && $pc_hand=='ぱー'){
     $result="負け";
}
else if($player_hand==='2' && $pc_hand=='グー'){
     $result="負け";
}
else if($player_hand==='2' && $pc_hand=='ちょき'){
     $result="あいこ";
}
else if($player_hand==='2' && $pc_hand=='ぱー'){
     $result="勝ち";
}
else if($player_hand==='5' && $pc_hand=='グー'){
     $result="勝ち";
}
else if($player_hand==='5' && $pc_hand=='ちょき'){
     $result="負";
}
else if($player_hand==='5' && $pc_hand=='ぱー'){
     $result="あい";
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <title>じゃんけん</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>結果は・・・</h1>
        <div class="result-box">
            <!-- じゃんけんの結果を表示しましょう -->
            <p class="result-word"><?php print $result;?></p>
            <!-- プレイヤーの手を表示しましょう -->
            あなた：
            <?php
            
                switch($player_hand){
                    case 0: print "グー"; break;
                    case 2: print "ちょき"; break;
                    case 5: print "ぱー"; break;
                    default:
                }
            ?>
            <br> 
            <!-- コンピュータの手を表示しましょう -->
            コンピューター：<?=$pc_hand?><br>

            <p><a class="red" href="index.php">>>もう一回勝負する</a></p>
        </div>
    </body>
</html>