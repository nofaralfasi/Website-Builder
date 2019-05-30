<?php
$filename = "../folderD/a.html";

if (isset($_FILES["file"]["tmp_name"])) {
    @move_uploaded_file($_FILES["file"]["tmp_name"], "../folderD/upload/" . $_FILES["file"]["name"]);
}
if (isset($_FILES["filebb"]["tmp_name"])) {
    @move_uploaded_file($_FILES["filebb"]["tmp_name"], "../folderD/upload/" . $_FILES["file"]["name"]);
}
if (isset($_FILES["filedd"]["tmp_name"])) {
    @move_uploaded_file($_FILES["filedd"]["tmp_name"], "../folderD/upload/" . $_FILES["file"]["name"]);
}
if (isset($_FILES["fileff"]["tmp_name"])) {
    @move_uploaded_file($_FILES["fileff"]["tmp_name"], "../folderD/upload/" . $_FILES["file"]["name"]);
}
if (isset($_FILES["filehh"]["tmp_name"])) {
    @move_uploaded_file($_FILES["filehh"]["tmp_name"], "../folderD/upload/" . $_FILES["file"]["name"]);
}
if (isset($_FILES["filekk"]["tmp_name"])) {
    @move_uploaded_file($_FILES["filekk"]["tmp_name"], "../folderD/upload/" . $_FILES["file"]["name"]);
}

$fh = @fopen($filename, 'w') or die("can't open file");
@fwrite($fh, '<html lang="en"> <head><title>' . $_FILES["file"]["name"] . '</title><link href="style.css" rel="stylesheet"></head>');
@fwrite($fh, '<body><script>$("body").css("background-color", "' . $_POST["colorPick"] . '");</script>');
@fwrite($fh, '<center><header><img class="main" src="../folderD/upload/' . $_FILES["file"]["name"] . '" "></header></center> ');

fwrite($fh, '<center><table>');
if ((@$_POST["aaTextarea"] != '' || isset($_FILES["filebb"]["tmp_name"])) && @$_POST["delA"] != "no") {
    fwrite($fh, '<tr><td align="center">' . $_POST["aaTextarea"] . '</td>');
    @fwrite($fh, '<td align="center"><img class="minit" src="../folderD/upload/' . $_FILES["filebb"]["name"] . '"></td></tr>');
}
if ((@$_POST["ccTextarea"] != '' || isset($_FILES["filedd"]["tmp_name"])) && @$_POST["delB"] != "no") {
    fwrite($fh, '<tr><td align="center">' . $_POST["aaTextarea"] . '</td>');
    @fwrite($fh, '<td align="center"><img class="minit" src="../folderD/upload/' . $_FILES["filedd"]["name"] . '"></td></tr>');
}
if ((@$_POST["eeTextarea"] != '' || isset($_FILES["fileff"]["tmp_name"])) && @$_POST["delC"] != "no") {
    fwrite($fh, '<tr><td align="center"> <p style="-webkit-text-size-adjust: auto">' . $_POST["aaTextarea"] . '</p></td>');
    @fwrite($fh, '<td align="center">  <img src = "../folderD/upload/' . $_FILES["fileff"]["name"] . '" > </td></tr>');
}
if ((@$_POST["ggTextarea"] != '' || isset($_FILES["filehh"]["tmp_name"])) && @$_POST["delD"] != "no") {
    fwrite($fh, '<tr><td align="center"> ' . $_POST["aaTextarea"] . '</td>');
    @fwrite($fh, '<td align="center">  <img src = "../folderD/upload/' . $_FILES["filehh"]["name"] . '" > </td></tr>');
}
if ((@$_POST["jjTextarea"] != '' || isset($_FILES["filekk"]["tmp_name"])) && @$_POST["delE"] != "no") {
    fwrite($fh, '<tr><td align="center"> ' . $_POST["aaTextarea"] . '</td>');
    @fwrite($fh, '<td align="center">  <img src = "../folderD/upload/' . $_FILES["filekk"]["name"] . '" > </td></tr>');
}
fwrite($fh, '</table>');
fwrite($fh, '<h2><a href="1.html">   Home  </a></h2>');

fwrite($fh, '</center></body></html>');
fclose($fh);
?>