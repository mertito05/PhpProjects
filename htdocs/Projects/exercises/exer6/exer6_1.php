<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function writeFile(){
        $myfile=fopen("data.txt","w") or die ("Unable to open");
        $txt1="Дисциплина Web приложения се изучава през втория семестър
на втори курс. Тази дисциплина се изучава от студенти, които са специалност СИТ.\n";
        fwrite($myfile,$txt1);
         
        $txt2="Студентите редовно си
        пишат домашните\n";
        fwrite($myfile,$txt2);
        fclose($myfile);
        $fp = fopen("data.txt", "r");
        echo fread($fp,filesize("data.txt"));
        fclose($fp);
    }
        writeFile();
            
    ?>

</body>
</html>