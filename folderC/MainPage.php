<?php

$filename = "../folderD/1.html";
if (!(isset($_FILES["file"]["tmp_name"]))) {
    echo "You didn't select a photo <br>";
}
//move the file from temp dir  to upload
move_uploaded_file($_FILES["file"]["tmp_name"], "../folderD/upload/" . $_FILES["file"]["name"]);
$temp = "My site";
$text = "5 Most Beautiful Places I've Been";
$fh = @fopen($filename, 'w') or die("can't open file");
fwrite($fh, '<html>  <body bgcolor=' . $_POST["colorPick"] . '>');
fwrite($fh, '<header ><img src="../folderD/upload/' . $_FILES["file"]["name"] . '" width="100%" height="250px"></header>');
fwrite($fh, '<table  width="70%" border =2 cellpadding="2"> <tr>');
if ($_POST["aLink"] != "" && $_POST["aLink"] != 2) {
    fwrite($fh, '<td align="center"><h5><a href="a.html">' . $_POST["aLink"] . ' </a> </h5></td>');
}
if ($_POST["bLink"] != "" && $_POST["bLink"] != 2) {
    fwrite($fh, '<td align="center"><h5><a href="b.html">' . $_POST["bLink"] . ' </a> </h5></td>');
}
if ($_POST["cLink"] != "" && $_POST["cLink"] != 2) {

    fwrite($fh, '<td align="center"><h5><a href="c.html">' . $_POST["cLink"] . ' </a> </h5></td>');
}
if ($_POST["dLink"] != "" && $_POST["dLink"] != 2) {
    fwrite($fh, '<td align="center"><h5><a href="d.html">' . $_POST["dLink"] . ' </a> </h5></td>');
}
if ($_POST["eLink"] != "" && $_POST["eLink"] != 2) {
    fwrite($fh, '<td align="center"><h5><a href="e.html">' . $_POST["eLink"] . ' </a> </h5></td>');
}
fwrite($fh, '</tr></table>');
fwrite($fh, '</body></html>');
fclose($fh);
//$myfile= @fopen("Gallery.html", "r") ordie("Unable to open file!");
//echofread($myfile,filesize("Gallery.html"));
//fclose($myfile);

?>