<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Allow-Headers: Content-Type");

header("Content-Type: application/json");

$rest_json = file_get_contents("php://input");
$data = json_decode($rest_json, true);

// 仮のIDとパスワード
$validId = "0218";
$validPassword = "aizawa";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($data['id'] === $validId && $data['password'] === $validPassword) {
        $response = [
            "success" => true,
            "message" => "ログインに成功しました。"
        ];
    } else {
        $response = [
            "success" => false,
            "message" => "IDまたはパスワードが間違っています。"
        ];
    }

    echo json_encode($response);
} else {
    echo json_encode(["error" => true, "message" => "POSTリクエストのみ受け付けます。"]);
}
?>
