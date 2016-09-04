<?php

require_once "controllers/Pages.php";

$pages = new Pages();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Unit Tests</title>
</head>
<body>

<h1><?php echo $pages->render(); ?></h1>

<pre><?php var_dump($pages->returnArray()); ?></pre>

</body>
</html>
