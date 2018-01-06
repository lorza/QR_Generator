<?php

header("Content-Type: image/png");
require_once "vendor/autoload.php";

if (isset($_GET['text'])) {

    $size = isset($_GET['size']) ? $_GET['size'] : 200;
    $padding = isset($_GET['padding']) ? $_GET['padding'] : 10;

    $qr = new Endroid\QrCode\QrCode();
    $qr->setText($_GET["text"]);
    $qr->setBackgroundColor([
        "r" => 255,
        "g" => 255,
        "b" => 255
    ]);
    $qr->setSize(200);
    // $qr->setPadding(200);
    $qr->render();
}