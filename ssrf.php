<?php
function foo() {
    $ch = curl_init($_GET['data']);
}

function bar(){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $_POST['url']);
}

function baz(){
    $path = $_GET['path'];
    $file = fopen($path, 'rb');
}

function quux(){
    $path = $_POST['path'];
    $file = file_get_contents($path);
}
