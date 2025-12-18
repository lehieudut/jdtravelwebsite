<?php
$thuMuc = "hinhanh/";
$duoiAnh = ["jpg", "jpeg", "png", "JPG", "JPEG", "PNG"];

$dsAnh = [];

foreach (scandir($thuMuc) as $file) {
    $ext = pathinfo($file, PATHINFO_EXTENSION);
    if (in_array($ext, $duoiAnh)) {
        $dsAnh[] = $file;
    }
}

header("Content-Type: application/json");
echo json_encode($dsAnh);
