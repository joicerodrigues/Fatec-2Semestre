<?php

$filename = "bd.txt";
if(!file_exists("bd.txt")){
    $handle = fopen("bd.txt", "w");
} else {
    $handle = fopen("bd.txt", "a");
}

fwrite($handle, $_POST['nome']);
fwrite($handle, $_POST['cpf']);
fflush($handle);
fclose($handle);

$handle = fopen( "bd.txt", "r");
while (!feof($handle)) {
        $line = fgets($handle);
        echo $line ."<br>";
    }
fclose($handle);
header("location: home.php");
    exit;
?>