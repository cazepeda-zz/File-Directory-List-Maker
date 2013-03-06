<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>File Directory List Maker</title>

<meta name="viewport" content="width=device-width">

</head>

<body>

<h1>File Directory List Maker</h1>

<ul>
<?php
if ($thisFolder = opendir('./folder')) {
    while (false !== ($thingsInFolder = readdir($thisFolder))) {
        if ($thisFolder != "." && $thisFolder != ".." && substr($thisFolder,-strlen(".ico")) != ".ico") {
			echo '<li><a href="/folder/'.$thisFolder.'">'.$thisFolder.'</a></li>';
			echo "\n";
        }
    }
    closedir($thisFolder);
}
?>
</ul>
</body>
</html>