<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>kadai_005</title>
  </head>

<body>
  <p>
    <?php
    // 変数に値を代入する
    $score1 = 80;
    $score2 = 60;
    $score3 = 55;
    $score4 = 40;
    $score5 = 100;
    $score6 = 25;
    $score7 = 80;
    $score8 = 95;
    $score9 = 30;
    $score10 = 60;

    $sum = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10;

    // 合計点を求める
    echo '合計点';
    echo '<br>';
    echo $sum;
    echo '<br>';

    // 平均点を求める
    echo '平均点';
    echo '<br>';
    echo $sum / 10;
    