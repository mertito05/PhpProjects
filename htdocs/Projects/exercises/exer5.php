<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>ZADACA 1</h3>
    Лице на правоъгълник
    <br><br>
    
    <form action="exer5.php" method="post">
        Дължина: <input type="text" name="lenght">
        Ширина: <input type="text" name="wight">
        <br>
        <button type="submit">Go</button>
    </form>
    <?php
        $n1=$_POST["lenght"];
        $n2=$_POST["wight"];
        function recArea($lenght,$wight){
            $area=$lenght*$wight;
            echo "Правоъгълник с дължина ".$lenght." и ширина ".$wight." има лице ".$area;
            return $area;
        }
        recArea($n1,$n2);

    ?>
    <br><br>
    <h3>ZADACA 2</h3>
    <br><br>
    <form action="exer5.php" method="post">
    Triangle input?: <br>
    a: <input type="text" name="firstSide1"><br>
    b: <input type="text" name="secondSide1"><br>
    c: <input type="text" name="thirdSide1"><br>
    <button type="submit">Провери</button>
    </form>
    <?php
        function triangleChecker(){                    
        $firstSide=$_POST["firstSide1"];
        $secondSide=$_POST["secondSide1"];
        $thirdSide=$_POST["thirdSide1"];
        $p=(($firstSide+$secondSide+$thirdSide)/2);
        $areaTriangle=sqrt($p*($p-$firstSide)*($p-$secondSide)*($p-$thirdSide));
        $typeOfTriangle;
        $isTriangle=false;
        if(($firstSide+$secondSide)>$thirdSide || ($secondSide+$thirdSide)>$firstSide || ($firstSide+$thirdSide)>$secondSide)
            $isTriangle=true;
        if($isTriangle){
            echo "Триъгълник съществува"."<br>";
            if($firstSide==$secondSide && $secondSide==$thirdSide && $firstSide==$thirdSide)
                echo "Триъгълникът е равностранен";
            if($firstSide==$secondSide && $firstSide!=$thirdSide && $secondSide!=$thirdSide)
                echo "Триъгълникът е равнобедрен";
            else{ 
                echo "Триъгълникът е разнобедрен";
            }
            echo "<br>"."Лицето е ".$areaTriangle;
        }
        }
        triangleChecker();        
        
    ?>
    <br><br>
    <h3>ZADACA 3</h3>
    <?php
        $String1="Студентът Иван Иванов има отлична оценка по
дисциплина Web приложения.";
        $String2="Иван Петров има отлична оценка по Web
приложения.";

        echo "дължината на низа 1".strlen($String1);
        echo "<br>"."<br>";
        echo "дължината на низа 1".strlen($String2);
        echo "<br>"."<br>";
        if(strcmp($String1,"Иванов")==1){
            echo "Иванов";
        }
        echo "<br>";

        $arr1=explode(" ",$String1,10);
        $arr2=explode(" ",$String2,10);
        foreach($arr1 as $vall0){
            echo $vall0."<br>";
        }
        foreach($arr2 as $vall1){
            echo $vall1."<br>";
        } 
        echo "<br>";
        echo str_replace("дисциплина","предмет",$String1);
        echo "<br>";
        echo strcmp($String1,$String2);

    ?>
    <br>
</body>
</html>