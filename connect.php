<?php
// URL API LINE
$API_URL = 'https://api.line.me/v2/bot/message';
// ใส่ Channel access token (long-lived)
$ACCESS_TOKEN = '0zv2kguUzxFpHl2hOa4GREeT2dhpx+Cr3yb/oHwA374LsKwDCldj/8DHjllLOlvWT7+m6gp46AyPTrHTLsf/R0khwzaoxqWnapg/5MI8iMxAio9Wefmx8lCEelzbDV2y57rnGdzHd4o6M204/4ioyAdB04t89/1O/w1cDnyilFU=';
// ใส่ Channel Secret
$CHANNEL_SECRET = '9cd5664617bde3ec331ca352b93660e1';
function send_reply_message($url, $post_header, $post_body)
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $post_header);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_body);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $result = curl_exec($ch);
    curl_close($ch);

    return $result;
}
 
?>