<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <h3>ZADACA 1</h3>
        <form action="exer2.php" method="get">
        Please enter your age: <br> <input type="text" name="age1"><br><br>
        Please enter the price: <br> <input type="text" name="price1"><br><br>
        <button name="subjectt" type="submit" value="Go">Go</button>
        </form>
    <?php
        $age=0;
        $price=0;
        echo    "Your age is:";
        $age=$_GET["age1"];
        echo    $age."<br>";     
        $price=$_GET["price1"];
        if($age<=6 || $age>=65)
            $price=$price*0.5;
        echo "The price is: ";
        echo    $price."<br>";

    ?>

    <h3>ZADACA 2</h3>
    <form action="exer2.php" method="get">
    Find solution for ax^2+bx+c
    <br>
    a: <input type="text" name="a">
    <br>
    b: <input type="text" name="b">
    <br>
    c: <input type="text" name="c">
    <br>
    <button type="submit">Find x!</button>
    </form>
    <?php
        $a=$_GET["a"];
        $b=$_GET["b"];
        $c=$_GET["c"];

        $D=($b*$b)-4*$a*$c;
        $x1=(-$b+(sqrt($D)))*2*$a;
        $x2=(-$b-(sqrt($D)))*2*$a;
        echo $x1."<br>";
        echo $x2."<br>";
    ?>
    <h3>ZADACA 3</h3>
    <form action="exer2.php" method="get">
    Number of months: <br>
    <input type="text" name="months">
    <br>
    <button type="submit">Go</button>
    <br>
    <?php
        $month_input=0;
        $string_month=" ";
        $month_input=$_GET["months"];
        switch($month_input){
            case 12||1||2:
                $string_month="winter";
                break;
            case 3||4||5:
                $string_month="spring";
                break;
            case 6||7||8:
                $string_month="summer";
                break;
            case 9||10||11:
                $string_month="autumn";
                break;


        }
        echo "The result is:".$string_month."<br>";
        
    ?>
    </form>
    <h3>ZADACA 4</h3>
    <?php 
    $m=date("F");
    if ($m=="August")
        echo "Август е, и е наистина горещо.";

    else
        echo "Не е август, така че поне не е горещо!";
    ?>
    <h3>ZADACA 5</h3>
    <br>
    <form action="exer2.php" method="get">
    Enter the number: <input type="text" name="numm">
    <br>
    Enter the digit: <input type="text" name="digitt">
    <br>
    <button type="submit">Go</button>
    </form>
    <?php 
        function countOccurences($n,$d){
            $count=0;
            while($n>0)
            {
                $count=($n%10==$d) ?
                        $count+1 : $count;
                        $n=$n/10;

                
            }

            echo $count;

        }
        $first_nummm=$_GET["numm"];
        $second_nummm=$_GET["digitt"];
        countOccurences($first_nummm,$second_nummm);

    ?>
    <style>
    table, th, td {
    border:1px solid black;
    }
    </style>
    <h3>ZADACA 6</h3>
    <table style="width:100%">
        <tr>
            <th>x</th>        
            <th>Square</th>
            <th>Square root</th>
        </tr>
    <?php
        for($counter1=1;$counter1<=12;$counter1++){
            echo "<tr>";
            echo "<td>".$counter1."</td>";
            echo "<td>".$counter1*$counter1."</td>";
            echo "<td>".sqrt($counter1)."</td>";
            echo "</tr>";
        }
    
    ?>
    </table>

    <h2>Registration Form</h2>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

    Name: <br> <input type="text" name="namee">
    <br> Family: <br> <input type="text" name="family">
    <br> E-mail: <br> <input type="text" name="mail">
    <br> <br>
    Choose a course: <br>
    <input type="radio" name="typ" value="php">PHP <br>
    <input type="radio" name="typ" value="lisp">Lisp <br>
    <input type="radio" name="typ" value="perl">Perl <br>
    <input type="radio" name="typ" value="unix">Unix <br>
    <br>
    Additional information for you? <br>
    <textarea name="comment"  cols="30" rows="10"></textarea>
    <br>
    <input type="checkbox">
    Confirm the receiving of the information
    <br>
    <input type="submit">
    <input type="reset">
    </form>

    <?php
        $namee="0";
        $family="0";
        $email="0";
        $typ="0";
        $comment="0";
        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $namee = test_input($_POST["namee"]);
            $email = test_input($_POST["mail"]);
            $comment = test_input($_POST["comment"]);
            $family = test_input($_POST["family"]);
            $typ = test_input($_POST["typ"]);
          }
          
          function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
          
    
    ?>

    

</body>
</html>