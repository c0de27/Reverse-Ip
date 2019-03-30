<?php
echo "      \e[1;32m--[ReverseIP]--\n\e[0m\n";
$domain = urlencode($argv[1]);
if(isset($argv[1])) {
$ip = "https://api.hackertarget.com/reversedns/?q=$domain";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $ip);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
$exe = curl_exec($ch);
echo $exe;
curl_close($ch);
exit();
}
?>