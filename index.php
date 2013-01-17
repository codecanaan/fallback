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
?>
<html>
<head>
<meta http-equiv="refresh" content="0;url=<?php echo $_SERVER['HTTP_REFERER'] ?>">
<script type="text/javascript">
location.href='<?php echo $_SERVER['HTTP_REFERER'] ?>';
</script>
</head>
<body>
Redirect to <a href="<?php echo $_SERVER['HTTP_REFERER'] ?>"><?php echo $_SERVER['HTTP_REFERER'] ?></a>
</body>
</html>
