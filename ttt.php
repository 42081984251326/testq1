<?php
header("content-type:text/html;charset=utf-8"); 

function getMillisecond() {
list($s1, $s2) = explode(' ', microtime());
return (float)sprintf('%.0f', (floatval($s1) + floatval($s2)) * 1000);
}
$ta = getMillisecond();
echo $ta;
echo "<br />";
$ch=  curl_init("https://www.tpzzjl.com/test/tlbc.php/");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
curl_setopt($ch, CURLOPT_NOBODY, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_exec($ch);
$aaa = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
echo $aaa;
//var_dump($aaa); 	
//https://kjhgfds.tmsnd.cn/selfphone_app/load_buyer_qrcode.action?token=50217002_A1587612068796&placeCode=50217002&placeName=%E9%93%9C%E6%A2%81%E5%B7%B4%E5%B7%9D%E6%B0%91%E8%90%A5%E5%BA%97&nClientID=1&nClientIP=10.50.11.55&version=51&codeType=1

$time2 = substr($aaa , 79, 14);
echo "<br />";
$url = 'https://kjhgfds.tmsnd.cn/selfphone_app/load_buyer_qrcode.action?token=50087013_'.$time2.'&placeCode=50087013&placeName=店&nClientID=1&nClientIP=1&version=51&codeType=1';
echo $time2;
echo "<br />";
echo $url;
//Header("Location: $url"); 

?>
	<script type="text/javascript">
	t1 = Math.round(new Date());
    t2 = Math.round(new Date()/1000);
	console.log(t1);
    console.log(t2);
		</script>
	