<?php
$filename = "../folderD/d.html";

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
@fwrite($fh, '<html lang="en">  <body bgcolor=' . $_POST["colorPick"] . '><div style="text-align: center;">');
@fwrite($fh, '<div style="text-align: center;"> <header ><img src="../folderD/upload/' . $_FILES["file"]["name"] . '" width="70%" height="250px"></header>  </div> ');
fwrite($fh, '<div style="text-align: center;"> <table  width="70%" border =2 cellpadding="2" >');

if ((@$_POST["aaTextarea"] != '' || isset($_FILES["filebb"]["tmp_name"])) && @$_POST["delA"] != "no") {
    fwrite($fh, '<tr><td align="center" <span style="font-size: x-large; ">' . $_POST["aaTextarea"] . '</span></td>');
    @fwrite($fh, '<td align="center">  <img src = "../folderD/upload/' . $_FILES["filebb"]["name"] . '" > </td></tr>');
}
if ((@$_POST["ccTextarea"] != '' || isset($_FILES["filedd"]["tmp_name"])) && @$_POST["delB"] != "no") {
    fwrite($fh, '<tr><td align="center" <span style="font-size: x-large; ">' . $_POST["aaTextarea"] . '</span></td>');
    @fwrite($fh, '<td align="center">  <img src = "../folderD/upload/' . $_FILES["filedd"]["name"] . '" > </td></tr>');
}
if ((@$_POST["eeTextarea"] != '' || isset($_FILES["fileff"]["tmp_name"])) && @$_POST["delC"] != "no") {
    fwrite($fh, '<tr><td align="center" <span style="font-size: x-large; ">' . $_POST["aaTextarea"] . '</span></td>');
    @fwrite($fh, '<td align="center">  <img src = "../folderD/upload/' . $_FILES["fileff"]["name"] . '" > </td></tr>');
}
if ((@$_POST["ggTextarea"] != '' || isset($_FILES["filehh"]["tmp_name"])) && @$_POST["delD"] != "no") {
    fwrite($fh, '<tr><td align="center" <span style="font-size: x-large; ">' . $_POST["aaTextarea"] . '</span></td>');
    @fwrite($fh, '<td align="center">  <img src = "../folderD/upload/' . $_FILES["filehh"]["name"] . '" > </td></tr>');
}
if ((@$_POST["jjTextarea"] != '' || isset($_FILES["filekk"]["tmp_name"])) && @$_POST["delE"] != "no") {
    fwrite($fh, '<tr><td align="center" <span style="font-size: x-large; ">' . $_POST["aaTextarea"] . '</span></td>');
    @fwrite($fh, '<td align="center">  <img src = "../folderD/upload/' . $_FILES["filekk"]["name"] . '" > </td></tr>');
}
fwrite($fh, '</table>');
fwrite($fh, '<a href="1.html">   Back To Home  </a>');


fwrite($fh, '</body></html>');
fclose($fh);
?>