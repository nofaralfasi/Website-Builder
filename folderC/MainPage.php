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

@fwrite($fh, '<html lang="en"> <head><title>' . $_FILES["file"]["name"] . '</title><link href="style.css" rel="stylesheet"></head>');
@fwrite($fh, '<body><script>$("body").css("background-color", "' . $_POST["colorPick"] . '");</script>');
@fwrite($fh, '<center><header><img class="main_m" src="upload/' . $_FILES["file"]["name"] . '"></header></center> ');

fwrite($fh, '<table> <tr>');
if ($_POST["aLink"] != "" && $_POST["aLink"] != 2) {
    fwrite($fh, '<td align="center"><h2><a href="a.html">' . $_POST["aLink"] . ' </a> </h2></td>');
}
if ($_POST["bLink"] != "" && $_POST["bLink"] != 2) {
    fwrite($fh, '<td align="center"><h2><a href="b.html">' . $_POST["bLink"] . ' </a> </h2></td>');
}
if ($_POST["cLink"] != "" && $_POST["cLink"] != 2) {

    fwrite($fh, '<td align="center"><h2><a href="c.html">' . $_POST["cLink"] . ' </a> </h2></td>');
}
if ($_POST["dLink"] != "" && $_POST["dLink"] != 2) {
    fwrite($fh, '<td align="center"><h2><a href="d.html">' . $_POST["dLink"] . ' </a> </h2></td>');
}
if ($_POST["eLink"] != "" && $_POST["eLink"] != 2) {
    fwrite($fh, '<td align="center"><h2><a href="e.html">' . $_POST["eLink"] . ' </a> </h2></td>');
}
fwrite($fh, '</tr></table>');
fwrite($fh, '</center></body></html>');
fclose($fh);
?>