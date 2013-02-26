<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Auto File Directory Maker</title>

<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="http://cienfuegos.co/assets/styles.css">
</head>

<body>

<h1>Auto File Directory Maker</h1>

<ul>
<?php
if ($handle = opendir('.')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
			echo '<li><a href="/gfx/'.$entry.'">'.$entry.'</a></li>';
			echo "\n";
        }
    }
    closedir($handle);
}
?>
</ul>
</body>
</html>