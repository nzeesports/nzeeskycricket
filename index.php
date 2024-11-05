<?php
$get = $_GET['get'];
$mpdUrl = 'https://linear007-gb-dash1-prd-ak.cdn.skycdp.com/016a/Content/DASH_003_720_120/Live/channel(skysportscricket)/' . $get;

$mpdheads = [
  'http' => [
      'header' => "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36\r\n",
      'follow_location' => 1,
      'timeout' => 5
  ]
];
$context = stream_context_create($mpdheads);
$res = file_get_contents($mpdUrl, false, $context);
echo $res;
?>
