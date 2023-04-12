






<?php
print_r($_POST);
$filename = "Livros.txt";

if(!file_exists("Livros.txt")){
    $handle = fopen("Livros.txt", "w");
} else {
    $handle = fopen("Livros.txt", "a");
}

fwrite($handle,$_POST['name']);
fwrite($handle,",");
fwrite($handle,$_POST['codigo']);
fwrite($handle,",");
fwrite($handle,$_POST['livro']);
fwrite($handle,",");
fwrite($handle,$_POST['data']);
fwrite($handle, ",");

fflush($handle);
fclose($handle);

header("location: welcome.php");





?>

