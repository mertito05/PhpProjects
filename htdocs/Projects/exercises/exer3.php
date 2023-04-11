<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>ZADACA 1</h3>
    
    <?php 
    echo "<ul>";

    for ($x = 1; $x <= 10; $x++) {
    echo "<li>"."x=".$x;

    echo ""."<li>"."x^= ".$x ** 3;
          
    }
    echo "</ul>";
    
    
    
    
    ?>
    <h3>ZADACA 2</h3>
    <?php

        $n=1;
        $l=1;
        while($n<=9){
            echo "abc ";
            $n++;
        }
        echo "<br>";
        do{
            
            echo "xyz ";
            $l++;
        }while($l<=9);
        echo "<br>";
        for($k=1;$k<=9;$k++){
            echo $k;
            echo "   ";
        }

        echo "<br>";
        
        $ko=65;
        echo "<ol>";
        for($lo=1;$lo<=6;$lo++){
            echo "<li>"." "."Item ";
                do{
                    
                    echo chr($ko);
                    $ko++;
                    continue;

                }while($ko<=65);
        }
        echo "</ol>";

            
    ?>
    <style>
    table, th, td {
    border:1px solid black;
    }
    </style>
    <h3>ZADACA 3</h3>
    <table>
        <?php
            for($counterr=1;$counterr<=7;$counterr++){
                echo "<tr>";
                for($counter2=1;$counter2<=7;$counter2++){
                    echo "<td>".$counterr*$counter2."</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
    <h3>ZADACA 4</h3>
    <form action="exer3.php" method="post">
    Въведете число:<input type="text" name="intInput1">
    <br>
    <button type="submit">Провери</button>
    </form>
    <?php
        $intChecker=0;
        $intChecker=$_POST["intInput1"];
        if($intChecker<=9){
            $stringo=" е просто";}
        else{
            $stringo=" не е просто";
        }
        echo "Числото ".$intChecker.$stringo;
    ?>
    <h3>ZADACA 5</h3>
    <form action="exer3.php" method="post">
    Въведете число:<input type="text" name="intInput2">
    <br>
    <button type="submit">Провери</button>
    </form>
    <?php 
            $num=$_POST["intInput2"];
            $digits=str_split($input);
            $count = 0;
            foreach($digits as $digits){
                if ($digits % 2 != 0) {
                    $count++;
                    }}
                
            echo "Числото ".$num." съдържа ".$count." четни числа";
    ?>

    <h3>ZADACA 6</h3>
    <form action="exer3.php" method="post">
    Въведете число:<input type="text" name="intInput3">
    <br>
    <button type="submit">Провери</button>
    </form>
    <?php
        $intO=0;
        $intO=$_POST["intInput3"];
        for($intO;$intO<=100;$intO++){
            $temp=$int0;
            $int0=$temp+$temp;
        }
        echo $int0;
    ?>  
</body>
</html>