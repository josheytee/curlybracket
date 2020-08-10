<?php
error_reporting(0);

if(isset($_POST['submit']) && !empty($_FILES["image"]["name"])) {
    require __DIR__ . '/vendor/autoload.php';
    $target_dir = "uploads/";
    $uploadOk = 1;
    $FileType = strtolower(pathinfo($_FILES["image"]["name"],PATHINFO_EXTENSION));
    $target_file = $target_dir . generateRandomString() .'.'.$FileType;
    // Check file size
    if ($_FILES["image"]["size"] > 5000000) {
        header('HTTP/1.0 403 Forbidden');
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // var_dump($FileType); 
    if($FileType != "pdf" && $FileType != "png" && $FileType != "jpg") {
        header('HTTP/1.0 403 Forbidden');
        echo "Sorry, please upload a pdf file";
        $uploadOk = 0;
    }
    if ($uploadOk == 1) {

        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            uploadToApi($target_file);
        } else {
            header('HTTP/1.0 403 Forbidden');
            echo "Sorry, there was an error uploading your file.";
        }
    } 
} else if (isset($_POST['submit']) && isset($_POST['url'])) {
    uploadToUrl($_POST['url']);
} else {
    header('HTTP/1.0 403 Forbidden');
    echo "Sorry, please upload a pdf file";
}

function uploadToUrl($url)
{    
    require __DIR__ . '/vendor/autoload.php';
    $client = new \GuzzleHttp\Client();
    try {
    $r = $client->request('GET', "https://api.ocr.space/parse/imageurl?apikey=f2cfec72f988957&url={$url}&language=chs&isOverlayRequired=true");
    $response =  json_decode($r->getBody(),true);
    
    if($response['ErrorMessage'] == "") {
        header('Content-Type: application/json');
        echo $r->getBody();
    } else {
        header('HTTP/1.0 400 Forbidden');
        echo $response['ErrorMessage'][0];
    }
    } catch(Exception $err) {
        header('HTTP/1.0 403 Forbidden');
        echo $err->getMessage(); 
    }
}

function uploadToApi($target_file){
    require __DIR__ . '/vendor/autoload.php';
    $fileData = fopen($target_file, 'r');
    $client = new \GuzzleHttp\Client();
    try {
    $r = $client->request('POST', 'https://api.ocr.space/parse/image',[
        'headers' => ['apiKey' => 'f2cfec72f988957'],
        'multipart' => [
            [
                'name' => 'file',
                'contents' => $fileData
            ]
        ]
    ], ['file' => $fileData]);
    $response =  json_decode($r->getBody(),true);
    
    if($response['ErrorMessage'] == "") {
        header('Content-Type: application/json');
        echo $r->getBody();
    } else {
        header('HTTP/1.0 400 Forbidden');
        echo $response['ErrorMessage'];
    }
    } catch(Exception $err) {
        header('HTTP/1.0 403 Forbidden');
        echo $err->getMessage();
    }
}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}