<?php
include 'config.php';
if(isset($_GET['code'])){
    $code = $_GET['code'];
    $fields = array(
        'client_id'     =>  CLIENT_ID,
        'client_secret' =>  CLIENT_SECRET,
        'grant_type'    => 'authorization_code',
        'redirect_uri'  =>  REDIRECT_URL,
        'code'          =>  $code
    );
    $url = 'https://api.instagram.com/oauth/access_token';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);
    curl_setopt($ch,CURLOPT_POST,true); 
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    $result = curl_exec($ch);
    curl_close($ch); 
    $result = json_decode($result);
    return $result->access_token; 
//  $url = "https://api.instagram.com/oauth/accessToken?code=$code&grant_type=ig_exchange_token&client_id=".CLIENT_ID."&client_secret=".CLIENT_SECRET."&redirect_uri=".REDIRECT_URL;
} else {
    $url = "https://api.instagram.com/oauth/authorize?client_id=".CLIENT_ID."&redirect_uri=".REDIRECT_URL."&scope=user_profile,user_media&response_type=code";
}
// $url = "https://api.instagram.com/oauth/authorize?client_id=".CLIENT_ID."&redirect_uri=".REDIRECT_URL."&scope=".SCOPES."";
// $yrl = "https://graph.instagram.com/access_token?grant_type=ig_exchange_token&client_secret=0735cb110e3efd7c8a6023fa1bb4eef9"

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="<?php echo $url; ?>">Login</a>
</body>
</html>