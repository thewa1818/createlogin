<?php
header("Access-Control-Allow-Origin: *"); // すべてのオリジンからのリクエストを許可する場合

// データベースに接続するなど、データを取得する処理を実装する
// ここでは仮のデータを返す

$data = [
  [
      "name" => "KAMEHAUSE",
      "img" => "https://depor.com/resizer/QUc98RgG0Nl0eWGhDEv7ysr8mzI=/1200x900/smart/filters:format(jpeg):quality(75)/cloudfront-us-east-1.images.arcpublishing.com/elcomercio/O72T6DN5KFCXBKX46JQD4GBL2M.jpg",
      "location" => "南の島",
      "share" => "4",
      "age" => "50",
      "owner" => "亀仙人"
  ],  [
    "name" => "磯野家",
    "img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9EoIRR12xt8gK9kPBSYWoA7IYEKekrVP3R3Ttt4exYw&s",
    "location" => "世田谷区新町",
    "share" => "8",
    "age" => "82",
    "owner" => "磯野カツオ"
],
[
  "name" => "フルハウス",
  "img" => "https://www.tvgroove.com/files/1464686688_1.jpg",
  "location" => "ロサンゼルス",
  "share" => "6",
  "age" => "22",
  "owner" => "ジェシーおいたん"
],
[
  "name" => "パイナップルの家",
  "img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZx4PJU4DcLqKYLKuMQb3F7vzCxQZvL-i6U1-2vw3FmQ&s",
  "location" => "海底",
  "share" => "2",
  "age" => "3",
  "owner" => "スポンジボブ"
],
[
  "name" => "野比家",
  "img" => "https://livedoor.blogimg.jp/loloalon/imgs/8/7/873fdbf5.jpg",
  "location" => "練馬区月見台",
  "share" => "4",
  "age" => "18",
  "owner" => "野比のび太"
], [
  "name" => "KAMEHAUSE",
  "img" => "https://depor.com/resizer/QUc98RgG0Nl0eWGhDEv7ysr8mzI=/1200x900/smart/filters:format(jpeg):quality(75)/cloudfront-us-east-1.images.arcpublishing.com/elcomercio/O72T6DN5KFCXBKX46JQD4GBL2M.jpg",
  "location" => "南の島",
  "share" => "4",
  "age" => "50",
  "owner" => "亀仙人"
],  [
"name" => "磯野家",
"img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9EoIRR12xt8gK9kPBSYWoA7IYEKekrVP3R3Ttt4exYw&s",
"location" => "世田谷区新町",
"share" => "8",
"age" => "82",
"owner" => "磯野カツオ"
],
[
"name" => "フルハウス",
"img" => "https://www.tvgroove.com/files/1464686688_1.jpg",
"location" => "ロサンゼルス",
"share" => "6",
"age" => "22",
"owner" => "ジェシーおいたん"
],
[
"name" => "パイナップルの家",
"img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZx4PJU4DcLqKYLKuMQb3F7vzCxQZvL-i6U1-2vw3FmQ&s",
"location" => "海底",
"share" => "2",
"age" => "3",
"owner" => "スポンジボブ"
],
[
"name" => "野比家",
"img" => "https://livedoor.blogimg.jp/loloalon/imgs/8/7/873fdbf5.jpg",
"location" => "練馬区月見台",
"share" => "4",
"age" => "18",
"owner" => "野比のび太"
], [
  "name" => "KAMEHAUSE",
  "img" => "https://depor.com/resizer/QUc98RgG0Nl0eWGhDEv7ysr8mzI=/1200x900/smart/filters:format(jpeg):quality(75)/cloudfront-us-east-1.images.arcpublishing.com/elcomercio/O72T6DN5KFCXBKX46JQD4GBL2M.jpg",
  "location" => "南の島",
  "share" => "4",
  "age" => "50",
  "owner" => "亀仙人"
],  [
"name" => "磯野家",
"img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR9EoIRR12xt8gK9kPBSYWoA7IYEKekrVP3R3Ttt4exYw&s",
"location" => "世田谷区新町",
"share" => "8",
"age" => "82",
"owner" => "磯野カツオ"
],
[
"name" => "フルハウス",
"img" => "https://www.tvgroove.com/files/1464686688_1.jpg",
"location" => "ロサンゼルス",
"share" => "6",
"age" => "22",
"owner" => "ジェシーおいたん"
],
[
"name" => "パイナップルの家",
"img" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZx4PJU4DcLqKYLKuMQb3F7vzCxQZvL-i6U1-2vw3FmQ&s",
"location" => "海底",
"share" => "2",
"age" => "3",
"owner" => "スポンジボブ"
],
[
"name" => "野比家",
"img" => "https://livedoor.blogimg.jp/loloalon/imgs/8/7/873fdbf5.jpg",
"location" => "練馬区月見台",
"share" => "4",
"age" => "18",
"owner" => "野比のび太"
],
];

// データをJSON形式で出力
header("Content-Type: application/json");
echo json_encode($data);
?>
