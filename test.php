<?php

log_message('test');



function log_message($message = null) {
  $filename = date('Y-m-d').'.log'; // ログファイル出力先

  if (!file_exists($filename)) {  // ログファイル存在チェック
      // ログファイルが存在しないとき新規作成
      touch($filename);
  }
  $fp = fopen($filename, 'a');
  $log_output = date("Y-m-d H:i:s") . "\r\n";
  $log_output .= print_r($message, true) . "\r\n";
  fwrite($fp, $log_output);
  fclose($fp);
}



?>
