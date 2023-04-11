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
</body>
</html>