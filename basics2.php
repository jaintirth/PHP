<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basics 2</title>
</head>
<body>
    <?php
        $age = 9;
        if($age>18){
            echo 'you can vote';
        }
        else if($age==9){
            echo 'you are 9 years old';
        }
        else{
            echo 'you cannot vote';
        }

        //arrays
        echo '<br>';
        $languages = array('python','c','c++','php');
        echo $languages[2];

        //loops
        //while loop
        echo '<br>';
        echo "using while loop";
        $i=0;
        while($i<count($languages)){
            echo "<br> Language  ";
            echo $i+1;
            echo " : ";
            echo $languages[$i];
            $i++;
        }

        //for loop
        echo '<br>';
        echo "using for loop";
        for($j=0;$j<count($languages);$j++){
            echo "<br>Language ";
            echo $j+1;
            echo " is : ";
            echo $languages[$j];
        }

        //foreach loop
        echo '<br>';
        echo "using foreach loop";
        foreach($languages as $value){
            echo '<br>language : ';
            echo $value;
        }

        //functions
        function print2(){
            echo'<br>';
            echo 'two';
        }
        print2();
        print2();

        function print_number($number){
            echo '<br>';
            echo 'Your number is : ';
            echo $number;
        }
        print_number(39);
        print_number(12);
    ?>
</body>
</html>