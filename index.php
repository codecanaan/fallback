<?php

if (isset($_SERVER['HTTP_COOKIE'])) {
    $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
    foreach($cookies as $cookie) {
        $parts = explode('=', $cookie);
        $name = trim($parts[0]);
        setcookie($name, '', time()-1000);
        setcookie($name, '', time()-1000, '/');
    }
}

//header('Location: '.$_SERVER['HTTP_REFERER']);

if (isset($_SERVER['HTTP_REFERER'])) {
	$redirect_url = $_SERVER['HTTP_REFERER'];
}
else {
	$redirect_url = 'http://codecanaan.com/';
}
?>
<html>
<head>
<meta http-equiv="refresh" content="0;url=<?php echo $redirect_url ?>">
<script type="text/javascript">
location.href='<?php echo $redirect_url; ?>';
</script>
</head>
<body>
Redirect to <a href="<?php echo $redirect_url; ?>"><?php echo $redirect_url; ?></a>
</body>
</html>
