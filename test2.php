<?php
// PhpSpreadsheetのautoload.phpを読み込む
require '/home/admin/koresawa/work/20240815/PhpSpreadsheet-2.2.2/autoload.php';

// 新しいブックを作成
$spreadsheet = new PhpOffice\PhpSpreadsheet\Spreadsheet();

// アクティブなワークシートを取得
$worksheet = $spreadsheet->getActiveSheet();

// セルA1に文字列を書き込む
$worksheet->setCellValue('A1', 'Hello, World!');

// ブックを保存
$writer = new PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
$writer->save('hello_world.xlsx');
?>
