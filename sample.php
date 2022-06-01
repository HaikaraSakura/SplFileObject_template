<?php

declare(strict_types=1);

const MY_CSV = 'sample.csv';

// 第二引数で操作モードを指定。rで読み取り、wで書き込み。
$fp = new \SplFileObject(MY_CSV, 'r');

$fp->setFlags(\SplFileObject::READ_CSV); // 読取モードをCSVに指定
$fp->setCsvControl(','); //区切り文字を指定

$columns = [];

foreach ($fp as $line) {
    // $lineに配列で各列の値が入る

    // 一行目は列名を取り出してスキップ
    if ($fp->key() === 0) {
        $columns = $line;
        continue;
    }

    if ($fp->key() !== 0 && !$fp->eof()) {
        // 各行に対する処理
    }
}
