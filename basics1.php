<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>
</head>
<body>
    <div class="container">
        This is my first PHP Website
    </div>
    <?php
        echo "printed using php";
        //single line comment
        /* this
            is 
            multiple
            line 
            comment
        */
        $var1 = 23;
        $var2 = 12;
        echo "<br>";
        Echo $var1;
        echo "<br>";
        echo $var2;
        echo "<br>";

        //arithmetic operators

        echo "variable1 + variable2 : ";
        Echo $var1+$var2;
        echo "<br>";
        echo "variable1 - variable2 : ";
        echo $var1-$var2;
        echo "<br>";
        echo "variable1 * variable2 : ";
        echo $var1*$var2;
        echo "<br>";
        echo "variable1 / variable2 : ";
        echo $var1/$var2;
        echo '<br>';
        $var1+=1;
        $newvar = $var1;
        echo $newvar;
        echo '<br>';


        //comparision operators
        echo "1==3 : ";
        echo var_dump(1==3);
        echo '<br>';

        echo "1!=3 : ";
        echo var_dump(1!=3);
        echo '<br>';

        echo "1>=3 : ";
        echo var_dump(1>=3);
        echo '<br>';

        echo "1<=3 : ";
        echo var_dump(1<=3);
        echo '<br>';

        //increment decrement operators
        echo 'var1++ : ';
        echo $var1++;
        echo '<br>';

        //logical operators
        $myvar = true && true;
        echo 'true && true : ';
        echo(var_dump($myvar));
        echo '<br>';

        $myvar2 = false && true;
        echo 'false && true : ';
        echo(var_dump($myvar2));
        echo '<br>';

        $myvar3 = false || true;
        echo 'false || true : ';
        echo(var_dump($myvar3));
        echo '<br>';

        //data types 
        $var = 67;
        echo var_dump($var);
        echo "<br>";

        $var = 67.1;
        echo var_dump($var);
        echo "<br>";

        $var = 'string';
        echo var_dump($var);
        echo "<br>";

        $var = true;
        echo var_dump($var);
        echo "<br>";

        define('pi',3.14);

        echo pi;
        echo '<br>';
        echo var_dump(pi);
    ?>
</body>
</html>