<?php
$file="myFile.txt";
if (!is_file ($file)){
	echo "Файл $file не существует";
} else{
	$numb = filesize($file);
	echo "Файл $file существует<br>
		Поддерживает чтение и запись данных<br>  
		Размер файла: $numb байт <br><br>
		Содержимое файла:<br>";
	$newStr="
Это новая строка -_-";
	$openfile = @fopen($file, "r+");
	while (($line = fgets($openfile)) !== false) {
        echo "$line<br>";
    }
    fputs($openfile,$newStr);
    fclose($openfile);


    $file_array=file("myFile.txt");
    echo "<br><br>Содержимое файла после добавления информации и удаления 5 строчки:<br><br>";

	$file_array=file("myFile.txt");
	$openfile=fopen("myFile.txt","w");
	unset($file_array[4]);
	fputs($openfile,implode("",$file_array));
	fclose($openfile);

	$openfile = @fopen($file, "r+");
	while (($line = fgets($openfile)) !== false) {
        echo "$line<br>";
    }
    fclose($openfile);
}
?>