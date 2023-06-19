<?php
//read file
echo "<h3>Read file</h3>";
echo readfile("demo.txt"),"<br>";

//fopen, fread, fclose
echo "<br><h3>fopen, fread, fclose</h3>";
echo fopen("demo.txt","r") or die("unable to load file"),"<br>";
$myfile=fopen("demo.txt","r") or die("unable to load file");
echo fread($myfile,filesize("demo.txt")),"<br>";
fclose($myfile);

//fgets() - Read first line of file
echo "<br><h3>fgets()</h3>";
$myfile1=fopen("demo.txt","r") or die("Unable to open file");
echo fgets($myfile1),"<br>";
fclose($myfile1);

//feof()
echo "<br><h3>feof()</h3>";
$myfile2=fopen("demo.txt","r") or die("Unable to open file");
while(!feof($myfile2)){
    echo fgets($myfile2);
}

//fgetc()
echo "<br><h3>fgetc()</h3>";
$myfile3=fopen("demo.txt","r") or die("Unable to open file");
    echo fgetc($myfile3);
    fopen("dem.txt","r");

//fwrite()
echo "<br><h3>fwrite()</h3>";
$myfile4=fopen("file.txt","a") or die("Unable to open file");
$str="saroj thory\n";
fwrite($myfile4,$str);
$str1="saroj\n";
fwrite($myfile4,$str1);
fclose($myfile4);
?>