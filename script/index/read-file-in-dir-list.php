<!DOCTYPE html><html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<?php
$blacklist = array("index2.php", "two.txt", "four.html");
$files = array_diff(glob("**"), $blacklist);
$fichier ="";
//$droit = array();
foreach($files as $file){
$me=posix_getpwuid(posix_getuid($file));
$me=$me['name'];
$droit =  substr(decoct(fileperms($file)), -4); // 0644
//var_dump( $me);
$fichier .= "<div class='post'><a href='" . $_SERVER['PHP_SELF'] . "?file=" . $file . "'><p>" . $file . " === " . $me . " === " . $droit . "</p></a></div>";		
}
$userinfo = posix_getpwuid(posix_geteuid("lindex.php"));
echo "This script runs with " . $userinfo["name"] . "'s privileges.";

echo $fichier;
    if(!empty($_GET["file"]) && !in_array($_GET["file"], $blacklist) && file_exists($_GET["file"]))
        $thesource = htmlentities(file_get_contents($_GET["file"]));

$filename = 'index.php';
echo"<hr>";
echo substr(decoct(fileperms("read.php")), -4); // 0644
echo "<hr>";


?>

<textarea rows="40" cols="100" placeholder="Source code of file" class="source"><?php if(!empty($thesource))echo $thesource; ?></textarea>

</body></html>
