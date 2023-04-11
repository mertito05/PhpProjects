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
        $wFile=fopen("array.txt","w");
        $myarray=array(10, 35, 30, 44, 55, 14, 73);
        fwrite($wFile,$myarray);
        fclose($wFile);
        function readFunc($smth){

            $smth=fread("array.txt","r");
            
        }
        readFunc($wFile);
    ?>
</body>
</html>