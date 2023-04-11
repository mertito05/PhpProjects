<html>
    <head>
        <title>Docs</title>
    </head>
    <body>
        
        <?php
        //zad 1
        echo"<h1>Zadaca 1</h1>";
        $x=8;
        print "x+2=".$x=$x+2;
        echo "<br>";
        print "x-4=".$x=$x-4;
        echo "<br>";
        print "x*5=".$x=$x*5;
        echo "<br>";
        print "x/3=".$x=$x/3;
        echo "<br>";
        print ++$x;
        echo "<br>";
        print --$x;
        //zad 2
        echo "<h1>Zadaca 2</h1>";
        $first_int=(int)readline('Give me int: ');
        
        $second_int=(int)readline('Give me int: ');
        
        if($first_int>$second_int)
            print "first Integer is bigger";
        if($second_int>$first_int)
            print "second Integer is bigger";
            
        echo "<h1>Zadaca 3</h1>";
        $name='Harry';
        $age=28;

        print var_dump($name);
        echo "<br>";
        print $name." ";
        print var_dump($age);
        //no idea what it relates to
        echo "<br>";
        echo "NULL";
        //
        echo "<br>";
        echo "<h1>Zadaca 4</h1>","<br>";
        
        echo "Please enter your name: ","<br>";
        ?>
        <form action="exer1.php" method="post">
        Name: <input type="text" name="namee">
        <button name="subjectt" type="submit" value="Go">Go</button>
        </form>
        <br>
        
        Your name is: <?php echo $_POST["namee"];?>
        <h1>Zadaca 5</h1>
        <br>
        <form action="exer1.php" method="post">
        Вашети име: <input type="text" name="name1"><br><br>   
        Възраст: <input type="text" name="age1"><br><br>
        <button name="smth" type="submit" value="Goo">Изпрати!</button>
        </form>
        Здравейте, <?php echo $_POST["name1"]; ?> !<br>
        Вие сте на <?php echo $_POST["age1"]; ?> години.<br>
    </body>
</html>