<html>
<body>
<section class="main-section alabaster" id="curls">
	<div class="container fullsize">
    <h2>combined users</h2>
<?php

$curl_handle = curl_init();
$contents = curl_exec($curl_handle);
curl_setopt($curl_handle, CURLOPT_URL, "https://thedanishpastry.com/user_curl.php");
$contents = $contents.",".curl_exec($curl_handle);
curl_setopt($curl_handle, CURLOPT_URL, "https://ivyvo.net/expose_curl.php");
$contents = $contents.",".curl_exec($curl_handle);

#echo "<br/>";
curl_close($curl_handle);

foreach (explode(",",$contents) as $content) {
    echo $content."<br/>";
}

?>
        
    </div>
</section>
</body>
</html>