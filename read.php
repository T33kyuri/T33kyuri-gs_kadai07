<?php
// ファイルを開く
// $data = file_get_contents('data/data.txt');
// echo nl2br($data);
$data = "2023-12-03 11:47:01_山田_太郎_ええええ\n2023-12-04 11:47:02_山本_花子_おおおお";

// テキストを行ごとに分割して、前後を配列に格納する。
$lines = explode("\n", $data);

// $linesの配列数を保存
$linesMax = count($lines);

// 多重配列で保存
for ($i = 0; $i < $linesMax; $i++) {
  // 行を "_" で分割
  $sec = explode("_", $lines[$i]);

  // 配列に追加
  $dataArray[] = array(
    $sec[0], $sec[1], $sec[2], $sec[3]
  );
}


// $secの配列数を保存
$secMax = count($sec);

echo '<table style="border-collapse: collapse;">';// テーブルのスタイルを設定
echo '<td style="border: 1px solid black; padding: 5px; text-align: center;">'  . "　登録日時　" . '</td>';
echo '<td style="border: 1px solid black; padding: 5px; text-align: center;">'  . "　名前　" . '</td>';
echo '<td style="border: 1px solid black; padding: 5px; text-align: center;">'  . "　出身　" . '</td>';
echo '<td style="border: 1px solid black; padding: 5px; text-align: center;">'  . "　Eメール　" . '</td>';

for ($i = 0; $i < $linesMax; $i++) {
  echo '<tr>'; // 行の開始

  for ($j = 0; $j < $secMax; $j++) {
    echo '<td style="border: 1px solid black; padding: 5px;">' . $dataArray[$i][$j] . '</td>'; // セルのスタイルを設定
  }

  echo '</tr>'; // 行の終了
}

echo '</table>'; // テーブルの終了

?>