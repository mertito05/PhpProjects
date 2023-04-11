<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ol>
        <?php
        $students=array("Иван Иванов","Драган Драганов","Димо Петров");
        $grades=array(4,5.45,5.67);

        for($i=0;$i<=2;$i++){
           echo "<li>"."Студент ".$students[$i]." има успех: ".$grades[$i]."</li>";
        }

        ?>
    </ol>
    <ul>
        <?php
        $students=array("Иван Иванов","Драган Драганов","Димо Петров");
        $grades=array(4,5.45,5.67);

        for($i=0;$i<=2;$i++){
           echo "<li>"."Студент ".$students[$i]." има успех: ".$grades[$i]."</li>";
        }

        ?>
    </ul>
    <style>
        ul{
            list-style-type: disc;
        }
    </style>
    <style>
    table, th, td {
    border:1px solid black;
    }
    </style >
    <table  style="width:100%">
        <tr>
            <th>Име, Фамилия</th>
            <th>Успех</th>
        </tr>
        
            <?php
                for($k=0;$k<=2;$k++){
                    echo "<tr>";
                    echo "<td>".$students[$k]."</td>";
                    echo "<td>".$grades[$k]."</td>";
                    echo "</tr>";
                }
            ?>
        
    </table>
    <br>
    <br>
    <br>
    <br>
    
        <?php
            $cities=array("Beijing","Buernos Aires","Cairo","Lagos","London","Mexico City","Mumbai","New York","Seoul","Shanghai","Tokyo");
            rsort($cities);
            foreach($cities as $val)
                echo $val." ";
            echo "<br>"."<br>";
            sort($cities);
            echo "<ul>";
            foreach($cities as $val)
                echo "<li>".$val."</li>";
            echo "</ul>";
            echo "<br>";
            echo "<ol>";
            foreach($cities as $val)
                echo "<li>".$val."</li>";
            echo "</ol>";
            echo "<br>";
            
        ?>
        <table>
            <tr>
                <th>key</th>
                <th>value</th>
            </tr>
            <?php
                $p=0;
                foreach($cities as $val){
                echo "<tr>";
                echo "<td>";
                ksort($cities);
                echo $p++;
                echo "</td>";
                echo "<td>"; 
                sort($cities);
                echo $val;
                echo "</td>";
                echo "</tr>";
                }
            ?>
        </table>
        <form action="exer4.php" method="post">
        <br>
        <br> 
        Please enter your information:
        <br>
        <br>
        City: <input type="text" name="city">Month: <input type="text" name="month">Year: <input type="text" name="year">
        <br>
        <br>
        Please choose the kinds of weather you experienced from the list below.
        <br>
        Choose all that apply.
        <br>
        <br>
        <input type="checkbox" name="weather[]" value="sunshine" />Sunshine<br />
        <input type="checkbox" name="weather[]" value="sunshine" />Clouds<br />
        <input type="checkbox" name="weather[]" value="sunshine" />Rain<br />
        <input type="checkbox" name="weather[]" value="sunshine" />Hail<br />
        <input type="checkbox" name="weather[]" value="sunshine" />Sleet<br />
        <input type="checkbox" name="weather[]" value="sunshine" />Snow<br />
        <input type="checkbox" name="weather[]" value="sunshine" />Wind<br />
        <input type="checkbox" name="weather[]" value="sunshine" />Cold<br />
        <input type="checkbox" name="weather[]" value="sunshine" />Heat<br />
        <br>
        <button>Go</button>
        </form>
</body>
</html>